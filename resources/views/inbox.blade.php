<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Messages Reçus</h1>

        <!-- Messages Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Service</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $message)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->service }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm view-message-btn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#viewMessageModal"
                                    data-name="{{ $message->name }}"
                                    data-email="{{ $message->email }}"
                                    data-phone="{{ $message->phone }}"
                                    data-service="{{ $message->service }}"
                                    data-message="{{ $message->message }}">
                                    Voir
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Aucun message trouvé</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewMessageModal" tabindex="-1" aria-labelledby="viewMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewMessageModalLabel">Détails du Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nom :</strong> <span id="modalName"></span></p>
                    <p><strong>Email :</strong> <span id="modalEmail"></span></p>
                    <p><strong>Téléphone :</strong> <span id="modalPhone"></span></p>
                    <p><strong>Service :</strong> <span id="modalService"></span></p>
                    <p><strong>Message :</strong></p>
                    <p id="modalMessage" class="border rounded p-3"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Remplir le modal avec les données du message sélectionné
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('viewMessageModal');
            const modalName = document.getElementById('modalName');
            const modalEmail = document.getElementById('modalEmail');
            const modalPhone = document.getElementById('modalPhone');
            const modalService = document.getElementById('modalService');
            const modalMessage = document.getElementById('modalMessage');

            document.querySelectorAll('.view-message-btn').forEach(button => {
                button.addEventListener('click', function () {
                    modalName.textContent = this.getAttribute('data-name');
                    modalEmail.textContent = this.getAttribute('data-email');
                    modalPhone.textContent = this.getAttribute('data-phone');
                    modalService.textContent = this.getAttribute('data-service');
                    modalMessage.textContent = this.getAttribute('data-message');
                });
            });
        });
    </script>
</body>
</html>

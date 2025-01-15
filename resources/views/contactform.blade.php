<form action="{{ route('saveMessage') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-12 col-sm-6">
            <input type="text" name="name" class="form-control border-0"
                placeholder="Your Name" style="height: 55px;" required>
        </div>
        <div class="col-12 col-sm-6">
            <input type="email" name="email" class="form-control border-0"
                placeholder="Your Email" style="height: 55px;" required>
        </div>
        <div class="col-12 col-sm-6">
            <input type="text" name="mobile" class="form-control border-0"
                placeholder="Your Mobile" style="height: 55px;" required>
        </div>
        <div class="col-12 col-sm-6">
            <select name="service" class="form-select border-0" style="height: 55px;"
                required>
                <option selected disabled>Select A Service</option>
                <option value="Fence">Fence</option>
                <option value="Commercial">Commercial</option>
                <option value="Residential">Residential</option>
                <option value="MDU">MDU</option>
                <option value="ADU">ADU</option>
            </select>
        </div>
        <div class="col-12">
            <textarea name="note" class="form-control border-0" placeholder="Special Note"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Contact us</button>
        </div>
    </div>
</form>

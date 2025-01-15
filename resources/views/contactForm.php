<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $mobile = htmlspecialchars(strip_tags(trim($_POST['mobile'])));
    $service = htmlspecialchars(strip_tags(trim($_POST['service'])));
    $note = htmlspecialchars(strip_tags(trim($_POST['note'])));

    // Email address to send messages to
    $to = "cs@cresttel.net";
    $subject = "Cresttel Contact Mail";

    // Validate required fields
    if (empty($name) || empty($email) || empty($mobile) || empty($service)) {
        echo "All fields except 'Special Note' are required. Please fill out the form completely.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Prepare the email content
    $emailContent = "You have received a new contact form submission:\n\n";
    $emailContent .= "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Mobile: $mobile\n";
    $emailContent .= "Service: $service\n\n";
    $emailContent .= "Special Note:\n$note\n";

    // Email headers
    $fromEmail = "no-reply@cresttel.net"; // Replace with a valid "From" email from your domain
    $headers = "From: Your Company <$fromEmail>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Attempt to send the email
    if (mail($to, $subject, $emailContent, $headers)) {
        // Redirect to the success page
        header("Location: success.blade.php");
        exit;
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>

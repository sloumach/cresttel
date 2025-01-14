<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Email address to send messages to
    $to = "cs@cresttel.net";
    $subject = "New Contact Form Submission";

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required. Please fill out the form completely.";
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
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message\n";

    // Email headers
    $fromEmail = "no-reply@cresttel.net"; // Replace with a valid domain-specific email
    $headers = "From: Cresttel <$fromEmail>\r\n";
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

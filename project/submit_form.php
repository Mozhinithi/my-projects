<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Recipient email address
        $to = "your_email@example.com";  // Replace with your email address
        $subject = "Contact Form Submission from $name";
        
        // Email body
        $body = "Name: $name\n";
        $body .= "Email: $email\n\n";
        $body .= "Message:\n$message\n";

        // Email headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send the message.";
        }
    } else {
        echo "Invalid email format.";
    }
} else {
    echo "Invalid request method.";
}
?>

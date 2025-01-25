<?php
// process_contact.php

// Sanitize input data to prevent injection attacks
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $currentProduct = sanitize_input($_POST['currentProduct']);
    $serialNumber = sanitize_input($_POST['serialNumber']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("Please fill out all required fields.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Prepare email
    $to = "support@softwarefarm.co.za";
    $email_subject = "Contact Form Submission: $subject";
    $email_body = "You have received a new message from the contact form:\n\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Phone: $phone\n" .
                  "Using Product: $currentProduct\n" .
                  ($currentProduct === "Yes" ? "Serial Number: $serialNumber\n" : "") .
                  "Subject: $subject\n\n" .
                  "Message:\n$message";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for contacting us! Your message has been sent.";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
} else {
    die("Invalid request method.");
}
?>

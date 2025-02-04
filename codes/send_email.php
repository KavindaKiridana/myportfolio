<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email recipient
    $to = "kavindakiridena@gmail.com";
    
    // Email subject
    $subject = "New Contact Form Submission from Portfolio";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect back to contact page with success message
        header("Location: contact.html?status=success#contactForm");
    } else {
        // Redirect back to contact page with error message
        header("Location: contact.html?status=error#contactForm");
    }
} else {
    // If not a POST request, redirect to the contact page
    header("Location: contact.html");
}
?>
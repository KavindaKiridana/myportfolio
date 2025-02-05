<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    try {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "kavindakiridena@gmail.com";
        $mail->Password = "ivif zapz khst bdmi";//tell me wht would happne if i accidentally shared this with my email
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($email, $name);  // This sets the sender as the person who filled out the form
        $mail->addAddress("kavindakiridena@gmail.com", "Jelly");  // This is where the email will be sent to

        $mail->Subject = "myportfolio reply";
        $mail->Body = "Name: $name\n".
             "Email: $email\n".
             "Message: $message";

        if($mail->send()){
           // Redirect back to contact page with success message
           header("Location: contact.php?status=success#contactForm");
        }else{
           // Redirect back to contact page with error message
           header("Location: contact.php?status=error#contactForm");
        }
    } catch (Exception $e) {
        header("Location: contact.php?status=error#contactForm");
    }

} 
?>
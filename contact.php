<?php


      if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        $to = 'info@zstinger.com';
        $subject = 'Contact Form Submission';
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: ". $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
        $message = '<html><body>';
        $message .= '<h1>Contact Form Submission</h1>';
        $message .= '<p><strong>Name: </strong>' . $name . '</p>';
        $message .= '<p><strong>Email: </strong>' . $email . '</p>';
        $message .= '<p><strong>Subject: </strong>' . $subject . '</p>';
        $message .= '<p><strong>Message: </strong>' . $message . '</p>';
        $message .= '</body></html>';

        if (mail($to, $subject, $message, $headers)) {
            echo "Your message has been sent successfully!";
        } else {
            echo "Failed to send your message. Please try again.";
        }


      }




 ?>

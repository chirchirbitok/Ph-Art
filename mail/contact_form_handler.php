<?php 
    $visitor_name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $visitor_message = $_POST['message'];

    $email_from = 'douglasbitok@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                    "User Name: $visitor_email. \n".
                    "User Phone Number: $visitor_phone. \n".
                    "User Message: $visitor_message.\n";

    $to = "douglasbitok@gmail.com";

    $headers = "Form:  $email_from \r\n";
    
    $headers = "Reply-To: $visitor_email \r\n";

    //this will send the email on your email address
    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact_me.html");
?>
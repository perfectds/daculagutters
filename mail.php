<?php

// ini_set('SMTP', 'smtp.example.com');
// ini_set('smtp_port', 587);

    $name1=$_POST['name'];
    $email1=$_POST['email'];
    $phone=$_POST['phone'];
    $company=$_POST['company'];


    // $to = $email1;
    // $subject = 'Hello!';
    
    // $headers['From'] = 'sender@example.com';
    // $headers['MIME-Version'] = 'MIME-Version: 1.0';
    // $headers['Content-type'] = 'text/html; charset=iso-8859-1';
    
    // $message = ' <html>
    // <head>
    //     <title>Review Request Reminder</title>
    // </head>
    // <body>
    //     <p>Here are the cases requiring your review in December:</p>
    // </body>
    // </html>
    // ';
    
    // $result = mail($to, $subject, $message, $headers);
    
    // if ($result) {
    //     header("location:http://localhost/daculagutters-main/?mail=1");
    //     //echo 'Success!' . PHP_EOL;
    // } else {
    //     echo 'Error.' . PHP_EOL;
    // }


        require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.himanshukashyap.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testing@himanshukashyap.com';                 // SMTP username
$mail->Password = '94BOkYs59Kf*';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('testing@himanshukashyap.com', 'MKDRIC');
$mail->addAddress($email1, 'Joe User');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'MKDRIC Ragistration Information';
$mail->Body    = $email1;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("location:http://localhost/daculagutters-main/?mail=1");
}
  
  
?>
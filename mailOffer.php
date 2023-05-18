<?php
session_start();
define("SunnyDays", true);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


if(isset($_POST['send'])) {


    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $phone = htmlentities($_POST['phone']);
    $adress = htmlentities($_POST['adress']);
    $consume = htmlentities($_POST['consume']);
    $quadrature = htmlentities($_POST['quadrature']);
    $subject = "Sended from Contact Form";
    $message = htmlentities($_POST['message']);
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'panayotov.deyan@gmail.com';            //SMTP username
    $mail->Password   = 'nxduoejhdukhlcai';                     //SMTP password //Real is in Google Account
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
    $mail->isHTML(true);                                        //Set email format to HTML
    
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress("panayotov.deyan@gmail.com");             //Add a recipient
    // $mail->addAddress($_POST['name']);                       //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->Subject = ("$email ($subject)");

    $mail->Body = ("Изпратено от: <strong>$name</strong>,<br>
                    Email: <strong>$email</strong>,<br>
                    Телефон: <strong>$phone</strong>,<br>
                    Адрес: <strong>$adress</strong>,<br>
                    Kонсумация на месец: <strong>$consume kw/h</strong>,<br>
                    Квадратура на покрива: <strong>$quadrature кв.</strong>,<br>
                    Коментар: <strong>$message</strong>");

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    echo "<script> 
    alert ('Запитването е изпратено успешно')
    document.location.href = 'index.php';
    </script>";
}
?>
  <?php
    
        require("class.phpmailer.php");

        $name       =   $_POST['name'];
        $email      =   $_POST['email'];
        $message    =   $_POST['comment'];

        $mail = new PHPMailer();

        $mail->IsSMTP();  // telling the class to use SMTP
        $mail->Host     = "relay-hosting.secureserver.net"; // SMTP server

        $mail->From     = "admin@robertgividen.com";
        $mail->Username = "robertgividen";
        $mail->Password = "964Giv3806";
        $mail->AddAddress("freedomcobra@gmail.com");

        $mail->Subject  = "$name \n $email";
        $mail->Body     = "$message";
        $mail->WordWrap = 50;

        if(!$mail->Send()) {
            echo 'Message was not sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }
?>
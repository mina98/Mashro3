<?php
require '../APIs/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'kirloesboles98@gmail.com';
$mail->Password = 'KokoComputer1998';
$mail->setFrom('kirloesboles98@gmail.com', 'Senaid Bacinovic');

    
   include '../models/list.php';
    $recobj= new Display("users");
    $recored=$recobj->getLastRecordDESC();
    $id=$recored['id'];
    $to=$_SESSION['EMAIL'];
    
    
    $usertype=5;
    $accesscode=$id.$_SESSION['UERname'].$usertype;
    
    
$mail->addAddress($to);
$mail->Subject = 'ACCESS CODE ';
$mail->Body = 'your access code is:'.$accesscode ;

if (!$mail->send())
{ 
    echo "nonasht8l";
}

?>
<?php
require("/home2/weblocalmx/public_html/PHPMailer-master/src/PHPMailer.php");
require("/home2/weblocalmx/public_html/PHPMailer-master/src/SMTP.php");

 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "weblocalmx.com";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "hola@weblocalmx.com";
 $mail->Password = "micorreo2020";
 

 $mail->SetFrom($_POST['correo'],$_POST['nombre']);//linea agregada
 
 $mail->Subject = "Mensaje desde formulario web ";

$mail->Body = "MENSAJE ENVIADO POR:  " .$_POST['nombre']. 
"____SU CORREO ES: " . $_POST['correo'] .
"____COMENTARIO: " . $_POST['comentario'] ;

 
 $mail->AddAddress("hola@weblocalmx.com");
 if(!$mail->Send()) {
 echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
     header("Location: exito.html");
exit;
 //echo "Mensaje enviado correctamente";
 }
 //header("Location: exito.html");
?>
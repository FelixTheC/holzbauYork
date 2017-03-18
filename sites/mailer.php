<?php
  if(isset($_POST['submit'])) {
    //Klasse einbinden
    require('../PHPMailer-master/class.phpmailer.php');
    
    //Instanz von PHPMailer bilden
    $mail = new PHPMailer();
    //Absenderadresse der Email setzen
    $mail->From = $_POST['Mail'];
    
    //Name des Abenders setzen
    $mail->FromName = $_POST['Name'];
    
    //Empfängeradresse setzen
    $mail->AddAddress("info@holzbau-york-hinz.de");
    
    //Betreff der Email setzen
    $mail->Subject = "Anfrage über meine Homepage";
   
    //Text der EMail setzen
    $mail->Body = $_POST['Nachricht'];
    
    //EMail senden und überprüfen ob sie versandt wurde
    if(!$mail->Send())
    {
       //$mail->Send() liefert FALSE zurück: Es ist ein Fehler aufgetreten
       echo "<h1>Die Email konnte nicht gesendet werden</h1>";
       echo "Fehler: " . $mail->ErrorInfo;
    }
    else
    {
       //$mail->Send() liefert TRUE zurück: Die Email ist unterwegs
       echo "<meta http-equiv='refresh' content='0; URL=http://www.holzbau-york-hinz.de/sites/success.html'>";
    }
  }
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $res = '';
    $email = new PHPMailer();
    $email->SetFrom("gwendal.mains@epsi.fr", "Gwendal"); //Name is optional   //Expediteur
    $email->Subject = "Vérification d'état d'email";
    $email->Body = "";
    $email->AddAddress("gwendal.mains@epsi.fr");//destinataire
    $email->addReplyTo($_POST['email']);//email de retour
    $email->AddAttachment($_POST['file'], basename($_POST['file']));

    if($email->Send()) {
        $res = "Email envoyé avec succés";
    }
    else {
        $res  = "Erreur lors de l'envoie";
    }
}
catch (Exception $e) {
    $res = $e->getMessage();
    //Error messages
}

return $res;
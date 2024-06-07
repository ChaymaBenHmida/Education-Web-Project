<?php
include '../controller/cours_c.php';
include 'Mail.php';
$coursC=new coursC();
$coursC->supprimerCours($_GET["id_cours"]);
$email_content = array(
    'Subject' => 'IMPORTANT!! VERIFICATION COURS BY MindBenderS',
    'body' => "Bonjour Mr/Mme,
    Votre cours a été vérifier avec succèss et était $rep
    Merci pour votre efforts.
    cordialement,

    MindBenders"
);
$email='mindbenders881@gmail.com';

sendemail($email,$email_content);



header('Location:afficher.php');
?>



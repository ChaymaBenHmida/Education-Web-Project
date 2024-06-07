<?php
include '../controller/cours_c.php';
include 'Mail.php';
$id_cours = $_POST["id_cours"];
$coursC=new coursC();
if(
    isset($_POST['radioo'])
){
    $cours = new cours('','','','','','','',$_POST['radioo']);
    if($_POST['radioo']=='acceptée')
    {
    $coursC->modifierstatutA($id_cours, $cours);
    header('Location: afficher.php');
    }
    else if($_POST['radioo']=='refusée')
    {
    $coursC->modifierstatutR($id_cours, $cours);
    header('Location: afficher.php');
    }
    $rep=$_POST['radioo'];
    $email='mindbenders881@gmail.com';
     $email_content = array(
    'Subject' => 'IMPORTANT!! VERIFICATION COURS BY MINDBENDERS',
    'body' => "Bonjour Mr/Mme ,
    Votre cours a été vérifier avec succès et était $rep
    Merci pour votre efforts.
    cordialement,
    
    MindBenders"
);
sendemail($email,$email_content);
}
else
header('Location: afficher.php');
?>
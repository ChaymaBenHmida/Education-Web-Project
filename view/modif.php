<?php
       include_once '../controller/cours_c.php';
       include_once '../model/cours.php';
      
        $error = "";
    $date2= date('Y-m-d');
    $date1=$_GET['date1'];
 $cours = null;

    $coursC = new coursC();
    if (
        isset($_POST["contenu"]))
             
        {
       
            $cours= new cours(
                $_POST["contenu"],
                $_POST["image"],
                /*$_POST["url"],*/
                $date1,
                $date2,
                $_POST["titre"],
                $_POST["categorie"],
                $_POST["statu"], /*zedtou baad youssef*/
            
            );
            $coursC->modifierCours($cours,$_GET["id_cours"]);
            header('Location:afficher.php');
        }
        else
            $error = "Missing information";
            
    
?>
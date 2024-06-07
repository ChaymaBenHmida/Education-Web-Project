
<?php
   
    include_once '../controller/cours_c.php';
    include_once '../model/cours.php';
        $error = "";
    $date1= date('Y-m-d').
 $cours = null;

    $coursC = new coursC();
    if (
        isset($_POST["lname"]) &&
        isset($_POST["fname"]) &&        
        /*isset($_POST["url"])&&*/
        isset($_POST["titre"]) &&  
         isset($_POST["categorie"])
         ) 
        {
        if (
            !empty($_POST["lname"]) && 
            !empty($_POST["fname"]) &&
          /*  !empty($_POST["url"])  && */
            !empty($_POST["titre"]) &&
            !empty($_POST["categorie"]) 
        ) {
            $cours = new cours(
                $_POST['fname'],
                $_POST['lname'],
              /*  $_POST['url'] ,*/
                $date1,
                '',
                 $_POST['titre'],
                $_POST['categorie'],
                'encours', /*zedtha wahdi*/ 
            );
            $coursC->ajouterCours($cours);
            header('Location:FRONT.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html>
   <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FormAjoutCours</title>
<link rel="stylesheet" href="formationS.css">
   </head>

   <body>
<div class="wrapper">
    <div class="title">
      Ajouter un cours :
    </div>
<form action="" method="post">
    <div class="form" name="monFormulaire" id="monFormulaire" onsubmit="return false">  

          <div class="inputfield">
          <label>Contenu : </label>
          <input type="file" id="fname" name="fname" class="input" placeholder="saisissez le contenu..">
          <div class="alertNom"></div>
       </div>   

        <div class="inputfield">
          <label>Image : </label>
          <input type="file" id="lname" name="lname" class="input"placeholder="saisissez les images..">
            <div class="alertPrenom"></div>
       </div>   

    
        <div class="inputfield">
          <label>Titre : </label>
          <input type="text" id="titre" name="titre" class="input" placeholder="saisissez le titre.." required>
            <div class="alerttitre"></div>
       </div>   

       <div class="inputfield">
          <label>Catégorie du cours : </label>
          
                  <tr>
                    <td><select name="categorie" id="catg" desabled required>Categories
                       <option selected value="s">Select</option>
                    <option value="programmation">Programmation</option>
                    <option value="maths">Maths</option>
                    <option value="reseaux">Réseaux</option></select></td>
                   </tr>
                    <div class="alertcateg"></div>
        </div>   
      <div class="inputfield">
      <!--	<button class="btn"><a href="Mail.php">Envoyer</a></button>-->
     <button class="btn" type="submit" onclick="myFunction()"><a>Envoyer</a></button>
          
          <script>
               function myFunction() 
               {
                    alert("Votre suggestion est envoyée avec succès,nous vous répondrons par e-mail bientôt");
                }
          </script>
  
        <button class="btn"><a href="FRONT.php">Annuler</a></button>

       <!-- <input type="reset" value="Tout enlever" class="btn">
        <input type="submit" value="Envoyer" class="btn"> -->
      <!--  href="Mail.php" -->
      </div>
    </div>
  </form>
    <div class="alert"></div>
</div>

 <script src="formationS.js"></script> 
   </body>
</html>

 
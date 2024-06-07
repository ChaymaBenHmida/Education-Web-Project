<?php
   
    include_once '../controller/cours_c.php';
    include_once '../model/cours.php';
        $error = "";
    $date1= date('Y-m-d').
 $cours = null;

    $coursC = new coursC();
    if (
        isset($_POST["contenu"]) &&
        isset($_POST["image"]) &&        
        /*isset($_POST["url"])&&*/
        isset($_POST["titre"]) &&  
         isset($_POST["categorie"])&&
         isset($_POST["statu"]) /*zedtha wahdi*/ 
         ) 
        {
        if (
            !empty($_POST["contenu"]) && 
            !empty($_POST["image"]) &&
          /*  !empty($_POST["url"])  && */
            !empty($_POST["titre"]) &&
            !empty($_POST["categorie"]) &&
            !empty($_POST["statu"]) /*zedtha wahdi*/   
        ) {
            $cours = new cours(
                $_POST['contenu'],
                $_POST['image'],
              /*  $_POST['url'] ,*/
                $date1,
                '',
                 $_POST['titre'],
                $_POST['categorie'],
                $_POST['statu'], /*zedtha wahdi*/ 
            );
            $coursC->ajouterCours($cours);
            header('Location:afficher.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="affichage.css">

    <title>Ajouter</title>
</head>
    <body>
   <hr>
        
        <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="title">MindBenders</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">    
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Avis et Réclamations</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Aide</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Paramétres</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Se déconnecter</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                      <!---- search -->
                      <div class="search">
                        <label>
                            <input type="text" placeholder="Chercher ici">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
           
                
              <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Ajout</h2>
                           <!-- <a href="#" class="btn">Tout voir</a> -->
                            </div>
        
        <form action="" method="POST">
            <div>
            <button class="btn"><a href="afficher.php">Retour à la liste des cours</a></button>
</div>
            <table border="2" align="center">
                <thead>
                <tr>
                    <td>
                        
                        <label for="contenu">Contneu:
                        </label>
                    </td>
                    <td><input type="text" name="contenu" id="contenu" maxlength="20"></td>
                </tr> <!--kenet file badltha text-->
                <tr>
                    <td>
                        <label for="image">Image:
                        </label>
                    </td>
                    <td><input type="file" name="image" id="image" maxlength="20"></td>
                </tr>
               <!-- <tr>
                    <td>
                        <label for="url">Url:
                        </label>
                       
                    </td>
                    <td><input type="text" name="url" id="url" maxlength="20"></td>
                </tr> -->
                <td>
                         <label for="titre">Titre Cours:
                        </label>
                    </td>
                    <td><input type="text" name="titre" id="titre" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="categorie">Categorie:
                        </label>
                       
                    </td>
                   
                
                    <td><select name="categorie" id="catg" desabled>Categories
                    <option value="programmation">programmation</option>
                    <option value="maths">maths</option>
                    <option value="reseaux">reseaux</option></select></td>
                         </tr>
                  
                    <tr>
                    <td>
                        <label for="statu">Status du cours:
                        </label>
                       
                    </td>
                    <td><select name="statu" id="statu" desabled>
                    <option value="acceptée">Accepté</option>
                    <option value="refusée">Refusé</option>
                    <option value="encours">En Cours</option></select></td>
                   </tr>

                    <tr>
                    <td>
                    <input type="submit" class="btn" value="Envoyer" href="afficher.php">
                        <input type="reset" class="btn" value="Annuler" >
                        </td>
                </tr>
            </table>
        </form>
       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        

        <script>
            //Menu Toggle
            let toggle = document.querySelector(".toggle");
            let navigation = document.querySelector('.navigation');
            let main= document.querySelector('.main');
        
            toggle.onclick = function(){
                navigation.classList.toggle("active");
                main.classList.toggle("active")
            }
        
            //adding hoverd class in selected div ! 
            let list =document.querySelectorAll(".navigation li");
            function activeLink(){
                list.forEach((item)=>
                item.classList.remove('hovered'));
                this.classList.add('hovered')
            }
            list.forEach((item)=> 
            item.addEventListener('mouseover',activeLink));
        </script>
        
    </body>
</html>
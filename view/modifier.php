<?php 
include_once '../controller/cours_c.php';
include_once '../model/cours.php';
$coursC = new coursC();
?>

<html 
lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="affichage.css">

    <title>Modifier</title>
</head>
    <body>            
            <button class="btn"><a href="afficher.php">Retour à la liste des cours</a></button>
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
                     <h2>Modifier</h2>
                     <a href="#" class="btn">Tout voir</a>
                     </div>
<div id="error">
            <?php echo $error; ?>
            <?php
            if (isset($_GET['id_cours'])){
                $cours = $coursC->recuperer($_GET['id_cours']);
                    
            ?>
        </div>
        <form action="modif.php?id_cours=<?php echo $_GET['id_cours']?>&date1=<?php echo $cours['date_c']?>" method='post'>
            <table border="1" align="center">
                <thead>
                <tr>
                    <td>
                        
                        <label for="contenu">Contenu:
                        </label>
                    </td>
                    <td><input type="file" name="contenu" id="contenu" value="<?php echo $cours['contenu']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="image">Image:
                        </label>
                    </td>
                    <td><input type="file" name="image" id="image" value="<?php echo $cours['image']; ?>" maxlength="20"></td>
                </tr>
              <!--  <tr>
                    <td>
                        <label for="url">Url:
                        </label>
                       
                    </td>
                   
                
                    <td><input type="text" name="url" id="url"  value="<?php /*echo $cours['url']; */?>"  maxlength="20"></td>
                        
                    </td> -->

                
                     <tr>
                     <td>
                         <label for="titre">Titre Cours:
                        </label>
                    </td>
                    <td><input type="text" name="titre" id="titre" maxlength="20" value="<?php echo $cours['titre_c']; ?>"></td>
                </tr>

                <tr>
                    <td>
                        <label for="categorie">Categorie:
                        </label>
                       
                    </td>
                    <td>
                        <select name="categorie" id="catg" desabled>Categories
                        <?php if(strcmp($cours['categorie_c'],"programmation")==0){?>
                    <option value="programmation">programmation</option>
                    <option value="maths">maths</option>
                    <option value="reseaux">reseaux</option>
                    <?php }?>
                    <?php if(strcmp($cours['categorie_c'],"maths")==0){?>
                    <option value="maths">maths</option>
                    <option value="programmation">programmation</option>
                    <option value="reseaux">reseaux</option>
                    <?php }?>
                    <?php  if(strcmp($cours['categorie_c'],"reseaux")==0){?>
                    <option value="reseaux">reseaux</option>
                    <option value="programmation">programmation</option>
                    <option value="maths">maths</option>
                     </select></td>
                    <?php }?>
                 </tr>
<!----------------------------------------------------------------------------------->
<tr>
                    <td>
                        <label for="statu">Status du cours:
                        </label>
                       
                    </td>
                    <td><select name="statu" id="statu" desabled>Status Cours
                    <option value="acceptée">Accepté</option>
                    <option value="refusée">Refusé</option>
                    <option value="EnCours">En Cours</option></select></td>
                    
                   </tr>


<!------------------------------------------------------------------------------------->
                   
                   
                    <tr>
                    <td>
                      <input type="submit" class="btn"  value="Terminer" ></input>
                      <input type="reset"  class="btn" value="Annuler" ></input>
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
             <?php } ?>
         </form>

    </body>
</html>
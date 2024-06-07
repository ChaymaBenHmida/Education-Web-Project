<?php
       include_once '../controller/categorie_c.php';
       include_once '../model/categorie.php';

        $error = "";
    
     $categorie = null;
$id=$_GET['idCategorie'];
    $categorieC = new categorieC();
    if (
        isset($_POST["nomCategorie"]) 
    ) {
        if (
            !empty($_POST["nomCategorie"])  
        ) {
            $categorie = new categorie(
                $_POST["nomCategorie"]
            
            );
            $categorieC->modifierCategorie($categorie,$id);
            header('Location:affichercategorie.php');
        }
        else
            $error = "Missing information";
    }
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
                <!-- <button class="btn"><a href="affichercategorie.php">Retour à la liste des catégories</a></button>
           <hr>
                     <a href="#" class="btn">Tout voir</a> -->
                
<div id="error">
            <?php echo $error; ?>
 </div>
            <?php
            if (isset($_GET['idCategorie'])){
                $categorie = $categorieC->recuperercategorie($_GET['idCategorie']);
                    
            ?>

            <form action="" method="POST">
            <button class="btn"><a href="affichercategorie.php">Retour à la liste des catégories</a></button>
           <hr>    	
            <table border="1" align="center">
               
                <tr>
                    <td>
                        <label for="nomCategorie">Nom du catégorie:
                        </label>
                    </td>
                    <td><input type="text" name="nomCategorie" id="nomCategorie" value="<?php echo $categorie['nomCategorie']; ?>" maxlength="20"></td>
                </tr>

                  <tr>
                    <td>
                    <input type="submit" class="btn" value="Envoyer">
                        <input type="reset"  class="btn" value="Annuler" >
                        </td>
                </tr>

            </table>
        </form>
       <?php
        }
       ?>
   </tbody>
    </table>
</div>
</div>

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
<?php
include '../controller/cours_c.php';
$coursC=new coursC();
$liste=$coursC->afficherCours();
?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Afficher</title>

   <link rel="stylesheet" type="text/css" href="affichage.css">

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
                        <span class="title">Paramètres</span>
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
                            <h2>Liste des cours</h2>

                            <a href="ajout.php" class="btn">Ajouter un cours </a>
                        </div>
                       <table border="1" align="center">
                            <thead>
                            <tr>
                                <td>Contenu</td>
                                <td>Image</td>
                                <!--<td>Url</td>-->
                                 <td>Date création</td>
                                <td>Date modification</td>
                                 <td>Titre</td>
                                 <td>Categorie</td>
                                 <td>Statut</td>
                                 <td>Changer statut</td>>
                                <td>Modifer</td>
                                <td>Supprimer</td>
                            </tr>
                        </thead> 
                        <tbody>
                        <?php 
                        foreach($liste as $cours){
                        ?>
                            <tr>
                            <td><?php echo $cours['contenu']; ?></td>
                            <td><?php echo $cours['image']; ?></td>
                             <!--<td><?php /*echo $cours['url'];*/ ?></td>-->
                              <td><?php echo $cours['date_c']; ?></td>
                             <td><?php echo $cours['date_modification']; ?></td>
                             <td><?php echo $cours['titre_c']; ?></td>
                             <td><?php echo $cours['categorie_c']; ?></td>
                             <td><?php echo $cours['statu']; ?></td>

                             <td>
                                        <form action="modifierStatut.php" method="POST">
                                        <div class="container">
                                        <div class="radio">
                                        <input id="radio-1" name="radioo" type="radio" value="acceptée">
                                        <label for="radio-1" class="radio-label">Accepter</label>
                                        </div>
                                        <div class="radio">
                                        <input id="radio-2" name="radioo" type="radio" value="refusée">
                                        <label  for="radio-2" class="radio-label">Refuser</label>
                                        </div>
                                        </div>
                                        <input type="submit" class="btn" value="valider">
                                        <input type="hidden" name="id_cours" value="<?php echo $cours['id_cours'] ?>">
                                        </form>
                                        </td>
                    
                             <td><a href="modifier.php?id_cours=<?php echo $cours['id_cours']; ?>" class="btn">Modifier</a></td>

                                <td><a href="supprimer.php?id_cours=<?php echo $cours['id_cours']; ?>" class="btn">Supprimer</a></td>
                                


                            </tr>
                       <?php } ?>
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
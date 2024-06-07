<?php
include '../controller/cours_c.php';
include '../controller/categorie_c.php';
$coursC = new coursC();
$listec=$coursC->afficherCours();
$categorieC = new categorieC();
$listec=$categorieC->afficherCategorie();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindBenders Education</title>
    <link rel="stylesheet" href="FRONT.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" type="text/css" href="FRONT.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #1877f2;
  color: white;
}
.fa-twitter {
  background: #1DA1F2;
  color: white;
}
.fa-linkedin {
  background: #0077b5;
  color: white;
}
</style>

</head>


<body>
    <section class="header">
<nav>
    <a href="indexF.html"> <img src="eduford_img/logo.png"> </a>
    <div class="nav-links" id="navLinks">
      <i class="fa fa-times" onclick="hideMenu()"></i>
<ul>
    <li><a href="">MINDBENDERS</a></li>
    <li><a href="">QUI SOMMES NOUS?</a></li>
    <li><a href="">S'INSCRIRE</a></li>
    <li><a href="">SE CONNECTER</a></li>
    <li><a href="formationS.php">AJOUTER COURS</a></li>
    <li><a href="">CONTACT</a></li>
</ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>

</nav>

<div class="text-box">
    <h1>Bienvenue chez MindBenders</h1>
    <p>Nous sommes la meilleur solution pour vous </p>
    <a href="" class="hero-btn">Inscrivez vous pour plus de détails</a>
</div>
    </section>
<!-------------------------------------------------------------------------------->
<style>
.azreg {
  color:#2D8CE2;
  text-align: center;
}
</style>

<style>
.orange {
  color:#F7A904;
  text-align: center;
}
</style>

<div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                             <h1 class="azreg">NOS CATÉGORIES </h1>
                               <p class="orange">Bon Courage</p> 
                         </div>
<section class="course">
   <!-- <div class="row">
    <div class="course-col"> -->
<center>
  <table class="table" border="1" align="center" width="10%" height="10%">
              <?php 
                  foreach($listec as $categorie){
               ?>   
            <!--<table  align="center">
             <tr> 
             <td> -->
              <!--<img src="eduford_img/logo.png" width="200" height="200">-->
              <tr align="center">
                <td>
               <b><a href="profile.php?categ=<?php echo $categorie['nomCategorie']; ?>&tem=0"><?php echo $categorie['nomCategorie']; ?></a></b> 
                   </td>
                </tr> 
                <!-- </td>  
                 </tr>
                 </table> -->
                       <!--   <section class="categories" >
                          <div class="row">
                          <div class="campus-col" >
                        
                          <div class="layer">
                        <h3>lire la suite </h3> -->
                       <!--   </div> 
                            </div>-->
                      
                            
                       <?php } ?>
                        </tbody>
                        
                    
                    </div>  
            </div>
            </table>
</center>
</section>
<br> <br> <br><br>
<!------------- campus------------>
<section class="campus">
<h1>Quelques Avis de nos utilisateurs</h1>

    <div class="row">
<div class="campus-col">
    <img src="eduford_img/avis2.png">
    <div class="layer">
     <h3>Avis Etudiants</h3>
    </div>
</div>
<div class="campus-col">
    <img src="eduford_img/avis1.png">
    <div class="layer">
     <h3>Avis Enseignants</h3>
    </div>
</div>
<div class="campus-col">
    <img src="eduford_img/stat.png">
    <div class="layer">
     <h3>Notes</h3>
    </div>
</div>
    </div>
</section>
<!-------------------------------------------------------------------------------------> 
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


        <section class="facilities">
        <h1>Contactez nous</h1>
         <script>

var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}

    </script>
    <!-- FOOTER -->
    <div class="footer-basic">
        <footer>

         <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-linkedin"></a>

            
     <p class="copyright">MindBenders © 2022</p>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
        </script>

</section>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>



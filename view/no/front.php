<?php
include '../controller/categorie_c.php';
$categorieC = new categorieC();
$listec=$categorieC->afficherCategorie();
?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FrontCoursCategorie</title>

   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
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
    <a href="index.html"> <img src="eduford_img/logo.png"> </a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
<ul>
    <li><a href="">MINDBENDERS</a></li>
    <li><a href="">QUI SOMMES NOUS?</a></li>
    <li><a href="">S'INSCRIRE</a></li>
    <li><a href="">SE CONNECTER</a></li>
    <li><a href="">??</a></li>
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

              <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h1>Liste des catégories</h1>
   
                       <!-- </div>
                       <table border="2" align="center">
                            <thead>
                            <tr>
                                <td>Le nom du catégorie</td>
                            </tr>
                        </thead> 

                        <tbody>-->
                       
    
                        <?php 
                        foreach($listec as $categorie){
                        ?>
                            
                           <?php echo $categorie['nomCategorie']; ?>
                           <section class="categories">
                          <div class="row">
                          <div class="campus-col">
                          <img src="eduford_img/logo.png">
                          <div class="layer">
                        <h3>lire la suite </h3>
                          </div>
                            </div>
                
                        </section>  
                            
                       <?php } ?>
                        </tbody>
                        
                    
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

</body>

</section>
</body>

</html>


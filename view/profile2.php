<?php
include 'D:\xampp\htdocs\TESSSSSSSSSSSSSSSSSSSST\controller\cours_c.php';

$tem=$_GET['tem'];
$tm1=$_GET['tm1'];
$coursC = new coursC();
$id=$_GET['id'];
$content = $coursC->afficherContenu($id);
/*
  // Le chemin du fichier (path) 
  $content = 'D:\xampp\htdocs\TESSSSSSSSSSSSSSSSSSSST\view\rapport.pdf'; 
    
  // Type de contenu d'en-tête
  header("Content-type: text/pdf"); 
    
  header("Content-Length: " . filesize($content)); 
    
  // Envoyez le fichier au navigateur.
  readfile($content); 
*/
$categ=$_GET['categ'];
if($tem=='0')
{
 $liste = $coursC->afficherCourss($categ);
}
else 
    $liste = $coursC->afficherCoursss($tem);
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindBenders</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.css">
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="styleY.css">
    <link rel="stylesheet" href="instructor-profile.css">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   

</head>

<body>

    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!--<img src="eduford_img/logo.png" width="500%" height="500%" >-->
                <span class="d-none d-lg-block" href="FRONT.php" >MindBenders</span>
            </a>
        </div><!-- End Logo D:\xampp\htdocs\TESSSSSSSSSSSSSSSSSSSST\view\-->

        <!--  <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>-->
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto ">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-3 py-1" href="#" data-bs-toggle="dropdown">
                        <img src="?.jpg" alt="Profile" class="rounded-circle" style="max-height: 45px;width:45px">
                        <span class="d-none d-md-block dropdown-toggle ps-2 py-0">User name</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Ben Hmida Chayma</h6>
                            <span>Engineer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <!--      <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>  -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
<!---------------------------------------------------------------------------------------------------------------->
<!--Affichage contenu cours : -->

<?php
 foreach ($content as $cours )  
 {
      echo $cours['contenu'] ;
 
 }
 ?>
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="uwhite" data-identifier="item_1" data-counter_zero_show="true" data-counter_count="true"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>  
<!-- LikeBtn.com END -->

<!---------------------------------------------------------------------------------------------------------------->
    

    
    <!--
<main class=" card-body pb-0">
    <div class="instructor-profile_courses_list">
    <div style="color: black;font-size:4rem">sdjkvbhskdvbhsdbv</div>
    </div>

</main> -->

    <script src="../../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script>
        function cancel_hide(x) {
            $("#delete_button" + x).hide(0)
        }

        function delete_show(x) {
            $("#delete_button" + x).show(0)
        }

    </script>
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
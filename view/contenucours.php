<?php
include 'D:\xampp\htdocs\TESSSSSSSSSSSSSSSSSSSST\controller\cours_c.php';
$tem=$_GET['tem'];
$tm1=$_GET['tm1'];
$coursC = new coursC();
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

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <br><br>
            <li class="nav-item">
         <form action="recherche.php" method="POST" >
                    <span>
                        <div class="filtre_ic">
                            <div class="Card">
                                <div class="CardInner">
                                    <label>Taper un mot clé : </label>
                                    <div class="container">
                                        <div class="Iconn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8" />
                                                <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                            </svg>
                                        </div>
                                        <div class="InputContainer">
                                            <input type="search" name="search" placeholder="..." />
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <button 
                         style="color:transparent;" class="btn btn-light" type="submit" value="submit">.</button>
                                        

                    </span>
 </form>

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <?php
        foreach ($liste as $cours) {
        ?>

            <section class="section dashboard">
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-12">
                        <div class="row">


                            <!-- Top Selling -->
                            <div class="col-9">


                                <div class="instructor-profile_courses_list">
                                    <div class="course_align_v1">

                                        <img src="<?php echo $cours['image'];?>" alt="Profile" class="courses_list_img">
                                        
                                        <div class="course_align">
                                            <h1 class="course_title"><?php echo $cours['titre_c']; ?></h1>

                                        </div>


                                    </div>

                                    <div class="course_align">

                                        <div class="course_v3">
                                            <div class="course_categorie"><?php echo $cours['categorie_c']; ?></div>
                                           
                                        </div>

                                        <div class="course_button">
                                            <!--show button -->
                                            <a class="course_button_v2" href="profile2.php"><i class="fal fa-eye"></i></a>
                                          
                                             <a class="course_button_v2"><i class="fal fa-thumbs-up" href="Like.php"></i></a>
                                             <a class="course_button_v2"><i class="fal fa-thumbs-down"></i></a>
                                        </div>

                                    </div>





                                </div>





                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
                </div><!-- End Left side columns -->


                </div>
            </section>
        <?php } ?>
    </main><!-- End #main -->

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
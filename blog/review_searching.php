<!doctype html>

<html lang="en-US">

  <head>



    <!-- Meta -->

    <meta charset="UTF-8">

    <title>rizki andriyanto| Blog</title>

    <!-- <meta name="keywords" content="Rayleigh, HTML5 Template, Minimalistic, Elegant, Creative, Clean">

    <meta name="description" content="Rayleigh - Minimalistic and Elegant HTML Template">

    <meta name="author" content="R6 Themes"> -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Favicons -->
    <link rel="shortcut icon" href="http://dangdingdong.com/assets/favicons/icon8.png">
    <!-- CSS -->

    <link rel="stylesheet" href="../assets/css/reset.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Raleway:300|Muli:300" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../assets/css/idangerous.swiper.css">

    <link rel="stylesheet" href="../assets/css/style.css">



  </head>



  <body>



    <!-- Preloader -->

    <div id="preloader">

      <div id="status"></div>

    </div>



    <!-- Overlay -->

    <div id="overlay"></div>



    <!-- Top header -->

    <div id="top">



      <!-- Sidebar button -->

      <a href="#" id="sidebar-button"></a>

      

      <!-- Logo -->

      <header id="logo">

        <h1> RIZKI ANDRIYANTO </h1>

        

      </header>



    </div>

    

    <!-- Main wrapper -->

    <div id="main-wrapper">



      <!-- Content -->

      <div id="content">



        <!-- Fluid container -->

        <div class="container-fluid">



          <!-- Main content -->

          <div class="row">

            <div class="main-column col-9">

    

              <!-- Blog post -->

              

              <?php 



              

include('../header/header-searching.php');  

 

?>

              <article class="blog full">



                <!-- Image -->

                <div class="image">

                  <img src="../assets/img/blog-images/bromo/<?php echo $n_image; ?>.jpg" alt="Post Image">

                </div>



                <!-- Inner -->

                <div class="inner">

                  <header>

                    <h3><?php echo $title; ?></h3>

                  </header>

                  <p><?php echo $content; ?></p>

                  <!-- untuk dibaca seluruhnya -->

                  

                </div>



              </article>



              </div>

            <div class="sidebar-column col-3">



              <!-- Post info -->

              <aside class="widget widget-post-info inner">

                <footer>

                  <div class="vcard">On <time><?php echo $month ; echo '&nbsp;'.$day; echo ', '.$year;?></time> by <address class="author"><a href="#" class="fn"><?php echo $author; ?></a></address> in <a href="#"><?php echo $title; ?> </a></div>

                </footer>

                <!-- <hr>

                <div class="icons">

                  <a href="#"><i class="fa fa-heart-o"></i> 54 Loves</a>

                  <a href="#"><i class="fa fa-comments-o"></i> 6 Comments</a>

                </div>

                <hr> -->

                <div class="tags cf">

                  <a href="#"><?php echo $tag; ?></a>

                  

                  

                </div>

              </aside>

                <!-- Recent Post widget -->

              <aside class="widget widget-categories inner">

                <h4>Recent Post</h4>

                <div class="widget-content">

                  <ul>

                    <?php include('recent_post.php');  ?>

                    

                  </ul>

                </div>

              </aside>

              

              <!-- Categories widget -->

              <aside class="widget widget-categories inner">

                <h4>Categories</h4>

                <div class="tags cf">

                  <ul>

                  

                  

                    <li><a href="../header/header-category-blog.php?id=1">Programming</a></li>

                    <li><a href="../header/header-category-blog.php?id=2">Designing</a></li>

                    <li><a href="../header/header-category-blog.php?id=3">Sketching</a></li>

                    <li><a href="../header/header-category-blog.php?id=4">Motivation</a></li>

                    <li><a href="../header/header-category-blog.php?id=5">Travelling</a></li>

                    

                  </ul>

                </div>

              </aside>



            </div>

          </div>



        </div>



      </div>

<!-- Collapsible sidebar -->

      <div id="sidebar">



        <!-- Widget Area -->

        <div id="widgets">

        

          <!-- Main menu -->

          <nav id="mainmenu">

            <ul>

              <li><a href="../index.php">Home</a></li>

              <li><a href="../features/index.php">Features</a></li>

              <li>

                <a href="../portfolio/index.php">Portfolio</a>

              </li>

              <li><a href="index.php" class="active">Blog</a></li>

              <li><a href="../about/index.php">About</a></li>

              

              <li><a href="../contact/index.php" >Contact</a></li>

            </ul>

          </nav>



        </div>



        <!-- Copyright -->

        <footer>

          <p class="copyright"><b>© Copyright 2016 - 2017 Rizki Andriyantoy</b></p>

        </footer>



      </div>



    </div>



    <!-- JavaScripts -->

    <script type='text/javascript' src='../assets/js/jquery.min.js'></script>

    <script type='text/javascript' src='../assets/js/bootstrap.min.js'></script>

    <script type='text/javascript' src='../assets/js/swiper/idangerous.swiper.min.js'></script>

    <script type='text/javascript' src='../assets/js/masonry/masonry.pkgd.min.js'></script>

    <script type='text/javascript' src='../assets/js/isotope/jquery.isotope.min.js'></script>

    <script type='text/javascript' src='../assets/js/custom.js'></script>



  </body>

</html>
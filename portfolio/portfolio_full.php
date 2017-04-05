<?php



include('../connection.php');  



	



	



	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id



	$id = $_GET['id'];



	



	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'



	$show = mysql_query("SELECT



	MONTHNAME (portfolio.date_portfolio) AS a,



	YEAR (portfolio.date_portfolio) AS b,



	DAYOFMONTH (portfolio.date_portfolio) AS c,



	portfolio.name_portfolio,



	portfolio.description_portfolio,



	portfolio.name_image,



	portfolio.id_portfolio,



	portfolio.id_category,



	portfolio.author,



	portfolio.filter,



category.id_category,



category.name_category







FROM



	portfolio INNER JOIN category on portfolio.id_category=category.id_category WHERE portfolio.id_portfolio='$id'");



	



	//cek apakah data dari hasil query ada atau tidak



	if(mysql_num_rows($show) == 0){



		



	



	}else{



	



		//jika data diemukan, maka membuat variabel $data



		$row = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah



		



	  $id2 = $row['id_portfolio'];



      $title = $row['name_portfolio'];



      $month = $row['a'];



      $day = $row['c'];



      $year = $row['b'];



      $content = $row['description_portfolio'];



      $n_image = $row['name_image'];



      $author = $row['author'];



      $category = $row['filter'];



      $tag = $row['name_category'];







	}



	?>







<!doctype html>



<html lang="en-US">



	<head>







		<!-- Meta -->



		<meta charset="UTF-8">



		<title>rizki andriyanto | Portfolio</title>



		



		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



		<meta name="viewport" content="width=device-width, initial-scale=1.0">







		



		

		<!-- Favicons -->
		<link rel="shortcut icon" href="http://dangdingdong.com/assets/favicons/icon8.png">

		<!-- CSS -->



		<link rel="stylesheet" href="../assets/css/reset.css">



		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">



		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">



		<link rel="stylesheet" href="../assets/css/font-ray-website.css">



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







			<!-- Portfolio close button -->



			<a href="#" id="portfolio-close"></a>







		</div>



		



		<!-- Main wrapper -->



		<div id="main-wrapper">







			<!-- Content -->



			<div id="content" class="isotope-container">







				<!-- Fluid container -->



				<div class="container-fluid">







		



					



					<?php 







		echo '<article class="blog first col-12">';







          echo '<div  class="image" style="background-image: url(../assets/img/portfolio-images/'.$n_image.'.jpg)">'.'</div>';



          echo '<div class="inner">';







             echo '<header>';

              echo '<h2>'.$title.'</h2><br>';

              echo '<p>'.$content.'</p>';

              echo '<br><div class="icon-text">';

						echo '<i class="fa fa-calendar-o"></i>';

						echo '<p>Project started on '.$day.' '.$month.', '.$year.'</p>';

			  echo '</div>';

			  

			  echo '<br><div class="icon-text">';

						echo '<i class="fa fa-tag"></i>';

						echo '<p><b>'.$tag.'</b></p>';

			  echo '</div>';



			  echo '<br><div class="icon-text">';

						echo '<i class="fa fa-user"></i>';

						echo '<p>Created by <b>'.$author.'</b></p>';

			  echo '</div>';

			 

            echo '</header>';







            



          echo '</div>';



        echo '</article>';







					  ?>



					







						



				</div>



				







			</div>







			<!-- Collapsible sidebar -->



			<div id="sidebar">







				<!-- Widget Area -->



				<div id="widgets">



				



					<!-- Main menu -->



					<nav id="mainmenu">



						<ul>



							<li><a href="../">Home</a></li>



							<li><a href="../features/">Features</a></li>



							<li>



								<a href="../portfolio/" class="active">Portfolio</a>



							</li>



							<li><a href="../blog/">Blog</a></li>
							<li><a href="http://dangdingdong.com/KeripikWow">Shop</a></li>





							<li><a href="../about/">About</a></li>



							



							<li><a href="../contact/">Contact</a></li>



						</ul>



					</nav>







				</div>







				<!-- Copyright -->



				<footer>



					<p class="copyright"><b>© Copyright 2016 - 2017 Rizki Andriyanto</b></p>



				</footer>







			</div>







			<!-- Portfolio full programming-->







			







			<!-- Portfolio full -->



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
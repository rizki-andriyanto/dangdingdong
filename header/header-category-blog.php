<!doctype html>

<html lang="en-US">

	<head>



		<!-- Meta -->

		<meta charset="UTF-8">

		<title>rizki andriyanto | Blog</title>

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



		</div>

		

		

					<!-- Main wrapper -->

		<div id="main-wrapper">



			<!-- Content -->

			<div id="content">



				<!-- Fluid container -->

				<div class="container-fluid">

					

					<!-- Page heading -->

					<div id="heading" class="row">

						<div class="col-12">



							<header>

								<h1>Blog</h1>

								<h2>Speak your mind</h2>

							</header>



						</div>

					</div>

					<!-- Main content -->

					<div class="row">

						<div class="main-column col-9">



							<!-- Masonry blog -->

							<div class="masonry masonry-3 row">

							

								<!-- First blog post -->









								<!-- Blog post -->

								

								

							<?php 



							include('../blog/category_blog.php');  





							?>

							

							</div>



							  

 



							<!-- Pagination -->

							

							

							



						</div>

						<div class="sidebar-column col-3">



							<!-- Search widget -->

							<!-- Search widget -->
							<aside class="widget widget-search inner">
								<div class="widget-content">
									<form action="../blog/review_searching.php" method="post">
										<div class="input-group">



											<input type="text" name="input_cari" class="form-control" id="search" placeholder="Search title here...">
											<span class="input-group-btn">
												<button type="submit" name="cari" class="btn btn-color btn-icon-only"><i class="glyphicon glyphicon-search"></i></button>
											</span>





										</div>
									</form>
								</div>
							</aside>



							<!-- Recent Post widget -->

							

							<!-- Categories widget -->

							<aside class="widget widget-categories inner">

								<h4>Categories</h4>

								<div class="widget-content">

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

							<li><a href="../">Home</a></li>

							<li><a href="../features/">Features</a></li>

							<li>

								<a href="../portfolio/">Portfolio</a>

							</li>

							<li><a href="../blog/" class="active">Blog</a></li>

							<li><a href="../about/">About</a></li>

							

							<li><a href="../contact/" >Contact</a></li>

						</ul>

					</nav>



				</div>



				<!-- Copyright -->

				<footer>

					<p class="copyright"><b>© Copyright 2016 - 2017 Rizki Andriyanto</b></p>

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
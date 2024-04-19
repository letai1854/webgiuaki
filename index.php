<?php 
require_once('entities/account.php');
session_start();
if(isset($_SESSION['username'])){
	$owner=true;
}
else{
	$owner=false;
}

if(isset($_SESSION['username'])) {
	$info = User::get_info($_SESSION['username']);
	$name = $info[0]['name'];
	$integram = $info[0]['integram'];
	$email = $info[0]['email'];
	$address = $info[0]['address'];
	$phone = $info[0]['phone'];
	$facebook = $info[0]['facebook'];
	$linkedin = $info[0]['linkedin'];
} 

?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giảng Viên</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-qdYWZP/cyW+3NuNX3pgFbHzlpxeo5k0lGME/qZ+bzIY6MT4aDEIf0K9P1ErzUpSn" crossorigin="anonymous">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-qdYWZP/cyW+3NuNX3pgFbHzlpxeo5k0lGME/qZ+bzIY6MT4aDEIf0K9P1ErzUpSn" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
		<style>
			.logo{
				width: 130px;
				height: 130px;
			}
			
			body{
				/* rgba(193, 150, 49, 0.575)  #00D2D2*/
				background-color: #73CFCF	;
			
			}
		</style>
	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation" style="background-color: #004949;">
	
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
			
				<div class="row">
					<div class="col-md-12">
						<ul>
			
							<li><a href="login.php" class="login-link" style="color: rgb(200, 210, 219);">Đăng nhập</a></li>

							<li class="active"><a href="index.php" style="color: rgb(200, 210, 219);">Giới thiệu</a></li>
							<li><a href="services.php" style="color: rgb(200, 210, 219);">Tài liệu</a></li>
							<?php 
							if($owner){
								echo '<li><a href="work.php" style="color: rgb(200, 210, 219);">Thêm tài liệu</a></li>';
								echo'<li><a href="about.php" style="color: rgb(200, 210, 219);">Cập nhật thông tin</a></li>'; 
							 }
							 ?>
							<li><a href="contact.php" style="color: rgb(200, 210, 219);">Liên hệ</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2 class="head-title" style="color: rgb(200, 210, 219);">Ảnh</h2>
						<a href="images/work-1.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-1.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
						<a href="images/work-2.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-2.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
						<a href="images/work-3.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-3.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
						<a href="images/work-4.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-4.jpg);">
							<span><i class="icon-search3"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<div id="colorlib-about">
			<div class="container">
				<div class="row text-center">
				<!-- rgba(148, 154, 71, 0.495); -->
					<h2 class="bold" style="color:#C4E9E9 ;">Giới Thiệu</h2>
				</div>
				<div class="row">
					<div class="col-md-5 animate-box">
						<div class="owl-carousel3">
							<div class="item">
								<img class="img-responsive about-img" src="images/about.jpg" alt="html5 bootstrap template by colorlib.com">
							</div>
							<div class="item">
								<img class="img-responsive about-img" src="images/about-2.jpg" alt="html5 bootstrap template by colorlib.com">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-md-push-1 animate-box">
						<div class="about-desc">
							<div class="owl-carousel3">
								<div class="item">
									<h2 >
									<?php
										echo "<span>{$name}</span>"
									?>
									</h2>
								</div>
								<div class="item">
									<h2>
									<?php
										echo "<span>{$integram}</span>"
									?>
									</h2>
								</div>
							</div>
							<div class="desc">
								<div class="rotate">
									<h2 class="heading" style="color: aliceblue ;">Giới thiệu</h2>
								</div>
								<p style="color: black;">Tôi là một giảng viên khoa công nghệ thông tin trường đại học Tôn Đức Thắng</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-services">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold" style="color: #C4E9E9 ;">Thông Tin Về Tôi</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="services-flex">
							<div class="one-third">
								<div class="row">
									<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
										<span style="color: #006262;">Giới Thiệu</span>
										<h2 style="color:#006262;">Về Bản Thân Tôi</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="rotate">
											<h2 class="heading" style="color: rgba(148, 154, 71, 0.495);">Thông Tin</h2>
										</div>
									</div>
									<div class="col-md-6">
										<div class="services animate-box">
											<h3>1 - Graphic Design</h3>
											<ul>
												<li>UI Design</li>
												<li>Website &amp; Digital Design</li>
												<li>Brading &amp; Visual Identity</li>
												<li>Print Design</li>
											</ul>
										</div>
										<div class="services animate-box">
											<h3>3 - Front End Development</h3>
											<ul>
												<li>HTML / CSS</li>
												<li>JS &amp; Jquery Startup</li>
												<li>WordPress</li>
												<li>Jomla</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="services animate-box">
											<h3>2 - Illustration</h3>
											<ul>
												<li>Editorial</li>
												<li>Narrative</li>
												<li>Motion Graphics</li>
												<li>Animation</li>
												<li>Visual Effects</li>
											</ul>
										</div>
										<div class="services animate-box">
											<h3>4 - Web Marketing</h3>
											<ul>
												<li>Sales Marketing</li>
												<li>Invoice</li>
												<li>eCommerce</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>



		<footer>
		<!-- rgba(193, 150, 49, 0.575); -->
			<div id="footer" style="background-color:#006262; ">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-pb-sm">
							<div class="row">
								<div class="col-md-10">
									<h2>Hãy trò chuyện</h2>
									<p style="color: rgb(67, 65, 65);">Đôi khi, những thay đổi nhỏ nhất có thể tạo ra sự khác biệt lớn nhất.</p>
									<?php
										echo "<p><a href='#' style='color: black'>$email</a></p>";
									?>
									<p class="colorlib-social-icons">
									<?php
										echo "<a href='$facebook'><i class='icon-facebook'></i></a>";
										echo "<a href='$linkedin'><i class='icon-linkedin'></i></a>";
									?>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-pb-sm">
							<h2>Thông Tin Người Làm Website</h2>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-1.jpg);"></a>
								<div class="desc">
									<span>Địa chỉ</span>
									<?php
										echo "<h3>{$address}</h3>";
									?>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-2.jpg);"></a>
								<div class="desc">
									<span>Số Điện thoại</span>
									<?php
										echo "<h3>{$phone}</h3>";
									?>
								</div>
							</div>
						</div>
						
						
					<div class="row">
						<div class="col-md-12 text-center">
							<p style="color: black;">
								&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Chúc bạn một ngày vui vẻ <i class="icon-heart4" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>


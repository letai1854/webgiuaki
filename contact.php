<?php 
session_start();
if(isset($_SESSION['username'])){
	$owner=true;
}
else{
	$owner=false;
}


?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Noah Template</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
	.btnLogin{
		margin-top: 4px;
		background-color: #c0bb24;
		color: white;
		border-radius: 6px;
		border:#C8D7D2;
		padding: 9px 20px;
	}
	.btnLogin:hover{
		background-color:#bebb6d;
		color: #373234;
		font-weight: 600;
	}
	.logo{
		width: 130px;
		height: 130px;
	}
	body{
		background-color: rgba(193, 150, 49, 0.575);
	}
</style>
	</head>
	<body>

		<nav id="colorlib-main-nav" role="navigation" style="background-color: rgba(135, 96, 12, 0.575);;">
	
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
		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold" style="color: rgba(148, 154, 71, 0.495);">Liên Hệ </h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span style="color: rgba(67, 70, 16, 0.874)">Thông tin</span>
						<h2 style="color: rgba(67, 70, 16, 0.874)">Liên Hệ</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="rotate">
							<h2 class="heading" style="color: rgba(148, 154, 71, 0.495);">Liên Hệ</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0">
						<div class="row">
							<div class="col-md-4 animate-box">
								<h3>Thông tin </h3>
								<ul class="contact-info">
									<li><span><i class="icon-map5"></i></span>123/45 Quận 9 TP HCM</li>
									<li><span><i class="icon-phone4"></i></span>24352345</li>
									<li><span><i class="icon-envelope2"></i></span><a href="#">DzoanXuanThanh@gmail.com</a></li>
								</ul>
							</div>
							<div class="col-md-4 animate-box">
								<h3>Mạng xã hội</h3>
								<ul class="contact-info">
								<li><span><i class="fab fa-facebook"></i></span><a href="#">Facebook</a></li>
								<li><span><i class="fab fa-instagram"></i></span><a href="#">Instagram</a></li>
								<li><span><i class="fab fa-linkedin"></i></span><a href="#">LinkedIn</a></li>

								</ul>
							</div>
							<div class="col-md-4 animate-box">
							<h3>Giờ làm việc</h3>
							<ul  class="contact-info">
								<li >Thứ 2 </li>
								<li>Thứ 3</li>
								<li>Thứ 4</li>
								
							</ul>
							</div>
							
							 
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div id="footer" style="background-color: rgba(193, 150, 49, 0.575);">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-pb-sm">
							<div class="row">
								<div class="col-md-10">
									<h2>Hãy trò chuyện</h2>
									<p style="color: rgb(67, 65, 65);">Đôi khi, những thay đổi nhỏ nhất có thể tạo ra sự khác biệt lớn nhất.</p>
									<p><a href="#" style="color: black">DzoanXuanThanh@gmal.com</a></p>
									<p class="colorlib-social-icons">
										<a href="#"  ><i class="icon-facebook"></i></a>
									
										<a href="#"><i class="icon-google"></i></a>
										
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
									<h3><a href="#">47, đường số 8, Quận 9, TP HCM</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-2.jpg);"></a>
								<div class="desc">
									<span>Số Điện thoại</span>
									<h3><a href="#">2374691382</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/img-3.jpg);"></a>
								<div class="desc">
									<span>Kênh YouTuBe</span>
									<h3><a href="#"></a>WebDinhCaoChannel</h3>
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


<?php 
require_once("entities/detail.class.php");
require_once("entities/account.php");

session_start();
if(isset($_SESSION['username'])){
	$owner=true;
}
else{
	$owner=false;
}
if (isset($_SESSION['username'])) {
	$email = $_SESSION['username'];
}
if ($email===""){
	$error_message="không thể cập nhật thông tin";
}
$id=User::get_id($email);
if (!isset($id)){
	$error_message="không thể cập nhật thông tin";
}
if (isset($_POST['Update'])) {
	$name = $_POST['name'];
	$linkedin = $_POST['linkedin'];
	$integram = $_POST['integram'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$facebook = $_POST['facebook'];

	if (!empty($name) && !empty($linkedin) && !empty($integram) && !empty($address) 
	&& !empty($email) && !empty($phone) && !empty($facebook)) {
		$result = User::update_info($name, $linkedin, $integram, $address, $email, $phone, $facebook);;
		if ($result == true) {
			echo "<script>alert('Sửa thành công!');</script>";
		} else {
			echo "<script>alert('Sửa thất bại!');</script>";
			$again = true;
		}
	}
	else {
		echo '<script>alert("Bạn cần nhập đầy đủ dữ liệu")</script>';
	}

	if(isset($_SESSION['username'])) {
		$info = User::get_info($_SESSION['username']);
		$email = $info[0]['email'];
		$address = $info[0]['address'];
		$phone = $info[0]['phone'];
		$facebook = $info[0]['facebook'];
		$linkedin = $info[0]['linkedin'];
	} 
	
}

if(isset($_SESSION['username'])) {
	$info = User::get_info($_SESSION['username']);
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
	<title>Giảng viên</title>
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
	#login{
		border: 3px solid  rgb(49 177 171);
			padding: 6px 8px;
			background-color: rgb(30 126 120 / 50%); 
            position: relative;
			border-radius: 4px ;
			margin-bottom: 100px;
		}
		.logo{
			width: 130px;
			height: 130px;
		}
		body{
			background-color: #73CFCF	;
		}
</style>
	</head>
	<body>

		<nav id="colorlib-main-nav" role="navigation" style="background-color: #004949;;">
	
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
						<h2 class="bold" style="color: #C4E9E9">Cập Nhật Thông Tin</h2>
					</div>
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
							<span style="color: #006262;">Cập Nhật</span>
							<h2 style="color: #006262;">Thông Tin Giảng Viên</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="rotate">
								<h2 class="heading" style="color:aliceblue;">Cập nhật</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-md-offset-0">
							<div class="row">
								
								<div class="col-md-7 col-md-push-1 animate-box">
									<form action="" class="border p-3 rounded " id="login" method="post">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="name" placeholder="Tên giảng viên">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="linkedin" placeholder="Link linkedin">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="integram" placeholder=" Link integram">
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="address" placeholder="Địa chỉ">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
											</div>
										</div>
										<div class="col-md-6">
											
											<div class="form-group">
												<input type="text" class="form-control" name="facebook" placeholder="Link facebook">
											</div>
										</div>
										
										<div class="col-md-12">
											
											<div>
												<label for="txt_image" class="text_title">Ảnh Đại Diện</label>
											</div>
											<div>
												<input type="file" name="txt_image" id="txt_image" accept=".PNG,.GIF,.JPG,.JPEG">
											</div>
											<div>
												<input type="file" name="txt_image" id="txt_image" accept=".PNG,.GIF,.JPG,.JPEG">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<!-- <button class="btnLogin mt-2 login" type="submit" class="btn" onclick="LoginSubmit(event)" name = "Update">Cập nhật</button> -->
												<button class="btnLogin mt-2 login" type="submit" class="btn" name = "Update">Cập nhật</button>
											</div>
										</div>
										
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
			<div id="footer" style="background-color: #006262;">
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


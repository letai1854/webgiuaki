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
if(isset($_POST['Delete'])){
	$id=$_POST['Id'];
	$result = Detail::delete_Subject($id);
}

try {
	$list_subject = Detail::list_Detail();
} catch (Exception $e) {
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
			.subject{
				border: 2px;
				
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

	<nav id="colorlib-main-nav" role="navigation" style="background-color: #004949;">
	
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li><a href="login.php" class="login-link" style="color: rgb(200, 210, 219);">Đăng nhập</a></li>
							<li ><a href="index.php" class="active" style="color: rgb(200, 210, 219);">Giới thiệu</a></li>
							<li><a href="services.php"style="color: rgb(200, 210, 219);">Tài liệu</a></li>
							<?php 
							if($owner){
								echo '<li><a href="work.php" style="color: rgb(200, 210, 219);">Thêm tài liệu</a></li>';
								echo'<li><a href="about.php" style="color: rgb(200, 210, 219);">Cập nhật thông tin</a></li>'; 
							 }
							 ?>
							<li><a href="contact.php"style="color: rgb(200, 210, 219);">Liên hệ</a></li>
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
		<div id="colorlib-services">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold" style="color:#C4E9E9">Tài Liệu</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="services-flex">
							<div class="one-third">
								<div class="row">
									<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
										<span style="color: #006262;">Tài Liệu Của Tôi</span>
										<h2 style="color: #006262;">Tổng Hợp Môn Học</h2>
									</div>
								</div>
								<div class="row">
									
									<div class="col-12 " style="margin-bottom:20px;">
										<div class="services animate-box">
											
											<div class="row">
												<div class="album py-5 bg-light">
													<div class="container">
												
													<?php
               					 require_once('cell_detail.php');
               									 if (isset($list_subject)) {
													if (is_array($list_subject)) {
														foreach ($list_subject as $item) {
															echo '
															<div class="col" style="margin-bottom: 20px; border-radius: 3px; border: 2px solid rgba(201, 197, 190, 0.337); padding: 10px; background-color: #009393;">
																<h3 style="color: rgb(184, 68, 26);">' . htmlspecialchars($item['subjectName']) . '</h3>
																<div class="card shadow-sm">
																	<img src="' . htmlspecialchars($item['image']) . '" alt="" style="width:100%; height:300px">
																	<div class="card-body">
																		<h4 style="color: black; margin-top: 8px; text-decoration: none; font-weight: 600;">Mô Tả</h4>
																		<p class="card-text" style="color: black;">' . htmlspecialchars($item['subjectDescribe']) . '</p>
																		<div class="d-flex justify-content-between align-items-center">
																			<div class="btn-group">';
																
																// Kiểm tra quyền sở hữu để hiển thị các nút Xóa và Sửa
																if ($owner) {
																	echo '
																	<button type="button" class="btn btn-sm" style="background-color: rgb(213, 198, 101); border-radius: 3px;" name="deletebtn" onclick="update_btn(\'' . htmlspecialchars($item['subjectCode']) . '\')">Sửa</button>
																	<button type="button" class="btn btn-sm" style="background-color: rgb(36, 36, 153); border-radius: 3px;" name="updatebtn" onclick="delete_btn(\'' . htmlspecialchars($item['subjectCode']) . '\')">Xóa</button>';
																}
																$url=htmlspecialchars($item['file']) ;
																$file_name = basename($url); 
																// <button type="button" class="btn btn-sm" style="background-color: rgb(32, 115, 40); border-radius: 3px;">
																// <a href="' . htmlspecialchars($item['file']) . '" style="color: white; text-decoration: none;">Tải tài liệu</a>
																// </button>';
																// // Nút tải tài liệu
																
																echo '
																<button type="button" class="btn btn-sm" style="background-color: rgb(32, 115, 40); border-radius: 3px;">
																<a href="' . htmlspecialchars($item['file']) .'"download="' .htmlspecialchars($file_name).'" style="color: white; text-decoration: none;">Tải tài liệu</a>
																</button>';
																echo '
																			</div>
																		</div>
																	</div>
																</div>
															</div>';
														}
													}
												}
												?> 
										</div>
												
										</div>
									</div>
									


										
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
			<div id="footer" style="background-color: #006262; ">
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


<script>
	    function update_btn(id) {
			var idstr = id.toString();
            var form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("action", "work.php");

            var id = document.createElement("input");
            id.setAttribute("type", "text");
            id.setAttribute("name", "Id");
            id.setAttribute("value", '' + idstr);

            var btn = document.createElement("button");
            btn.setAttribute("type", "submit");
            btn.setAttribute("name", "Update");
            form.appendChild(id);
            form.appendChild(btn);
            document.getElementsByTagName("body")[0]
                .appendChild(form);
            btn.click();
    }
function delete_btn(id) {
        if (confirm('Do you want to delete this Subject: ' + id + '?') == true) {
            var idstr = id.toString();
            var form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("action", "");

            var id = document.createElement("input");
            id.setAttribute("type", "text");
            id.setAttribute("name", "Id");
            id.setAttribute("value", '' + idstr);

            var btn = document.createElement("button");
            btn.setAttribute("type", "submit");
            btn.setAttribute("name", "Delete");
            form.appendChild(id);
            form.appendChild(btn);
            document.getElementsByTagName("body")[0]
                .appendChild(form);
            btn.click();
        }
    }
</script>
		
	
	

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


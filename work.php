<?php
require_once("entities/detail.class.php");
require_once("entities/account.php");

session_start();
if(isset($_SESSION['username'])){
	$owner=true;
}
if(isset($_SESSION['username'])){
	$email=$_SESSION['username'];
}
if($email===""){
	$error_message="không thể thêm tài liệu";
}
$id=User::get_id($email);
if(!isset($id)){
	$error_message="không thể thêm tài liệu";
}
if(isset($_POST['Update'])){
	try {
		$_SESSION['i']=Detail::list_Subject_Update($_POST['Id']);
		$subject_update = $_SESSION['i'];
		$update = true;
	} catch (Exception $e) {
	}
}
if(isset($_POST['enter'])){
	$subjectName=$_POST['subjectName'];
	$detailName=$_POST['detailName'];
	$txt_image=$_FILES['txt_image'];
	$txt_file=$_FILES['txt_file'];
	// if (!$subjectName || !$detailName || !$txt_image || !$txt_file) {
	// 	echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");</script>';
	// } 
	// else{
	$newDetail= new Detail($subjectName,$detailName,$txt_image,$txt_file,$id);
	$result=$newDetail->save();
	if(isset($result)){
		if(!$result){
			echo '<script>alert("không thêm được!")</script>';
			$again = true;
		}
		else{
			echo '<script>alert("Thêm thành công!")</script>';
		}
	}
}
else if(isset($_POST['submit_update'])){
	$id = $_POST['submit_update'];
	$name = $_POST['subjectName'];
	$des = $_POST['detailName'];
	$pic = $_FILES['txt_image'];
	$file = $_FILES['txt_file'];
	if ($name===""  || $des==="" || $pic=="" || $file=="") {
			
			echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");</script>';
			$update = true;
			$again = true;
	} 
	else{		
	$result = Detail::update_subject($id,$name,$des,$pic,$file);
		if ($result == true) {
			echo "<script>alert('Sửa thành công!');</script>";
		} else {
			echo "<script>alert('Sửa thất bại!');</script>";
			$again = true;
		}
	}
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

		<style>
		.errorMessage{
            color: rgb(216, 49, 49);
            font-size: 14px;
        }
			#login{
			border: 3px solid  rgb(189, 158, 65);
			padding: 6px 8px;
			background-color: rgba(156, 141, 96, 0.5); 
            position: relative;
			border-radius: 4px ;
			}
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
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
		<div id="colorlib-work">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold" style="color: rgba(148, 154, 71, 0.495);"> <?php if (isset($update)) echo 'Sửa Tài Liệu'; else echo 'Thêm Tài Liệu'?></h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span  style="color: rgba(67, 70, 16, 0.874)">Giảng Viên</span>
						<h2 style="color: rgba(67, 70, 16, 0.874)"><?php if (isset($update)) echo 'Sửa Tài Liệu'; else echo 'Thêm Tài Liệu'?></h2>
					</div>
				</div>
				
			</div>
		</div>
		<div class="container">
			<div class="body-form row justify-content-center">
				<div class="col-md-6">
					<form action="" class="border p-3 rounded " id="login" method="post" enctype="multipart/form-data" onsubmit="return validate()">
						<div class="form-group">
							<label for="subjectName">Tên môn học</label>
							<input type="text" class="form-control mt-1 mb-1" id="subjectName" placeholder="Nhập tên môn học" name="subjectName" value="<?php if (isset($again)) echo $name;
                                                                                                                                        else if (isset($update)) echo $subject_update[0]['subjectName']; ?>">
						</div>
						<div class="form-group">
							<label for="detailName">Miêu tả Môn học</label>
							<textarea type="text"  id="detailName" placeholder="Nhập miêu tả tài liệu" class="form-control" name="detailName" value="<?php if (isset($again)) echo $des;
                                                                                                                                                else if (isset($update)) echo $subject_update[0]['subjectDescribe']; ?>"></textarea>
						</div>
						<div>
							<label for="txt_image" class="text_title">Ảnh</label>
						</div>
						<div>
							<input type="file" name="txt_image" id="txt_image" accept=".PNG,.GIF,.JPG,.JPEG" value="<?php if (isset($again)) echo $pic;
                                                                                                                                        else if (isset($update)) echo $subject_update[0]['image']; ?>">
						</div>
						<div>
							<label for="txt_file" class="text_title">Chọn Tệp</label>
						</div>
						<div>
							<input type="file" name="txt_file" id="txt_file" accept=".doc,.docx,.pdf,.txt,.zip,.rar,.7z,.jpg,.png,.gif"  value="<?php if (isset($again)) echo $file;
                                                                                                                                        else if (isset($update)) echo $subject_update[0]['file']; ?>">
						</div>
						<div class="d-none errorMessage my-3"></div>
						<?php
						if(isset($error_message)){
                        echo "<p class='errorMessage my-3'>$error_message</p>";
                    		}
                    	?>
						<div class="d-none errorMessage my-3"></div>
						<button class="btnLogin mt-2 login" type="submit" class="btn" name="<?php echo isset($update) ? 'submit_update" value="' . htmlspecialchars($subject_update[0]['subjectCode']) . '">Sửa' : 'enter">Thêm'; ?>
</button>

					</form>
				</div>
	
	
			</div>
	
	
		</div>

		<footer>
			<div id="footer" style="background-color: rgba(193, 150, 49, 0.575); margin-top:100px;">
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
	<script>
        function showError(message){
          let  error=document.querySelector('.errorMessage');
            if(message ==null || message==undefined){
                if(!error.classList.contains('d-none')){
                    error.classList.add('d-none')
                }
            }
            else{
                error.classList.remove('d-none');
                error.innerHTML=message;
                
            }
        }

        function validate(){
			var name= document.querySelector('#subjectName').value;
			var detail= document.querySelector('#detailName').value;
           	var file= document.querySelector('#txt_file').value;
           	var image =document.querySelector('#txt_image').value;
            var isvalid=true;
			if(name===""){
                showError('Vui lòng chọn tệp');
                isvalid=false;
                return false;
            }
			if(detail===""){
                showError('Vui lòng chọn tệp');
                isvalid=false;
                return false;
            }
			if(image===""){
				showError('Vui lòng chọn ảnh');
				isvalid=false;
				return false;
			}
            if(file===""){
                showError('Vui lòng chọn tệp');
                isvalid=false;
                return false;
            }
            if(isvalid){
                document.getElementById("login").submit();
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


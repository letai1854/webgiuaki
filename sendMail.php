<?php 
if(isset($_POST['email'])){
    require_once('reset_password.php');
    $check_success = reset_password($_POST['email']);
    if ($check_success)
        echo '<script>alert("Đã gửi đến mail của bạn!")</script>';
    else echo '<script>alert("!!!")</script>';
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <style>
        .errorMessage{
            color: rgb(216, 49, 49);
            font-size: 14px;
        }
        body{
            background-image: url('/images/background.jpg') ;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #login{
            background-color: rgba(255, 255, 255, 0.5); 
            position: relative;
        }
        .titleLogin{
            color: #c0bb24;
        }
        .btnLogin{
            background-color: #c0bb24;
            color: white;
            border-radius: 6px;
            border:#C8D7D2;
            padding: 7px 8px;
        }
        .btnLogin:hover{
            background-color:#bebb6d;
            color: #373234;
            font-weight: 600;
        }
        .icon{
            font-size: 2rem;
        }
        .login-link {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #c0bb24;
            text-decoration: none;
        }
      

    </style>
</head>
<body>
    <div class="container">
        <h3 class="mt-5 mb-3 text-center  titleLogin">Thay đổi mật khẩu</h3>
        <a href="/WebGiuaKi/login.php" class="login-link"><i class="icon fas fa-sign-in-alt"></i> Đăng nhập</a>
        <div class="body-form row justify-content-center">
            <div class="col-md-6">
                <form action="" class="border p-3 rounded " id="login" onsubmit="return validate()"  method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control mt-1 mb-2" id="email" placeholder="Nhập email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                    
                    
                    </div>

                    <div class="d-none errorMessage my-3">Vui lòng nhập email</div>
                    <button class="btnLogin mt-2 login" type="submit" class="btn" name="btnNext" >Gửi</button>
                    
                </form>
            </div>


        </div>


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
        
        function  validate() {
           var emailField= document.querySelector('#email');
            var email=emailField.value;
            var isvalid=true;
            if(email===""){
                showError('Vui lòng nhập email');
                isvalid=false;
                return false;
            }
           else  if(!/\b[A-Za-z0-9._%+-]+@gmail\.com\b/.test(email)){
                showError('Email không hợp lệ');
                isvalid=false;
                return false;
            }
            if(isvalid){

                document.getElementById("login").submit();
                window.location.href ="changePassWord.html";
            }

        }


    </script>
</body>
</html>
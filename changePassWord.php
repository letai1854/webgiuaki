<?php
    if(isset($_POST['submit'])){
        $username_ = $_POST['submit'];
        $password = $_POST['password'];
        require_once('change_password.php');
        $result = change_password($username_, $password);
        if($result == true){
            echo '<script>if(confirm("CHANGE PASSWORD SUCCESSFULLY!!!\nDo You Want To Return Login Page?")==true){
                window.location.replace("Login.php");}
                else window.close();</script>';
        }
        else{
            echo '<script>alert("ERROR!!!"); window.close();</script>';
        }
    }
    if(isset($_GET['id']) && $_GET['code']){
        $id = $_GET['id'];
        $code = $_GET['code'];
        require_once('get_username.php');
        $username = get_username($id, $code);
        if($username == null || $username == false) echo '<script>alert("ERROR!!!"); window.close();</script>';
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
            background-image: url('images/bg_1.avif') ;
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
                <form action="" class="border p-3 rounded " id="login" onsubmit="return validate()" method="post" >
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control mt-1 mb-1" id="password" placeholder="Nhập mật khẩu mới" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control mt-1 mb-1" id="confirmpassword" placeholder="Nhập lại mật khẩu mới" name="confirmpassword">
                    </div>
                    <div class="d-none errorMessage my-3">Please enter your email address</div>
                    <button class="btnLogin mt-2 login" type="submit" class="btn" name="submit" value="<?php echo $username;?>">Xác nhận</button>
                 
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

        function validate(){
           var passwordField =document.querySelector('#password');
           var confirmpasswordField =document.querySelector('#confirmpassword');
            var password=passwordField.value;
            var confirmpassword=confirmpasswordField.value;
            var isvalid=true;
            if(password===""){
                showError('Vui lòng nhập mật khẩu');
                isvalid=false;
                return false;
            }
            if(confirmpassword===""){
                showError('Vui lòng nhập mật khẩu');
                isvalid=false;
                return false;
            }
           else  if(password.length<6){
                showError('Mật khẩu phải từ 6 kí tự trở lên');
                isvalid=false;
                return false;
            }
            else  if(confirmpassword.length<6){
                showError('Mật khẩu phải từ 6 kí tự trở lên');
                isvalid=false;
                return false;
            }
            else  if(confirmpassword!==password){
                showError('Mật khẩu không trùng khớp');
                isvalid=false;
                return false;
            }
            if(isvalid){
                document.getElementById("login").submit();
                alert("Thay đổi thành công!");

            }
            

        }


    </script>
</body>
</html> 
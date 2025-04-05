<?php
@include 'config.php';

if(isset($_POST['submit'])){

//$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
//$cpass = md5($_POST['cpassword']);
//$user_type = $_POST['user_type'];


$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

$result  = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
if($row['user_type'] == 'admin')
{
$_SESSION['admin_name'] = $row['name'];
header('location:admin_page.php');
}
else if($row['user_type'] == 'user')
{
$_SESSION['user_name'] = $row['name'];
header('location:popup.php');
}
}
else{
$error[] = 'incorrect email or password!';
}
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_form</title>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
            margin:0; padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }
        .form-container{
            min-height:100vh;
            display:flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background: #eee;
        }
        .form-container form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            background: #fff;
            text-align: center;
            width: 500px;
        }
        .form-container form h3{
            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #333;
        }
        .form-container form input,
        .form-container form select{
            width: 100%;
            padding: 10px 15px;
            font-size: 17px;
            margin: 8px 0;
            background: #eee;
            border-radius: 5px;
        }
        .form-container form select option{
            background: #fff;
        }
        .form-container form .form-btn{
            background: #fbd0d9;
            color: crimson;
            text-transform: capitalize;
            font-size: 20px;
            cursor: pointer;
        }
        .form-container form .form-btn:hover{
            background: crimson;
            color: #fff;
        }
        .form-container form p{
            margin-top: 10px;
            font-size:  20px;
            color:#333;
        }
        .form-container form p a{
            color: crimson;
        }   
        .form-container form .error-msg{
            margin: 10px 0;
            display: block;
            background: crimson;
            color: #fff;
            border-radius: 5px;
            font-size: 20px;
		   padding: 10px;
        }
.wrapper{
            width: 100%;
            height: 100%;
        }
        .navbar{
            width: 100%;
            height: 60px;
            background: #ff0066c4;
            /*background: #F15E8A;*/
        }
        .navbar ul{
            display: flex;
            justify-content: center;
        }
        .navbar ul li{
            position: relative;
        }
        .navbar ul li a{
            display: block;
            color: #fff;
            width: 180px;
            height: 60px;
            text-align: center;
            padding: 20px 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: all 0.2s ease;
        }
        .navbar ul  li > a{
            margin-right: 1px;
        }
        .navbar ul li a .icon{
            width: 25px;
            display: inline-block;
        }
        .navbar ul li a:hover, 
        .navbar ul li a.active{
            /*background: #f17b7bf9;*/
            background: #e40c83f9;
        }


        .container{
            max-width: 500px;
            width: 100%;
            background-color: white;
            margin: 20px auto;
            padding: 30px;
            box-shadow: 10px 10px 2px rgba(0,0,0,0.5);
        }
        .container .title{
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color:#ff3399 ;
            text-transform: uppercase;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="wrapper">
        <div class="navbar">
            <ul>
                <li><a href="Home.php" class="a1">
                    <div class="wrap">
                        
                        <span class="text"> Home </span>
                    </div>
                </a></li>
                
                <li><a href="AboutUs.php" class="a1">
                    <div class="wrap">
                        
                        <span class="text">  About Us </span>
                    </div>
                </a></li>

                <li><a href="courses.php" class="a1">
                    <div class="wrap">
                       
                        <span class="text"> Courses </span>
                    </div>
                </a></li>

                <li><a href="products.php" class="a1">
                    
                    <div class="wrap">
                        
                        <span class="text"> Products </span>
                    </div>
                </a></li>

                <li><a href="contact.php" class="a1">
                    <div class="wrap">
                        
                        <span class="text">Contact </span>
                    </div>
                </a></li>
               
            </ul>
            
        </div>
    </div>


    <div class="form-container">
        <form action = "" method="post">
            <h3> Login Now!</h3>
		   <?php
			if(isset($error)){
				foreach($error as $error){
				  echo '<span class="error-msg">'.$error.'</span>';
			};
			};
		   ?> 
           
            <input type="email" name = "email" required placeholder = "Enter your email">
            <input type="password" name = "password" required placeholder = "Enter your password">
           
            
       <input type = "submit" name= "submit" value="Login now" class="form-btn">
       <p>Don't have an account? <a href="register_page.php">Register Now</a></p>
       
        </form>
    </div>
  <script>
            let popup = document.getElementById("form-btn");
            function openPopup(){
                popup.classList.add("open-popup");
            }
            function closePopup(){
                popup.classList.remove("close-popup");
            }
        </script>

<?php
include("footer.php");
?>
</body>
</html>
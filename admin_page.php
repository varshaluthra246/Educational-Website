<?php
@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_page</title>

    <style>
        *{
		
            font-family: 'Poppins', sans-serif;
            margin:0; padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }
        .container{
		 
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
        }
        .container .content{
            text-align: center;
		margin: 20px;
        }
        .container .content h3{
            font-size: 30px;
            color: #333;
        }
        .container .content h3 span{
            background: crimson;
            color: #fff;
            border-radius: 5px;
            padding: 0 15px;
        }
        .container .content h1 span{
            color: crimson;
        }
        .container .content p {
            font-size: 25px;
            margin-bottom: 20px;
        }
         .container .content .btn{
            display: inline-block;
            padding: 10px 30px;
            font-size: 20px;
            background:   linear-gradient(45deg, #ed60a2, #ff1252);
            color: #fff;
            margin: 10px 5px;
            text-transform: capitalize;
        }
        .container .content .btn:hover{
            background: crimson;
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



    <div class="container">
        <div class="content">
            <h3>Hello!<span>admin</span></h3>
           <!-- <h1> Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>-->
            <p>Welcome to the admin page!</p>
            <a href = "login_page.php" class="btn">Login</a>
            <a href = "register_page.php" class="btn">Register</a>
        
  <a href = "http://localhost/phpmyadmin/index.php?route=/sql&db=user_db&table=user_form&pos=0" class="btn">Administrative_panel</a>
		    <a href = "logout_form.php" class="btn">LogOut</a>
        </div>

    </div>
<?php
include("footer.php");
?>
</body>
</html>
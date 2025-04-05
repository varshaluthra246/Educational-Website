<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Popup Design - Easy </title>
       
        <style>
            *{
               
                margin: 0;
                padding: 0;
                
            }
            h2{
			 margin: 40px 10px 10px 10px;
                padding: 10px;
			  justify-content: center;  
            }
		
            .container{
                width: 100%;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;  
			 background: #ff0066c4; 
            }
 .container img{
                width: 100%;
                height: 100vh;
			  margin: 10px;
			 padding: 40px;
				border-radius:50px;
                
            }
            .btn{
                letter-spacing: normal;
                margin: 50px;
                padding: 10px 60px;
                background: #fff;
                border: 0;
                outline: none;
                cursor: pointer;
                font-size: 22px;
                font-weight: 500;
                border-radius: 30px;
            }
           /* .popup{
                width: 400px;
                background: #fff;
                border-radius: 6px;
                position: absolute;
                top: 0%;
                left: 50%;
                transform: translate(-50%,-50%) scale(0.1);
                text-align: center;
                padding: 0 30px 30px;
                color: #333;
                visibility: hidden;
                transition: transform 0.4s, top 0.4s;
            }
            .open-popup{
                visibility: visible;
                top: 50%;
                transform: translate(-50%,-50%) scale(1);
                box-shadow: 8px 8px 8px rgba(235, 239, 10, 0.44);
            }
            
            .popup img{
                width: 100px;
                margin-top: -50px;
                border-radius: 50%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }
            .popup h2{
                font-family: 38px;
                font-weight: 500;
                margin: 30px 0 10px;
			  font-size: 50px;
            }
.popup p{
               
			  font-size: 20px;
            }
            .popup button{
                width: 100%;
                margin-top: 50px;
                padding: 10px 0;
                background: #f2e93a;
                color: black;
                border: 0;
                outline: none;
                font-size: 18px;
                border-radius: 4px;
                cursor: pointer;
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
                
            }
*/	
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
<img src = "images/online.png" alt = " ">
          <h2>Click the Submit button for Transaction to Access all the Paid Courses</h2>
           <a href = "payment.php" class="btn"><span>Submit</span></a> 
        </div>

        
<?php
include("footer.php");
?>

    </body>
</html>
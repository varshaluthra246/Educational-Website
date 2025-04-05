<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Popup Design - Easy </title>
       
        <style>
            *{
                
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;

            }
            
          
            .container{
margin: 0;
height: 100vh;
background: linear-gradient(45deg, #ed60a2, #ff1252);
}
            .popup{
			
                width: 40%;
               font-weight: bold; 
               	
              border-radius: 10px;
                margin: 20px 20px 20px 20px;
                text-align: center;
                padding:50px 50px 30px 30px;
                color: black;
                font-size: large;
                background: #fff;
                
            }
            .open-popup{
                visibility: visible;
                
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
                font-weight: 700;
                margin: 30px 0 10px;
                    text-align: center;
                    padding: 50px;
                    
            
                
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
            <div class="popup" id="popup">
                <img src="images/tick.png">
                <h2>Thank You!</h2>
                <p>Your details has been successfully submitted.Thanks! 
                   You can now access to our Courses. Explore them!
                </p>
                <a href="courses.html">
                  <button type="button" >OK</button>
                </a>
               
            </div>
</div>
       

        
<?php
include("footer.php");
?>
</body>
</html>
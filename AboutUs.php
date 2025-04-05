<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>About Us</title>
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
            margin:0; padding: 0;
            box-sizing: border-box;
            outline: none; border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: all .2s linear;
        }
        body{
            /*background-color: #dc143c22;*/
            background: linear-gradient(to bottom left, #ffffff -9%, #ff3399 99%);

        }
        #book-icon{
            font-size: 1.8rem;
            cursor: pointer;
            padding: 10px;
            margin-right: 10px;
            color: white;
        }
        .sidebar.active{
            left: 0;
        }
        /*.sidenav{
            height: 100%;
            width: 250px;
            position: fixed;
            top:0;
            left:0;
            z-index: 1;
            background: #ff0066c4;
            overflow-x: hidden;
            padding-top: 60px;
        }*/
        .sidebar{
            position: fixed;
            background: rgb(240, 6, 127);
            width: 250px;
            height: 150%;
            top: 0;
            left: -100%;
            z-index: 13;
            
        }
        .sidebar h2{
            text-align: center;
            font-size: 20px;
            text-transform: uppercase;
            color: white;
            background-color: rgb(240, 6, 127);
            padding: 70px;
            
     
        }
        .sidebar ul li{
            margin: 20px  0;
            padding: 2px;
        }
        .sidebar ul li a{
            color: white;
            padding: 0 20px;
        }
        .sidebar ul li  a:hover{
            color: black;
            margin-left: 20px;
            transition: 0.4s;
        }
        .close-btn{
            position: absolute;
            top:20px;
            right: 25px;
            font-size: 40px;
            color: white;
        }
        header{
            width: 100%;
            height: 100vh;
            background: linear-gradient(45deg, #ed60b5, #ff1252);
            background-color: #fff;   
        }
        .container{
            width: 1200px;
            height: 100vh;
            margin: auto;
            text-align: center;
            padding-top: 50px;  
        }
        .container1{
            display: grid;
            justify-content: space-between;
            width: 1200px;
            height: 100vh;
            margin: auto;
            text-align: center;
            padding-top: 50px;
            background-color: #ffd559;  
        }
        
        .container h3{
            color: #ffff;
            font-size: 60px;
            font-style: italic;
        }
        .container1 h1{
            font-size: 60px;
            align-items: center;
        }
        .row{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 50px;
        }
        .row .box{
            width: 350px;
            height: 350px;
            background: linear-gradient(to top right, #ff66cc 28%, #fbfbfb 89%);
            border-radius: 20px;
            padding: 10px;
            cursor: pointer;
        }
        .row .box h2{
            padding-top: 20px;
            font-size: 35px;
            cursor: pointer;
        }
        .row .box ion-icon{
            margin-top: 20px;
            font-size: 30px;
            margin: 25px 0px;
            transition: .5s;
        }
        .row .box .ion-icon .uil{
            font-size: 60px;
        }
        
        .row .box p{
            margin-top: 20px;
            font-size: 30px;
            margin: 25px 0px;
        }
        .row .box li{
            margin-top: 20px;
            font-size: 15px;
            margin: 25px 0px;
        }
        .row2{
            display:grid;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;  
        }
        .row2 .box2{
            width: 350px;
            height: 350px;
            background-color: #ffc859;
            border-radius: 30px;
            padding: 10px;
            cursor: pointer;
            grid-auto-columns: auto;
          /* justify-content: space-between;
            width: 300px;
            height: 400px;
            background-color: #ffc859;
            border-radius: 20px;
            padding: 100px;
            row-gap: 50px;
            cursor: pointer;
            position: relative;*/
        }
       
        .team{
            position: relative;
            width: 100%;
            height: 110vh;
            background: linear-gradient(45deg, #8460ed, #ff1252);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-style: italic;
        }
        .team-content{
            width: 70%;
            max-width: 1350px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, auto));
            align-items: center;
            gap: 3rem;
            text-align: center;
            margin-top: 4rem;
        }
        .team-content img{
            width: 50%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 15px;
        }
        .center h1{
            color: #fff;
            font-size: 5rem;
            text-align: center;
        }
        .box h3{
            font-size: 23px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
        }
        .box h5{
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }
        .icon2 .uil{
            display: inline-block;
            color: #fff;
            font-size: 20px;
            margin: 0 8px;
            transition: all .38s ease;
        }
        .box:hover{
            transform: translateY(-10px);
            cursor: pointer;
        }
        .icon a,.icon2 a{
            text-decoration: none;
            margin: 3px;
            color: #fff;
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
        


        .footer{
            position: relative;
            width: 100%;
            height: 58vh;
            padding: 50px 100px;
            background: #ff0066;
            line-height: 30px;
            
           
        }
        .box-container{
            width: 100%;
            display: grid;
            grid-template-columns: 2fr 2fr 1fr;
            grid-gap: 80px;
        }
        .box-container .box{
                display: grid;
        
        }
        .box-container .box h3{
            position: relative;
            color: #fff;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .box h3:hover, .links:hover{
            color: yellow;
        }
        .box p:hover{
            color:yellow !important;
        }
        
        .box-container .box h3::before{
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100px;
            height: 2px;
            background: #ffeb3b;
        }
        .box-container .box p{
            color: #fff;
        }
        .share{
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(4, 50px);
            grid-gap: 10px;
        }
        .share a{
            margin-left: 25px;
            outline-style: none;
            display: inline-block;
            width: 48px;
            height: 48px;
            background: #ffeb3b;
            display: grid;
            align-content: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 12px;
        }
        .share a:hover{
            background: #ff66cc;
        }
        .share a .uil{
            color: #fff;
            font-size: 20px;
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

                <li><a href="register_page.php" class="a1">
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



<header>
                
    <div class="container">
        <h3>About Us</h3>
        
        <div class="row">
            <div class="box">
                <i class="uil uil-book"></i>
                <h2><u>Mission</u>  </h2>
                <p>
                <li>Efficient organisation of products</li>
                <li>Consistent layout of the information.</li>
                <li>Proper use of links and buttons</li>
                <li>Secure data or encrypted data notifications</li>
                <li>Feedback must be proper.</li>
            </p>
                <div class = "icon">
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
                    
                </div>
            </div>

            <div class="box">
                <i class="uil uil-globe"></i>
                <h2><u>Vision</u>  </h2>
                <p>
                    <li>100% trust of the audience</li>
                    <li>Consistent layout of the information.</li>
                    <li>Good quality Products</li>
                    <li>Delivery on Time</li>
                    <li>Responsive Feedback</li>
                </p>
                
                <div class = "icon">
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
                    
                </div>
            </div>

            <div class="box">
                <i class="uil uil-pen"></i>
                <h2> <u>Achievements</u> </h2>
                <p>
                    <li>50% trusted audience</li>
                    <li>Consistent collaboration among audiences </li>
                    <li>Amazing feedbacks from Students</li>
                    <li> products Delivery on time</li>
                    <li>Responsive Feedback</li>
                </p>
                
                <div class = "icon">
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
                        <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
                    
                </div>
            </div>
             </div>
             
            </div>
<section class="team">
<div class="center">
    <h1>Our Team Members</h1>
</div>
<div class="team-content">
    <div class="box">
        <img src = "Images/varsha_pic.jpeg">
        <h3> Varsha Luthra</h3>
        <h5> Owner of Subjectsaholic</h5>
        <div class = "icon2">
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
        
    </div>
    </div>

    <div class="box">
        <img src = "Images/shweta pic.jpeg">
        <h3> Shweta Antil</h3>
        <h5> Owner of Subjectsaholic</h5>
        <div class = "icon2">
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
            <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
        
    </div>
    </div>
</div>
</section>
    
    <!--footer section-->
 <section class = "footer">
    <div class="box-container">
        <div class = "box">
            <h3> Subjectsaholic <i class="uil uil-book"></i></h3>
            <p> One of the Best platform to access all the materials </p>
            <p> Grow your skills to advance your career path </p>
            <p> Everybody deserves a good chance -- so as Subjectsaholic! </p>
            <div class = "share">
                 <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
            </div>
        </div>
        <div class ="box">
            <h3> Contact Info</h3>
                <a href ="#" class = "links"><i class="uil uil-phone"></i> +91 8882091675</a>
                <a href ="#" class = "links"><i class="uil uil-phone"></i> +91 9729859060</a>
                <a href ="contact.php" class = "links"><i class="uil uil-envelope"></i> varshaluthra22@gmail.com</a>
                <a href ="#" class = "links"><i class="uil uil-map-marker"></i> Sonepat, India</a>
        
        
        </div>
        <div class ="box">
                <h3> Quick Links </h3>
                <a href ="home.php" class = "links"><i class="uil uil-arrow-right"></i> Home</a>
                <a href ="aboutus.php" class = "links"><i class="uil uil-arrow-right"></i>Features</a>
                <a href ="register_page.php" class = "links"><i class="uil uil-arrow-right"></i> Courses </a>
                <a href ="products.php" class = "links"><i class="uil uil-arrow-right"></i> Products </a>
                <a href ="contact.php" class = "links"><i class="uil uil-arrow-right"></i> Blogs & Reviews</a>
            </div>
    </div>
</section>
</body>
</html>
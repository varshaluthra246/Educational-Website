<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Our Video Gallery</title>
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
        background: linear-gradient(45deg, #ed60b5, #ff1252);
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
        }
        


        .wrapper{
            width: 100%;
            height: 100%;
        }
        .navbar{
            width: 100%;
            height: 80px;
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
            width: 80%;
            margin: 80px auto;
            background: linear-gradient(45deg, #ed60b5, #ff1252);
        }
        .container h1{
            padding: 0px 0;
            color: black;
            font-size: 44px;
            text-align: center;
        }
        .container p{
            color: rgb(211, 0, 105);
            font-size: 60px;
        }
        .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .col{
            flex-basis: 50%;
            min-width: 250px;
        }
        .feature-img{
            width: 90%;
            margin: -4rem;;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }
        .small-img-row{
            display: flex;
            background: #efefef;
            /*background: #efefef;*/
            margin: 30px 20px;
            align-items: center;
            border-radius: 6px;
            overflow: hidden;
            width: 85%;
        }
        .small-img{
            position: relative;
        }
        .small-img img {
            width: 150px;
        }
        .small-img-row p{
            margin-left: 20px;
            color: #707070;
            line-height: 22px;
            font-size: 15px;
        }
        .play-btn{
            width: 60px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .small-img .play-btn{
            width: 40px;
        }
        .video-player{
            width: 80%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        video focus{
            outline: none;
        }
        .close-btn{
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            cursor: pointer;
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
                <i class="fa fa-book" id = "book-icon" onclick="openNav()"></i>
            </ul>
            
        </div>
    </div>



<div class="sidebar" id = "mySidenav">
    <a href="javascript:void(0)" class="close-btn" onclick = "closenav()">&times;</a>
    <h2> Our Contents </h2>
    <ul class = "nav">
        <li><a href = "courses.php"><i class="fas fa-server"></i><span>DashBoard</span></a></li>
        <li><a href = "courses.php"><i class="fa-solid fa-c"></i><span>  Language</span></a></li>
        <li><a href = "courses2.php"><i class="fa-solid fa-c"></i> </i><i class="fa-solid fa-plus"></i><i class="fa-solid fa-plus"></i><span>  Language</span></a></li>
        <li><a href = "courses3.php"><i class="fa-brands fa-java"></i><span>Python</span></a></li>
        <li><a href = "courses4.php"><i class="fa-brands fa-python"></i><span>Java</span></a></li>
        <li><a href = "courses5.php"><i class="fa-solid fa-computer"></i><span> Computer Fundamentals</span></a></li>
        <li><a href = "#"><i class="fas fa-calendar"></i><span>Events</span></a></li>
        <li><a href = "contact.php"><i class="fas fa-question-circle"></i><span>Need a help?</span></a></li>
        <li><a href = "#"><i class="fas fa-address-card"></i><span>Feedback</span></a></li>        
    </ul>
</div>



<header>
                
    <div class="container">
        <h1> <u>Our Video Gallery</u> </h1>
        <p> <center>Just One Click - A direct access to your Favorite Video</center></p>
        <div class="row">
            <div class="col">
                <div class="feature-img">
                    <a href = "https://www.youtube.com/channel/UCX4RNt7p9eH0Pn0BczmJK1Q" target ="_blank">
                        <img src="Images/a1.jpg" width="100%">
                    <img src="Images/play.png" class = "play-btn">
                    </a>
                    
                </div>
            </div>
            <div class = "col">
                <div class="small-img-row">
                    <div class="small-img">
                        <a href = "https://www.youtube.com/channel/UCX4RNt7p9eH0Pn0BczmJK1Q" target ="_blank">
                        <img src="Images/a1.jpg">
                        <img src="Images/play.png" class = "play-btn">
                    </a>
                    </div>
                    <p> <b>Inheritance in Java</b></p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <a href = "https://www.youtube.com/channel/UCX4RNt7p9eH0Pn0BczmJK1Q" target ="_blank">
                        <img src="Images/a2.jpg">
                        <img src="Images/play.png" class = "play-btn">
                        </a>
                    </div>
                    <p> <b>Basic Computer Fundamental</b></p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <a href = "https://www.youtube.com/channel/UCX4RNt7p9eH0Pn0BczmJK1Q" target ="_blank">
                        <img src="Images/a3.jpg">
                        </a>
                        <img src="Images/play.png" class = "play-btn">
                    </div>
                    <p> <b>Biology class 12 Ecosystem</b></p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <a href = "https://www.youtube.com/channel/UCX4RNt7p9eH0Pn0BczmJK1Q" target ="_blank">
                        <img src="Images/a3.jpg">
                        </a>
                        <img src=Images/play.png" class = "play-btn">
                    </div>
                    <p> <b>Biology class 12 Ecosystem</b></p>
                </div>
                
                
                
            </div>
        </div>
    </div>
    </header>
    <!--footer section-->
 <section class = "footer">
    <div class="box-container">
        <div class = "box">
            <h3> Subjectsaholic <i class="uil uil-book"></i></h3>
            <p> One of the Best platform to access all the materials </p>
            <p> Grow your skills to advance your career path </p>
            <p> Everybody deserves a good chance -- so as Subjectsaholic! </p>
            <div class = "share">
                <a href = "#" class = "uil uil-facebook"></a>
                <a href = "#" class = "uil uil-twitter"></a>
                <a href = "#" class = "uil uil-instagram"></a>
                <a href = "#" class = "uil uil-linkedin"></a>
            </div>
        </div>
        <div class ="box">
            <h3> Contact Info</h3>
            <a href ="#" class = "links"><i class="uil uil-phone"></i> +91 8882091675</a>
            <a href ="#" class = "links"><i class="uil uil-phone"></i> +91 9729859060</a>
            <a href ="#" class = "links"><i class="uil uil-envelope"></i> varshaluthra22@gmail.com</a>
            <a href ="#" class = "links"><i class="uil uil-map-marker"></i> Sonepat, India</a>
        
        
        </div>
        <div class ="box">
            <h3> Quick Links </h3>
            <a href ="#" class = "links"><i class="uil uil-arrow-right"></i> Home</a>
            <a href ="about.html" class = "links"><i class="uil uil-arrow-right"></i>Features</a>
            <a href ="courses.html" class = "links"><i class="uil uil-arrow-right"></i> Courses </a>
            <a href ="products2.html" class = "links"><i class="uil uil-arrow-right"></i> Products </a>
            <a href ="contact2.html" class = "links"><i class="uil uil-arrow-right"></i> Blogs & Reviews</a>
        </div>
    </div>
</section>


    <script>
        let loadMoreBtn = document.querySelector('#load-more');
        let currentItem = 3;

        loadMoreBtn.onclick = () =>{
            let boxes = [...document.querySelectorAll('.container .box-container .box')];
            for(var i = currentItem; i < currentItem +  3; i++){
                boxes[i].style.display = 'inline-block';
            }
            currentItem += 3;
            
            if(currentItem >= boxes.length){
                loadMoreBtn.style.display = 'none';
            }
        }
    </script> 

    <script>
        //for closing and opening sidebar
        let bookIcon = document.querySelector("#book-icon");
        let sidebar = document.querySelector('.sidebar');
        let closeIcon = document.querySelector(".close-btn");
        

        //open sidebar
        bookIcon.onclick = () => {
        sidebar.classList.add("active");
        
    };
    //close sidebar
    closeIcon.onclick = () => {
        sidebar.classList.remove("active");
    };
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Courses</title>
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
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            padding: 25px 20px;
        }
        .container .heading{
            font-size: 40px;
            margin-bottom: 20px;
            color: #334;
        }
        .container .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
        }
        .container .box-container .box{
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            display: none;
        }
        .container .box-container .box:nth-child(1), 
        .container .box-container .box:nth-child(2),
        .container .box-container .box:nth-child(3)
        {
            display: inline-block;
        }

        .container .box-container .box .image{
            margin-bottom: 20px;
            overflow: hidden;
            height: 250px;
            border-radius: 5px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }
        .container .box-container .box .image img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        .container .box-container .box:hover .image img{
            transform: scale(1.1);
        }
        .container .box-container .box .content h3{
            font-size: 20px;
            color: #334;
        }
        .container .box-container .box .content p{
            font-size: 15px;
            color: #ff0066c4;
            line-height: 2;
            padding: 15px 0;
        }
        .container .box-container .box .content .btn{
            display: inline-block;
            padding: 10px 30px;
            border: 1px solid #334;
            color: #ff0066c4;
            font-size: 16px;
        }
        .container .box-container .box .content .btn:hover{
            background-color: #ff0066c4;
            border-color: #ff0066c4;
            color: #fff;
        }
        .container .box-container .box .content .icons{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #334; 
        }
        .container .box-container .box .content .icons span{
            font-size: 14px;
            color: #ff0066c4;
        }
        .container .box-container .box .content .icons span i{
            color: crimson;
            padding-right: 5px;
        }
        #load-more{
            margin-top: 20px;
            display: inline-block;
            padding: 13px 30px;
            border: 1px solid #334;
            color: #334;
            font-size: 16px;
            background-color: #fff;
            cursor: pointer;
        }
        #load-more:hover{
            background-color: #ff0066c4;
            border-color: #ff0066c4;
            color: #fff;

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
                <li><a href="home.php" class="a1">
                    <div class="wrap">
                        <span class="icon">
                            <i class = "fas fa-calendar"></i>
                        </span>
                        <span class="text"> Home </span>
                    </div>
                </a></li>
                
                <li><a href="aboutus.php" class="a1">
                    <div class="wrap">
                        <span class="icon">
                            <i class = "fas fa-calendar"></i>
                        </span>
                        <span class="text">  About Us </span>
                    </div>
                </a></li>

                <li><a href="courses.php" class="a1">
                    <div class="wrap">
                        <span class="icon">
                            <i class = "fas fa-calendar"></i>
                        </span>
                        <span class="text"> Courses </span>
                    </div>
                </a></li>

                <li><a href="products.php" class="a1">
                    
                    <div class="wrap">
                        <span class="icon">
                            <i class = "fas fa-calendar"></i>
                        </span>
                        <span class="text"> Products </span>
                    </div>
                </a></li>

                <li><a href="contact.php" class="a1">
                    <div class="wrap">
                        <span class="icon">
                            <i class = "fas fa-calendar"></i>
                        </span>
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
       
        <li><a href = "Events.php"><i class="fas fa-calendar"></i><span>Events</span></a></li>
        <li><a href = "contact.php"><i class="fas fa-question-circle"></i><span>Need a help?</span></a></li>
        <li><a href = "contact.php"><i class="fas fa-address-card"></i><span>Feedback</span></a></li>        
    </ul>
</div>



    <div class = "container">
        <h1 class = "heading"> Subjectsaholic </h1>
        <div class = "box-container">
            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Introduction to Computer</h3>
                    <p> Who develop Biology language? Basic Syntax of Biology language. 
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src  = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Input in Computer </h3>
                    <p>Types of Comments - Single and Multiline Comments
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Processing in Computer </h3>
                    <p>How to declare and initialize variables? Local and Global Variables. 
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Output in Computer</h3>
                    <p>Various Data types - Int, Float, Double, String, Char and Boolean. 
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Hardware Components</h3>
                    <p>If-else conditional statements - if prints True condition and else prints False statements. 
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Software Components</h3>
                    <p>Various Operators like- Arithmetic, Assignment, Logical, Bitwise and Comparison. 
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Central Processing Unit</h3>
                    <p> Constants are used to initialize variable with fixed values.
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Memory in Computer </h3>
                    <p>Arrays are homogeneous type,  used to store multiple values in a single variable
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class = "image">
                    <img src = "Images/s6.jpg" alt = "">
                </div>
                <div class = "content">
                    <h3>Storage Unit in Computer</h3>
                    <p>While and for loop Controlling statements are also known as iterative.
                    </p>
                    <a href ="Images/Computer.mp4" class = "btn" > Read More </a>
                    <div class = "icons">
                        <span ><i class = "fas fa-calendar"></i> 4th November, 2022</span>
                        <span ><i class = "fas fa-user"></i>By Admin </span>
                    </div>
                </div>
            </div>
        </div>
        <div id="load-more">Load More </div>
    </div>   
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
                <a href ="courses.php" class = "links"><i class="uil uil-arrow-right"></i> Courses </a>
                <a href ="products.php" class = "links"><i class="uil uil-arrow-right"></i> Products </a>
                <a href ="contact.php" class = "links"><i class="uil uil-arrow-right"></i> Blogs & Reviews</a>
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
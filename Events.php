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

.container1{
    text-align: center;
    margin-top: 160px;
	height: 100px;
}

h1{
text-align: center;
margin: 20px;
padding: 20px;
}
.btn{
    border: 2px solid #ff0066c4;;
    background: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family: "montserrrat";
    cursor: pointer;
    margin: 10px;
    transform: 0.8s;
    position: relative;
    overflow: hidden;

}

.btn1,.btn2{
    color: #fff;
font-weight: 5px;

}
.btn3,.btn4{
    color: #fff;
font-weight: 2px;
    
}
.btn1:hover,.btn2:hover{
    color: black;
}

.btn3:hover,.btn4:hover{
    color: black;
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

   

    </style>

</head>
<body>
    <div class="wrapper">
        <div class="navbar">
            <ul>
                <li><a href="Home.php" class="a1">
                    <div class="wrap">
                        <span class="icon">
                            <i class = "fas fa-calendar"></i>
                        </span>
                        <span class="text"> Home </span>
                    </div>
                </a></li>
                
                <li><a href="AboutUs.php" class="a1">
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


<h1> QUIZ SECTION! </h1>

<div class="container1">

             <a href="c_quiz.php"  class="btn btn1">C Language Quiz</a>
             <a href="c++quiz.php" class="btn btn2">C++ Language Quiz</a>
             <a href="python_quiz.php" class="btn btn3">Python Language Quiz</a>
             <a href="java_quiz.php"class="btn btn4">Java Language Quiz</a>
        </div>

    <!--footer section-->



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
<?php
include("footer.php");
?>
</body>
</html>
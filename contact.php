<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Contact Us</title>
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
            width: 100%;
            max-width: 1350px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, auto));
            align-items: center;
            gap: 2rem;
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
        
.contact{
padding-top: 50px;


}
        
.contact_container{
    /*background: var(--color-bg1);*/
    background: linear-gradient(to bottom left, #ffffff -9%, #ff3399 99%);
    padding: 4rem;
    display: grid;
    grid-template-columns: 40% 60%;
    gap: 4rem;
    height: 49rem;
    margin: 1rem auto;
    border-radius: 1rem;
}
/*---------------------------ASIDE------------------------*/
.contact_aside{
    background: linear-gradient(45deg, #ed60a2, #ff1252);
    /*background: var(--color-primary);*/
    padding: 3rem;
    border-radius: 1rem;
    position: relative;
    bottom: 6rem;
}
.aside-image img{
max-width: 15rem;
 height: 180px;
    margin-bottom: 4rem;
}
.contact_aside h2{
    text-align: left;
    margin-bottom: 1rem;
}
.contact_aside p{
    font-size: 0.9rem;
    margin-bottom: 2rem;
}
.contact_details li{
    display: flex;
    gap: 1rem;
    align-items: center;
    margin-bottom: 1rem;

}
/*---------------------------Form------------------------*/
form .db1-field{
    display: flex;
    align-items: center;
    margin-bottom: 25px;
    justify-content: space-between;
    gap: 2rem;
    margin-right: 4rem;
}
.db1-field .field{
    height: 50px;
    width: calc(100% / 2 -13px);
}
form .field input, 
form .message textarea{
    height: 100%;
    width: 100%;
    outline: none;
    padding: 0 18px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #bfbfbf;
    margin-right: 4rem
}
.wrapper form i{
    position: absolute;
    left: 18px;
    top: 50%;
    color: #bfbfbf;
    font-size: 17px;
    pointer-events: none;
    transform: translateY(-50%);
}
form .message{
    position: relative;
    margin-right: 4rem
}
form .message i{
    top: 20px;
    font-size: 20px;
}
form .message textarea{
    min-width: 100%;
    max-width: 100%;
    min-height: 120px;
    max-height: 300px;
    padding: 15px 20px 0 48px;
}
form .button-area{
    margin: 25px 0;
    display: flex;
    align-items: center;
}
.button-area button{
    font-size: 18px;
    border: none;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
    background: #fd0dadd6;
    padding: 13px 25px;
}
.button-area span{
    color: #ffff;
    margin-left: 30px;
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
             
 <section class="contact">
        <div class="container contact_container">
            <aside class="contact_aside">
                <div class="aside-image">
                    <!--<img src="./images/contact.svg">-->
                    <img src="images/contactus1.png">
                </div>
                <h2>Contact Us</h2>
                <p> Varsha Luthra</p>
                <ul class="contact_details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+8882091675</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>varshaluthra22@gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-map"></i>
                        <h5>Sonipat</h5>
                    </li>
                </ul>
                <div class = "share">
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
                </div>
            </aside>
             <form action  = "https://formspree.io/f/xpznveze"  method="POST"  >
                <div class="db1-field">
                    <div class="field">
                        <input type = "text" name="name" placeholder = "Enter Your name:" required>
                       
                    </div>
                    <div class="field">
                        <input type="text" name="name" placeholder = "Enter Your email:" required>
                        
                    </div>
                </div>
                <div class="db1-field">
                    <div class="field">
                        <input type="text" placeholder = "Enter Your phone:">
                       
                    </div>
                </div>
                    <div class ="message">
                        <textarea placeholder="write your message"></textarea>
                        <i class="material-icons"></i>
                    </div>
                    <div class="button-area">
                    <button type="submit">send message </button>
                   
                    </div>  
            </form>
        </div>
    </section>
   
   
 <?php
include("footer.php");
?>

</body>
</html>
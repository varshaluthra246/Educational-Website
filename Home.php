<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjectsaholic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--custom css file link
    <link rel="stylesheet" href="style4.css"> -->
    <!--google fonts -link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<!--Script Adding
<script src="script.js"></script>-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,600;1,100;1,300;1,400;1,600;1,900&family=Nunito:ital,wght@0,200;1,200;1,300;1,600;1,900&display=swap" rel="stylesheet"> 

<style>

*{
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    
}
:root{
    --color-primary: #6c63ff;
    --color-success:  #00bf8e;
    --color-warning: #f7c94b;
    --color-danger: #f75842;
    --color-danger-variant:     rgba(247, 88, 66, 0.4);
    --color-white: #fff;
    --color-light: rgba(255, 255, 255, 0.7);
    --color-black: #000;
    --color-bg: #1f2641;
    --color-bg1: #2e3267;
    --color-bg2: #424890;
    --container-width-lg: 80%;
    --container-width-md: 90%;
    --container-width-sm: 94%;
    --transition: all 400ms ease; 
}
body{
    font-family: "Montserrat", sans-serif;
    line-height: 1.9;
    color: var(--color-white);
    background: linear-gradient(45deg, #8460ed, #ff1252);
    /*background: linear-gradient(45deg, #ff0081, #6827b0);
    background: linear-gradient(45deg, #ff5f6d, #ffc371); 
    background: linear-gradient(45deg, #36d1dc, #5b86e5);
    border-radius: 0 0 50% 50%/0 0 100% 100%; */
}
header.sticky .logo,
header.sticky ul li a{
    color: #000;
}
.container{
    
    width: var(--container-width-lg);
    margin: 0 auto;
}
section{
    padding: 6rem 0;
}
section h2{
    text-align: center;
    margin-bottom: 4rem;
}
h1, h2, h3, h4, h5{
    line-height: 1.2;
}
h1{
    font-size: 2.4rem;
}
h2{
    font-size: 2rem;
}
h3{
    font-size: 1.6rem;
}
h4{
    font-size: 1.3rem;
}
a{
    color: var(--color-white);
}
.header-right{
            overflow: hidden;
            border: 20px solid #fff;
            border-radius: 10px;
            box-shadow: 10px 15px 30px rgb(224, 70, 185); 
}
.header_right-image{
    width: 100%;
    height: 70%;
    display: flex;
    animation: slide 16s infinite; 
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}

img{
    width: 100%;
    height: 90%;
    display: block;
    object-fit: cover;
}
.btn{
    display: inline-block;
    background: var(--color-white);
    color: var(--color-black);
    padding: 1rem 2rem;
    border: 1px solid transparent;
    border-radius: 9px;
    font-weight: 500;
    transition: var(--transition);
}
.btn:hover{
    background: transparent;
    color: var(--color-white);
    border-color: var(--color-white);
}
.btn-primary{
    background: var(--color-danger);
    color: var(--color-white);
}
/* ----------------------NAVBAR -------------------------*/
nav{
    
    /*background: fixed;
    background:  linear-gradient(to top right, #ff66cc 28%, #ff0066c4 89%);*/
    background: linear-gradient(45deg, #ed60a2, #ff1252);
    width: 100vw;
    height: 5rem;
    position: fixed;
    top:0;
    z-index:11;
   
}
nav h4:hover{
    background: linear-gradient(to top right, #ffffff 20%, #ff3399 53%);
    
}
.nav_container{
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav button{
    display: none;
}
.nav_menu{
    display: flex;
    align-items: center;
    gap: 4rem;
    font-weight: 1000;
}
.nav_menu a{
    font-size: 0.9rem;
    transition: var(--transition);
}
.nav_menu a:hover{
    color: var(--color-bg);
}
/* ----------------------Header -------------------------*/
header{
    position: relative;
    top: 5rem;
    overflow: hidden;
    height: 70vh;
    margin-bottom: 5rem;
}
.header_container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 5rem;
    height: 100%;
}
.white{
    background: white;  
}
/*change navbar style  on scroll using javascript */
.window-scroll{
    /* background: var(--color-primary); */
    background-color: #262626;
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.2);
}
.nav_container{
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center; 
}
nav button{
    display: none;
} 
.nav_menu{
    display: flex;
    align-items: center;
    gap: 4rem;
}
.nav_menu a{
    font-size: 0.9rem;
    transition: var(--transition);
}
.nav_menu a:hover{
    color: var(--color-bg2);
}
/*=====Header====*/
header{
    position: relative;
     top: 5rem;
    overflow: hidden;
    height: 83vh;
    margin-bottom: 5rem;
    background-attachment: fixed;
}
.header_container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 5rem;
    height: 100%;
}
.header_left p{
    margin: 1rem 0 2.4rem; 
}
/*=====Categories====*/
.categories{
    background: linear-gradient(to top right, #ff66cc 28%, #ff0066c4 89%);
    /*background: linear-gradient(to bottom right, #ffffff 0%, #ff0066 89%);
    background: var(--color-bg1);
    background:  linear-gradient(45deg, #f5fffa, );
    border-radius: 0 0 50% 50%/0 0 100% 100%;
    box-shadow: 10px 20px 20px #fff; */
    height: 45rem;
}
.categories h1{
    line-height: 1;
    margin-bottom: 3rem;
    margin-top: 6rem;
    color: black;
}
.categories_container{
    display: grid;
    grid-template-columns: 40% 60%;
    gap: 4rem;
    
}
.category_left{
    margin-right: 4rem;
   
}
.categories_left p{
    margin: 1rem 0 3rem;
    color: black;
}
.categories_right{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.2rem;
}
.category{
    background: linear-gradient(to bottom left, #ffffff -9%, #ff3399 99%);
    /*background:  #ff00aebb;
    background: var(--color-bg2);*/
    padding: 2rem;
    border-radius: 2rem;
    transition: var(--transition);
    background: sticky;
    color: black;
}
.category:hover{
    box-shadow: 0 3rem 3rem rgba(0,0,0,0.3);
    z-index: 1;
}
.category:nth-child(2) .category_icon{
    background: var(--color-danger);
}
.category:nth-child(3) .category_icon{
    background: var(--color-success);
}
.category:nth-child(4) .category_icon{
    background: var(--color-warning);
}
.category:nth-child(5) .category_icon{
    background: var(--color-success);
}
.category_icon{
    background: var(--color-primary);
    padding: 0.7rem;
    border-radius: 0.9rem;
}
.category h5{
    margin: 2rem 0 1rem;
}
.category p{
    font-size: 0.85rem; 
    color: black;
}
/*=====Popular Courses====*/
.course_img {
    border-radius: 25px 25px 0px 0px;

}
.courses{
    background: linear-gradient(45deg, #ed60bc, #ff1252);
    margin-top: 1px;
}
.courses_container{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem; 
}
.course {
    background: linear-gradient(to bottom left, #ffffff -9%, #ff3399 99%);
    /*background: linear-gradient(45deg, #8460ed, #ff1252);
    background: var(--color-bg1);*/
    text-align: center;
    border: 1px solid transparent;
    transition: var(--transition);
    border-radius: 25px;
}
.course:hover{
    background: transparent;
    border-color: var(--color-primary);
}
.course_info{
    padding: 2rem; 
}
.course_info p{
    margin:1.2rem 0 2rem;
    font-size: 0.9rem; 
}
                            /*=====FAQSs====*/
.faqs{
    background: linear-gradient(to top right, #ff66cc 28%, #ff0066 89%);
    /*background: var(--color-bg1);*/
    box-shadow: 0 0  1rem rgba(0,0,0,0.5);
}
h4{
    font-size: 35px;
}
h4:hover{
    color: black;
}
.faqs_container{
 
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
}
.faq{
    padding: 1rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    height: fit-content;
    background: linear-gradient(to left, #ff99cc 25%, #ff66cc 88%);
    border: #000;
    /*background: var(--color-primary);*/
    cursor: pointer;
}
.faq h4{
   
    padding: 3px;
    font-size: 1rem;
    line-height: 2.2;
}
.faq_icon{
    align-self: flex-start;
    font-size: 1rem;
    color: black;
}
.faq p{
    margin-top: 0.8rem;
    display: none;
}
.faq p:hover{
    color: black;
}
.faq.open p{
    display: block;
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

.video-container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
   }
   .video-container .video{
    height: 15rem;
    width: 20rem;
    margin: auto;
    box-shadow: 0 .5rem 1rem rgba(0,0,0, .5);
    overflow: hidden;
    border-radius: 1rem;
   }
   .video-container .video video{
    height: 100%;
    width:100%;
    object-fit: cover;
    outline: none;
    border: none;
    cursor: pointer;
   }
   .video-container .video video:hover{
    transition: .2s linear;
    transform: scale(1.3);
   }
   .video-container .video .active{
    position: fixed;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    height: auto;
    width: 80%;
    box-shadow: 0 0 0 100vh rgba(0,0,0, .7);
    z-index: 1;
   }
   .video-container .video  .active:hover{
    transition: none;
    transform:  translate(-50%, -50%) scale(1);
   }
</style>




</head>

<body>
     
    <nav id = 'nav'>
        <div class ="container nav_container">
            <a href="index4.html"><h4>Subjectsaholic</h4></a>
            <!--<img src = "logo.jpeg">-->
            <ul class="nav_menu">
                <li><a href="Home.php">Home</a></li>
                <li><a href="AboutUs.php">About</a></li>
                <li><a href="register_page.php">Courses</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <!--<button id="open-menu-btn"><i class="fa-solid fa-xmark"></i></button>
            <button id="close-menu-btn"><i class="uil uil-bars"></i></button>-->
        </div>
    </nav>

    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Grow your skills to advance your career path</h1>
                <p><b>Subjectsaholic is one of the excellent platform for your programming languages and in the field of Computer Science department. SignUp here to become a part of Subjectsaholic.</b></p>
                <a href="register_page.php" class="btn btn-primary">Sign-Up Here</a>
		
            </div>
            <div class="header-right">
                <div class="header_right-image">
                    <!--<img src="./images/header.svg">-->
                    <img src="Images/b13.jpg">
                    <img src="Images/b12.jpg">
                    <img src="Images/b14.jpg">
                    <img src="Images/b15.jpg">
                    
                </div>
            </div>
        </div>
    </header>
    <!--End of header section-->
    <section class="categories">
        <div class="container categories_container">
              <div class="categories_left">
                <h1>Categories</h1>
                <p>Video provides a powerful way to help you prove your point. 
                    When you click Online Video, you can paste in the embed code for the video you want to add.</p>
                <a href="videos.php" class="btn"> Learn More </a>
            </div>
            <div class="categories_right">
                <article class="category">
                    <span class="category_icon" ><i class="fa-solid fa-c"></i> </span>
                        <h5>C Language</h5>
                        <p><b>C is a general-purpose language, developed in 1972.</b> </p>
                </article>
                <article class="category">
                    <span class="category_icon"><i class="fa-solid fa-c"></i> </i><i class="fa-solid fa-plus"></i><i class="fa-solid fa-plus"></i> </span>
                        <h5>C++ Language</h5>
                        <p><b>It is one of the most used language in game development. 
                        </b></p>
                </article>
                <article class="category">
                    <span class="category_icon"><i class="fa-brands fa-python"></i> </span>
                        <h5>Python </h5>
                        <p><b>Python can connect to database systems-read and modify files.</b> </p>
                </article>
                <article class="category">
                    <span class="category_icon"><i class="fa-brands fa-java"></i> </span>
                        <h5>Java</h5>
                        <p><b>Java is used to develop mobile apps, web apps, desktop apps, games.</b> </p>
                </article>
                <article class="category">
                    <span class="category_icon"><i class="fa-solid fa-computer"></i> </span>
                        <h5>Computer Fundamental</h5>
                        <p><b>Computer - electronic machine, Input, Process & Output Data.</b> </p>
                </article>
                <article class="category">
                    <span class="category_icon"><i class="fa-solid fa-dna"></i> </span>
                        <h5>Biology</h5>
                        <p><b>Covers all the aspect of Biological norms - Homo Sapiens</b> </p>
                </article> 
            </div>
        </div>
    </section>
    <!--end of categories-->
    
    <!--Courses section Begin-->
      <section class="courses">
        <h2>Our Popular Courses [Free Access]</h2>
        <div class="video-container">
            <div class="video">
                
                <video src = "images/c1.mp4" ></video>
            </div>
            <div class="video">
                <video src = "images/cp5.mp4" ></video>
            </div>
            <div class="video">
                <video src = "images/j1.mp4"></video>
            </div>
            
            
            </div>
        </div>
    </div>
    </section>
    
    <!--end of courses-->
    <Section class="faqs">
       
        <div class="container faqs_container">
            <h4><center>Frequently Asked Question</center></h4>
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer"></div>
                <h4>Is there any shipping charges for the products?</h4>
                <p>Yes. The product price includes all the taxes and shipping charges.  </p>
            </article>

            <article class="faq ">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer"></div>
                <h4> Do you offer a free trial?</h4>
                <p> Yes. Subjectsaholic provides free demo trial in the popular Courses.</p>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer"></div>
                <h4> What is the duration of each class?</h4>
                <p>Its Short videos of approx 5-10 minutes.</p>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer"></div>
                <h4> How can I purchase Courses?</h4>
                <p>You need to register first to our website. </p>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer"></div>
                <h4> What are the modes of Payment available for purchasing subjectsaholic items?</h4>
                <p>Credit card as well as debit card.</p>
            </article>

            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer"></div>
                <h4> How do I know the right courses for me?</h4>
                <p>Subjectsaholic video provides a powerful way to help you prove your point.</p>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer"></div>
                <h4>Who are the team members of the projects?</h4>
                <p>Subjectsaholic has two main members - Ms. varsha Luthra and Ms. Shweta Antil.</p>
            </article>
        </div>
    </Section>
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
    
    <script>
        //change navbar styles on scroll
    window.addEventListener('scroll',() =>{
        document.querySelector('nav').classList.toggle('window-scroll',window-scrollY >100)})
    
    //show/hide faq answer
    const faqs = document.querySelectorAll('.faq');
    faqs.forEach(faq => {
         faq.addEventListener('click', () => {
        faq.classList.toggle('open');
        //change icon
        const icon = faq.querySelector('.faq_icon i');
        if(icon.className === 'uil uil-plus'){
            icon.className = "uil uil-minus"
        }
        else{
            icon.className = "uil uil-plus";
        }
    })
    })
    /*<script type="text/javascript">*/
    var color = [ "#222f3e", "#fe68e0", "#ee5253","#0abde3","#10ac84","#222fe3", "#5f27cd"];
    var i = 0;
    document.querySelector("button").addEventListener("click",function(){
        i = i <color.length ? ++i : 0;
        document. querySelector("body").style.background = color[i]
    }) 
   
    var nva  = document.getElementById('nav');
    window.onscroll = function(){
        if(window.pageYOffset > 100){
            nav.style.position = "fixed";
            nav.style.top = 0;
        }
        else{
            box.style.position  = "absolute";
            box.style.top = 100;
        }
    }
    //https://www.instagram.com/subjectsaholic/
    </script> 

<script>
    var video = document.querySelectorAll('video');
    video.forEach(play => play.addEventListener('click', ()=> {
        play.classList.toggle('active');
        if(play.paused)
        {
            play.play();
        }
        else{
            play.pause();
            play.currentTime = 0;
        }
    }));
</script>
</body>
</html>
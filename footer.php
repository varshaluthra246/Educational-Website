<!DOCTYPE html>
<html lang="en">
<head>
<title> Footer </title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjectsaholic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    
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
    
    <!--end of FAQS
    <section class="container testimonials_container">
        <h2>Student's Amazing.. Feedback</h2>
        <div>
            <article>
                <div class="avatar">
                    <img src="./images/avatar1.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Aashish Chauhan</h5>
                    <small>Student </small>
                </div>
                <div class="testimonial_body">
                    <p>Video provides a powerful way to help you prove your point.</p>
                </div>
            </article>
        </div>
    </section>-->
</body>
</html>
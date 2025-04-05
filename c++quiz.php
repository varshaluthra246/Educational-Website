<html>
<head lang="en">
<meta charset="UTF-8">
<title> Quiz2 </title>
<style>
    body {
        background: linear-gradient(45deg, #ed60b5, #ff1252);
        }

        .wrapper{
            width: 100%;
            height: 5%;
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


 .maingrid{
    height: 700px;
    margin-top: 80px;
   		
 }
        .grid {
        width: 700px;
        height: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 0px 50px 50px 50px;
        border-radius: 50px;
        border: 2px solid #cbcbcb;
        box-shadow: 10px 15px 5px #cbcbcb;
        }
        
        .grid h1 {
        font-family: "sans-serif";
        background-color: #F15E8A;
        font-size: 60px;
        text-align: center;
        color: black;
        padding: 2px 0px;
        border-radius: 50px;
        }
        
        #score {
        color: #5A6772;
        text-align: center;
        font-size: 30px;
        }
        
        
        .grid #question {
        font-family: "monospace";
        font-size: 30px;
        color: #5A6772;
        }
        
        
        .buttons {
        margin-top: 30px;
        }
        
        #bt0, #bt1, #bt2, #bt3 {
        background-color: #F15E8A;
        width: 250px;
        font-size: 20px;
        color: #fff;
        border: 1px solid #1D3C6A;
        border-radius: 50px;
        margin: 10px 40px 10px 0px;
        padding: 10px 10px;
        }
        
        #bt0:hover, #bt1:hover, #bt2:hover, #bt3:hover {
        cursor: pointer;
        background-color: #2c0747; 
        }   
        
        #bt0:focus, #bt1:focus, #bt2:focus, #bt3:focus {
        outline: 0;
        }
        
        #progress {
        color: #2b2b2b;
        font-size: 18px;
        }
 #h2{
margin-top: 50px;
color: black;
}   
          
#h1{
 margin-bottom: 20px;
color: black;
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
        <li><a href = "courses5.php"><i class="fa-solid fa-computer"></i><span> Computer Fundamentals</span></a></li>
        <li><a href = "#"><i class="fas fa-calendar"></i><span>Events</span></a></li>
        <li><a href = "contact.php"><i class="fas fa-question-circle"></i><span>Need a help?</span></a></li>
        <li><a href = "#"><i class="fas fa-address-card"></i><span>Feedback</span></a></li>        
    </ul>
</div>

  <div class="maingrid">
<div class="grid">
<div id="quiz">
<h1> QUIZ </h1>
<hr style="margin-bottom: 20px">
<p id="question"> </p>

<div class="button">
<button id="bt0"> <span id="choice0"> </span> </button>
<button id="bt1"> <span id="choice1"> </span> </button>
<button id="bt2"> <span id="choice2"> </span> </button>
<button id="bt3"> <span id="choice3"> </span> </button>

</div>

<hr style="margin-top: 50px">

<footer>
<p id="progress"> Question x of y</p>
</footer>
</div>
</div>
</div>
<?php include("footer.php");
?>
</body>
<script>
    function Quiz(questions) {
        this.score = 0;
        this.questions = questions;
        this.questionIndex = 0;
    }
    
    Quiz.prototype.getQuestionIndex = function() {
        return this.questions[this.questionIndex];
    }
    
    Quiz.prototype.guess = function(answer) {
        if(this.getQuestionIndex().isCorrectAnswer(answer)) {
            this.score++;
        }
    
        this.questionIndex++;
    }
    
    Quiz.prototype.isEnded = function() {
        return this.questionIndex === this.questions.length;
    }

    function Question(text, choices, answer) {
        this.text = text;
        this.choices = choices;
        this.answer = answer;
    }
    
    Question.prototype.isCorrectAnswer = function(choice) {
        return this.answer === choice;
    }


    function populate() {
        if(quiz.isEnded()) {
            showScores();
        }
        else {
            // show question
            var element = document.getElementById("question");
            element.innerHTML = quiz.getQuestionIndex().text;
    
            // show options
            var choices = quiz.getQuestionIndex().choices;
            for(var i = 0; i < choices.length; i++) {
                var element = document.getElementById("choice" + i);
                element.innerHTML = choices[i];
                guess("bt" + i, choices[i]);
            }
    
            showProgress();
        }
    };
    
    function guess(id, guess) {
        var button = document.getElementById(id);
        button.onclick = function() {
            quiz.guess(guess);
            populate();
        }
    };
    
    
    function showProgress() {
        var currentQuestionNumber = quiz.questionIndex + 1;
        var element = document.getElementById("progress");
        element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
    };
    
    function showScores() {
        var gameOverHTML = "<h1>Result</h1>";
        gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";
        var element = document.getElementById("quiz");
        element.innerHTML = gameOverHTML;
    };
    
    // create questions
    var questions = [
    new Question("How can you create a variable with the numeric value 5?", ["double x =5;", "num x = 5; ","int x = 5 ;", "x = 5;"], "int x = 5;"),

    
        new Question("How do you insert comments in C++ code?", ["-- This is a comment", " /* this is a comment","#this is a comment","//this is a comment"], "//this is a comment"),
        
    
        new Question("What data type is used to create a variable that should store text?", ["string", "myString","String", "Txt"], "string"),
        
    
        new Question("How can you create a variable with the floating value 2.8?", ["int x = 2.8;", "x =2.8;","byte x = 2.8;", "double x = 2.8; "], "double x = 2.8;"),
            
    
    ];
    var quiz = new Quiz(questions);
    
    
    populate();
    
    
    
    
    
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
</html>
<!-- Previous lINKS
1. quiz2.html
2. quiz2.css
3. quiz2.js
4. question.js
5. app.js


-->

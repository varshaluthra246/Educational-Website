	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
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
       html{
        font-size: 62.5%;
       }
       .container .heading{
        font-size: 3rem;
        margin: 2rem 0;
        text-transform: capitalize;
        color:white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        letter-spacing: .2rem;
        text-align: center;
        text-shadow: 0 .3rem .5rem rgba(0,0,0, .5);
       }
       .video-container{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
       }
       .video-container .video{
        height: 35rem;
        width: 35rem;
        margin: 2rem;
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
    <div class="container">
        <div class="heading">Video Gallery </div>
        <div class="video-container">
            <div class="video">
                
                <video src = "images/computer1.mp4" ></video>
            </div>
            <div class="video">
                <video src = "images/computer2.mp4"></video>
            </div>
            <div class="video">
                <video src = "images/computer3.mp4" ></video>
            </div>
            <div class="video">
                <video src = "images/c1.mp4" ></video>
            </div>
            <div class="video">
                <video src = "images/cp5.mp4"  ></video>
            </div>
            <div class="video">
                <video src = "images/c1.mp4"  ></video>
            </div>
            
            </div>
        </div>
    </div>
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
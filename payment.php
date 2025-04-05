<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Mode</title>
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #ed60a2, #ff1252);
        }
        .container{
            border-radius: 15px;
            width: 750px;
            height: 500px;
            border: 1px solid;
            background-color: white;
            display: flex;
            flex-direction: column;
            padding: 40px;
            justify-content: space-around;
            
        }
        
        .container h1{
            text-align: center;
        }
        .first-row{
            display: flex;
        }
        .owner{
            width: 100%;
            margin-right: 40px;
            
        }
        .input-field{
            border: 1px solid #999;
        }
        .input-field input{
            width: 100%;
            border: none;
            outline: none;
            padding: 10px;
        }
        .selection{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .selection select{
            padding: 10px 20px;
        }
        a{
            
            color: white;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            padding: 10px;
            font-size: 18px;
            transition: 0.5s;
        }
       
        .cards img{
            width: 100px;
        }

        .container2{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-around;
        
        }
        .btn{
            padding: 10px 60px;
            background: linear-gradient(45deg, #ed60a2, #ff1252);
            border: 0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
        }
        .popup{
            width: 400px;
            height: 400px;
            background: linear-gradient(45deg, #ed60a2, #ff1252);
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
        

            
        }
        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
            
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
                padding: 30px;
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
    </style>
</head>
<body>

    
    <div class="container">
        <h1> Confirm your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>

            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password">
                </div>
            </div>
        </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Card Number</h3>
                    <div class="input-field">
                        <input type="text">
                    </div>
                </div>
            </div>

            <div class="third-row">
                <h3>Date</h3>
                <div class="selection">
                    <div class="date">
                        <select name="months" id="months">
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select>
                        <select name="years" id="years">
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>

                    <div class="cards">
                        <img src = "images/MasterCard.png" alt = " ">
                        <img src = "images/paypal.png" alt = " ">
                        <img src = "images/visa.png" alt = " ">
                    </div>
                </div>
            </div>
            <div class="container2">
                <button type="submit" class="btn" onclick="openPopup()">Confirm</button>
<a href="home.php">
 <button type="submit" class="btn" >Logout</button>
</a>
        </div>
       
            <div class="popup" id="popup">
                <img src="images/tick.png">
                <h2>Thank You!</h2>
                <p>Your details has been successfully submitted.Thanks! 
                    You can now access to our Courses. Explore them!
                 </p>
                 <a href="courses.php">
                    <button type="button" onclick="closePopup()">OK</button>
                 </a>
                
            </div>
        </div>

        <script>
            let popup = document.getElementById("popup");
            function openPopup(){
                popup.classList.add("open-popup");
            }
            function closePopup(){
                popup.classList.remove("close-popup");
            }
        </script>
    
</body>
</html>
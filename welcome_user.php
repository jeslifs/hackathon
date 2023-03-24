<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
    {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="grid.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
         body::before
        {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#f00,#f0f);
            clip-path: circle(30% at right 70%);
        }
        body::after
        {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#2196f3,#e91e63);
            clip-path: circle(50% at 10% 10%);
            z-index: -1;
        } 
    </style>
</head>
<body>  
    <div class="header">
        <a href="#" class="logo"><img src="./img/logo final.png"></a>
        <ul><?php $name= $_SESSION['uname']?>
        <li style="color:white;"><?php echo "Welcome ",ucwords($name) ?></li>
            <li><a href="#">Home</a></li>
            <li><a href="pro1.php">Promotion</a></li>
            <li><a href="finance.php">Finance</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="about_user.php">About</a></li>
        </ul>
</div>
   
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
    <div class="container">
            <div class="box glass">
                <img src="./img/bank.png">
                <p>Get affordable loans for agriculture, education…
                </p>
            </div>
            <div class="box glass">
                <img src="./img/supply-chain.png">
                <p>We help to solve problems such as labour shortages, transportation disruption </p>
            </div>
            <div class="box glass">
                <img src="./img/market.png">
                <p>we help your business to collaborate with other local businesses, provide feedbacks, Offer assistance</p>
            </div>
            <div class="box glass">
                <img src="./img/recession.png">
                <p>During the period of recession, we promote businesses, provide other assistance. </p>
            </div>
            <div class="box glass">
                <img src="./img/3.png">
                <p>Help people with their basic necessaties,Support Local Charities </p>
            </div>
            <div class="box glass">
                <img src="./img/promotion.png">
                <p>Online promotion,Host events,Offer Special Deals .</p>
            </div>
            <div class="box glass">
                <img src="./img/1.png">
                <p>Offer quality products and services,help your business to collaborate with other local businesses, other assistance.  </p>
            </div>
        </div>


</body>
</html>  
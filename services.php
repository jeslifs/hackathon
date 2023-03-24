<?php
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
                *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
            font-family:'poppins' sans-serif;
        }

        body{
            background: #000;
            min-height: 200vh;

        }

        header{
            /* position: fixed; */
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.6s;
            padding: 40px 100px;
            z-index: 100000;
        }
        header.sticky{
            padding: 5px 100px;
            background: #fff;
        }

        header .logo{
            position: relative;
            font-weight: 700;
            color:#fff;
            text-decoration: none;
            font-size: 2em;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: 0.6s;

        } 


        header ul{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        header ul li{
            position: relative;
            list-style: none;
        }

        header ul li a{
            position: relative;
            margin: 0 15px;
            text-decoration: none;
            color:#fff;
            letter-spacing: 2px;
            font-weight: 500px;
            transition:  0.6s;

        }

        /* .banner{
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(landscape.jpg);
            background-size: cover;

        } */

        header.sticky .logo,
        header.sticky ul li a{
            color:#000;
        }
    </style>
    <style>
        
    
        @import url('https://fonts.googleapis.com/css?family=poppins:200,300,400,500,600,700,800,900&display=swap');
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins' , sans-serif;
        }
        /* body
        {
            display: flex;
            justify-content: center;
            align-items:center;
            min-height: 100vh;
            background: #161623;
        } */
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
            clip-path: circle(20% at 10% 10%);
            z-index: -1;
        } 
        .container
        {
            position: relative;
            display: flex;
            margin-left:100px;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            flex-wrap: wrap;
            z-index: 1;
        }
        .container .card
        {
            position: relative;
            width: 280px;
            height: 350px;
            margin: 30px;
            box-shadow: 20px 20px 50px rgba(0, 0,0.5);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            
            justify-content: center;
            align-items: center;
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            border-left: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
        }
        .container .card img{
            margin-top: -60px;
        }
        .container .card .content
        {
            padding: 20px;
            text-align: center;
            transform: translateY(100px);
            opacity: 1;
            transition: 0.5s;
            margin-top: -50px;
        }
        .container .card:hover .content
        {
            transform: translateY(0px);
            opacity: 1;
        }
        
        
        .container .card .content h2
        {
            position: absolute;
            top: -80px;
            right: 30px;
            font-size: 8em;
            color: rgba(255, 255, 255, 0.05);
            pointer-events: none;
        
        
        }
        .container .card .content h3
        {
        font-size: 1.8em;
        color: #fff;
        z-index: 1;
        }
        .container .card .content p
        {
            font-size: 1em;
            color: #fff;
            font-weight: 300;
        }
        .container .card .content a
        {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            margin-top: 15px;
            background: #fff;
            color: #000;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 500;
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.02);
        }
        </style>
</head>
<body style="color:white;">  
    <div class="header">
        <a href="index.html" class="logo"><img src="./img/logo final.png"></a>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.php">Sign-in</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </div>
    <!-- <section class="banner"></section> -->
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
        <div class="container">
            <?php
            require "configure.php";
            $sql="SELECT `cid`, `company_name`, `description`, `location`, `owner_name`, `mobile`, `emails`, `image` FROM `market` WHERE 1";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
            echo '<div class="card">
                <div class="content">
                    <img src="./images/'.$row["image"].'" style="width:100px; height:100px;">
                    <h2>000</h2>
                    <h3>'.$row["company_name"].'</h3>
                        <h4>'.$row["location"].'</h4>
                        <p> '.$row["description"].'</p>
                        <h4 >'.$row["owner_name"].'</h4>
                        <h4>Ph.No. '.$row["mobile"].'</h4>
                        <a href="mailto:'.$row["emails"].'">Mail</a>
                </div>
            </div>';
            };?>
        
 
    <form>

    </form>
</body>
</html>  
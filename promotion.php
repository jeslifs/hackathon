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
            position: fixed;
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

        .banner{
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(landscape.jpg);
            background-size: cover;

        }

        header.sticky .logo,
        header.sticky ul li a{
            color:#000;
        }
    </style>
</head>
<body style="color:white;">  
    <header>
        <a href="#" class="logo">Logo</a>
        
        <ul>
            <li><a href="welcome_user.php">Home</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </header>
    <section class="banner"></section>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
    <form>

    </form>
</body>
</html>  
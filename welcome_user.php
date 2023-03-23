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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>  
    <header>
        <a href="#" class="logo">Logo</a>
        <ul><?php $name= $_SESSION['uname']?>
        <li><?php echo "Welcome ",ucwords($name) ?></li>
            <li><a href="#">Home</a></li>
            <li><a href="promotion.php">Promotion</a></li>
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
</body>
</html>  
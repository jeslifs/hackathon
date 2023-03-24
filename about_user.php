<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="grid.css">
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
            clip-path: circle(20% at 10% 10%);
            z-index: -1;
        } 

        .container{
    position: relative;
    width: 100%;
    min-height: 100vh;
    display:flex;
    justify-content: center;
    align-items: center;
    background: #333;
    transition: 0.5s;
    padding: 20px;
}

.container#blur.active{
    filter: blur(20px);
    pointer-events: none;
    user-select: none;

}


.container .content{
    position: relative;
    max-width: 800px;

}

h2{
    font-weight: 600;
    margin-bottom: 10px;
    color:#333;
}

.container .content img{
    max-width: 100%;
    display: block;
}

a{
    position: relative;
    padding:  5px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    color:#fff;

}

#popup{
    position:fixed;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 600px;
    padding: 50px;
    box-shadow: 0 5px 30px rgba(0, 0, 0, .30);
    background: #fff;
    visibility: hidden;
    opacity: 0;
    transition: 0.5s;

}

#popup.active{
    visibility: visible;
    opacity: 1;
    transition: 0.5s;
}
    </style>
</head>
<body>  
    <div class="header">
        <a href="welcome_user.php" class="logo"><img src="./img/logo final.png"></a>
        <ul>
            <li><a href="welcome_user.php">Home</a></li>
            <li><a href="servicer_custom.php">Services</a></li>
            <li><a href="pro1.php">Promotion</a></li>
            <li><a href="finance_user.php">Finance</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <section class=""></section>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
    <br>
    <div class="container" id="blur">
        <div class="content">
            <h2 style="color:white;">
                The global pandemic had a devastating effect on small-sized businesses, leaving many struggling to survive. 
                To help these businesses during this difficult time, this website have been created as a platform to give suggestion for suitable loans and promtote their local markets.
                This website play an essential role in supporting small business owners during this crisis.
                
                
                
                
                </h2>
            
            <a href="#" style="background: #000;" onclick="toggle()">Developers</a>
        </div>    
    </div>
    <div id="popup">
        <center><h2>For Support Contact</h2>
        <p>Joyfree</p><br>
        <p>Duval</p><br>
        <p>Jeslif</p></center>
        <a href="#" style="background: #000;" onclick="toggle()">Close</a>
    </div>
    <script type="text/javascript">
        function toggle() {
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup');
            popup.classList.toggle('active')
        }
    </script>

        
</body>
</html>  
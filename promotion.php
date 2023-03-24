
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="main.css"> -->
    

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

.header{
    /* position: ; */
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.6s;
    padding: 40px 100px;
    z-index: 1;
}
.header.sticky{
    padding: 5px 100px;
    background: #fff;
}

.header .logo{
    position: relative;
    font-weight: 700;
    color:#fff;
    text-decoration: none;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.6s;

} 


.header ul{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;

}

.header ul li{
    position: relative;
    list-style: none;
}

.header ul li a{
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

.header.sticky .logo,
.header.sticky ul li a{
    color:#000;
}
	</style>
        <!-- <style>
         
        body{
            background-color: #333;
        }
		
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f2f2f2;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
		}
		
		h1 {
			text-align: center;
		}
		
		input[type=text], input[type=email], input[type=tel], textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
			font-size: 16px;
			font-family: Arial, sans-serif;
			margin-bottom: 10px;
		}
		
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}
		
		input[type=submit]:hover {
			background-color: #45a049;
		}
		
		img {
			max-width: 100%;
			height: auto;
			margin-bottom: 10px;
		}
		
		@media only screen and (max-width: 600px) {
			form {
				max-width: 100%;
			}
		} -->
        <style>

        </style> 
        <link rel="stylesheet" href="main.css">

        
</head>
<body style="background-color:black;">  
    <div calss="header">
        <a href="#" class="logo"><img src="./img/logo final.png"></a>
        
        <ul>
            <li><a href="welcome_user.php">Home</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>

	
	


<!--  
	<form action="" method="post" enctype="multipart/form-data">
		<h1>Company Information</h1>
		<label for="companyname">Company Name</label>
		<input type="text" id="companyname" name="companyname" placeholder="Enter company name" required>
		
		<label for="location">Location</label>
		<input type="text" id="location" name="location" placeholder="Enter company location" required>
		
		<label for="description">Description</label>
		<textarea id="description" name="description" placeholder="Enter company description" required></textarea>

        <br><label>Owner Name</label>
        <input type="text" name="ownername"><br>
		
		<br><label for="mobile">Mobile Number</label>
		<input type="text" id="mobile" name="mobile" placeholder="Enter mobile number"><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <br><label>File Upload</label>
        <input type="file" name="file"><br>

        <br><input type="submit" name="submit">

    </form> -->

    <!-- <section class="banner"></section> -->
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>
</body>
</html> 
<?php
    require "configure.php";
    $text =  "";
    $text_err = "";
  


      if (isset($_POST["submit"]))
        {
            $companyname  = $_POST["companyname"];
            $location  = $_POST["location"];
            $description  = $_POST["description"];
            
            $mobile  = trim( $_POST["mobile"]);
            // $companyname  = $_POST["companyname"];
            $ownername  = $_POST["ownername"];


        $text=$_FILES["file"]["tmp_name"];
        echo "\ntext ".$text;
        $text=$_FILES["file"]["name"];
            echo "\ntext ".$text;
        #retrieve file email
        $email = $_POST["email"];
        echo "\nemail ".$email;
        #file name with a random number so that similar dont get replaced
        $pname = rand(1000,10000)."-".$text;
        echo "\npname ".$pname;
        #temporary file name to store file
        $tname = $_FILES["file"]["tmp_name"];
        echo "\ntname ".$tname;
        #upload directory path
        $uploads_dir = 'images';
        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);


        #sql query to insert into database
        $sql1 = "INSERT INTO `market`( `company_name`, `description`, `location`, `owner_name`, `mobile`, `emails`,image) VALUES ('$companyname ','$description','$location','$ownername','$mobile','$email','$pname')";
        mysqli_query($conn,$sql1);
        $s="SELECT MAX(cid) FROM `market` WHERE 1";
        $result=mysqli_query($conn,$s);
        while($row=mysqli_fetch_assoc($result))
        {
            $maxcid=$row['MAX(cid)'];
        }
    //     echo "check2";
    //     $sql = "INSERT into fileup(emails,image,c_id) VALUES('$email','$pname','$maxcid')";
    //     if(mysqli_query($conn,$sql)){
    //     echo "File Sucessfully uploaded";
    //     header("location:welcome_user.php");
    // }
    //     else{
    //     echo "Error";
    //     }
        }
  
      
 ?> 
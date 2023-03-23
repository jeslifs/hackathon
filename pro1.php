<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
		}
    </style>
</head>
<body>  
    <div class="header">
        <a href="#" class="logo">Logo</a>
        
        <ul>
            <li><a href="welcome_user.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="finance.php">Finance</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>

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

    </form> 

</body>
</html>
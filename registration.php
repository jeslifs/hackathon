<?php
require_once "configure.php";
    $username = $password = $email = "";
    $username_err = $password_err = $email_err = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //check if username is empty
        if(empty(trim($_POST['username']))&&(empty(trim($_POST['email']))))
        {
            $username_err='Username cannot be blank';
            $email_err='Email cannot be blank';
        }
        else
        {
            $sql="SELECT `uid` FROM `users` WHERE `uname` = ?";
            // $sql="SELECT id FROM users WHERE username = ?";
            $stmt=mysqli_prepare($conn,$sql);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                //set the value of param username
                $param_username=trim($_POST['username']);

                //try execute this statement
                if(mysqli_stmt_execute($stmt))
                {
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt)==1)
                    {
                        $username_err="This username is already taken";
                    }
                    else
                    {
                        $username=trim($_POST['username']);
                    }
                }
                else
                {
                    echo "Something went wrong.";
                }
            }
        }
        
    
    //check for password
    if(empty(trim($_POST['password'])))
    {
        $password_err='Password cannot be blanked';
    }
    elseif(strlen(trim($_POST['password']))<5)
    {
        $password_err="Password cannot be less than 5 character";
    }
    else
    {
        $password=trim($_POST['password']);
        echo $password;
    }

    // email
    if(empty(trim($_POST['email'])))
    {
        $eamil_err='Email cannot be blanked';
    }
    elseif(strlen(trim($_POST['password']))<5)
    {
        $eamil_err="Password cannot be less than 5 character";
    }
    else
    {
        $email=trim($_POST['email']);
        echo $email;
    }


    

    //if no errors insert into database
    if(empty($username_err)&& empty($password_err)&& empty($eamil_err))
    {    
        $sql="INSERT INTO `users`(`uname`, `pass`, `email`) VALUES (?,?,?)";     
        $stmt=mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);

            //set the parameters
            $param_username=$username;
            $param_password=$password;
            $param_email=$email;

            //try to execute the query
            if(mysqli_stmt_execute($stmt))
            {
                header("location:login.php");
            }
            else
            {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
?>

<html>
    <head>
        <title>Jesus's Clinic</title>
        <link rel="icon" href="logos.ico">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-box">
            <h2>Register</h2>
            <form action="" method="post">
              
              <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
              </div>
              <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
              </div>
              <div class="user-box">
                <input type="email" name="email" required="">
                <label>Email</label>
              </div>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input id="login_but" type="submit" value="submit">
              </a>
            </form>
          </div>
    </body>
</html>
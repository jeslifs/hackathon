<?php
  //handle login
  session_start();

  //check if user is already is logged in
  if(isset($_SESSION['username']))
  {
    header("localtion:welcome_user.html");
    exit;
  }
  require_once "configure.php";
  $username = $password = "";
  $username_err = $password_err = "";

  //request method is post
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty(trim($_POST['username'])))
    {
      $username_err="Please Enter Your Username";
    }
    elseif(empty(trim($_POST['password'])))
    {
      $password_err="Please Enter Your Password";
    }
    else
    {
      $username=trim($_POST['username']);
      $password=trim($_POST['password']);
    }

    if(empty($username_err && $password_err))
    {
      $sql="SELECT uid, uname, pass FROM users WHERE uname = ?";
      $stmt=mysqli_prepare($conn,$sql);
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username=$username;

      //try to execute this statemment
      if(mysqli_stmt_execute($stmt))
      {
        
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt)==1)
        {
          
          mysqli_stmt_bind_result($stmt,$id,$username,$hasded_password);
          if(mysqli_stmt_fetch($stmt))
          {
            echo $password ;
            echo $hasded_password;
            if($password == $hasded_password)
            {
              //the password is correct.allow user to login

              session_start();
              $_SESSION["uname"]=$username;
              $_SESSION["uid"]=$id;
              $_SESSION["loggedin"]=true;

              //redirect user to welcome_doctor page
              header("location:welcome_user.php");
            }
            
          }
        }
      }

    }
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
            <h2>Login</h2>
            <form action="" method="post">
               
              <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
              </div>
              <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
              </div>
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input id="login_but" type="submit" value="submit"><a href="registration.php">Sign-up</a>
              </a>
            </form>
          </div>
    </body>
</html>
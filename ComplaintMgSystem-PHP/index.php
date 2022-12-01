<?php
  include "config.php";
  session_start();
  if(isset($_SESSION['email'])===true){
           header("Location: profile.php");
      }  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPMS  </title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body >

    <div class="animated fadeIn">
    <div class="cover user text-center">
    <h1  class=" heading" style="color:#fff;font: size 3rem;"> Complaint Management System</h1>
      <svg fill="#fff" height="148" viewBox="0 0 24 24" width="148" xmlns="http://www.w3.org/2000/svg" class="shad">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M5 16c0 3.87 3.13 7 7 7s7-3.13 7-7v-4H5v4zM16.12 4.37l2.1-2.1-.82-.83-2.3 2.31C14.16 3.28 13.12 3 12 3s-2.16.28-3.09.75L6.6 1.44l-.82.83 2.1 2.1C6.14 5.64 5 7.68 5 10v1h14v-1c0-2.32-1.14-4.36-2.88-5.63zM9 9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm6 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
      </svg><br>
      <h4>USER LOGIN</h4>
    </div>
    </div>
      <div class="padd">
         <div class="col-lg-12 text-center">
          <!--form -->
              <form class="" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                <label for="username"></label>
                <input type="email" name="email" placeholder="Email" id="email">
                <br><br>
                <label for="password"></label>
                <input type="password" name="password" placeholder="Password" id="pass">
                <br><br>
                <button type="submit"  name="submit" class="log">Login</button>
                <br><br>
                Don't have an acccount ? <a href="signup.php">Sign Up  </a>
              </form>
             
              <!--form  end-->
              <!--code to connect the form using php-->

              <?php
                      if(isset($_POST['submit'])){
                            include "config.php";
                            if(empty($_POST['email']) || empty($_POST['password'])){
                              echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                              die();
                            }else{
                              $email = mysqli_real_escape_string($conn, $_POST['email']);
                              $password = mysqli_real_escape_string($conn, $_POST['password']);
                              $sql = "SELECT * FROM `user` WHERE id AND email='$email' and password='$password'";

                              $result = mysqli_query($conn, $sql) or die("Query Failed.");

                              if(mysqli_num_rows($result) > 0){
                                 $_SESSION['email'] = $_REQUEST['email'];
                                 header('Location: profile.php');
                                }else{
                                  echo "Your username or password is incorrect";
                                    
                                 }
                             }
                            }
                        ?>              <br>
        </div>
      </div>

      <div class="links">
        <a href="admin-login.php">Admin </a>
      </div>
    </div>
    <?php
        include 'core/jsscript.php';
    ?>
  </body>
</html>

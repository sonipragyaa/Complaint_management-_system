<?php

 
 session_start();
 include_once 'config.php';
 if(isset($_POST['submit']))
 {	 
    $name = $_POST['name'];
      $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
      
    $sql = "INSERT INTO user (name,username,email,password)
    VALUES ('$name','$username','$email','$password')";
    if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
    } else {
     echo "Error: " . $sql . "
 " . mysqli_error($conn);
    }
    mysqli_close($conn);
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
  </head>
  <body>

    <div class="animated fadeIn">


    <div class="cover user text-center">
      <svg fill="#fff" height="148" viewBox="0 0 24 24" width="148" xmlns="http://www.w3.org/2000/svg" class="shad">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M5 16c0 3.87 3.13 7 7 7s7-3.13 7-7v-4H5v4zM16.12 4.37l2.1-2.1-.82-.83-2.3 2.31C14.16 3.28 13.12 3 12 3s-2.16.28-3.09.75L6.6 1.44l-.82.83 2.1 2.1C6.14 5.64 5 7.68 5 10v1h14v-1c0-2.32-1.14-4.36-2.88-5.63zM9 9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm6 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
      </svg>
      <br>
      <h2>Sign Up</h2>
    </div>

      <div class="padd">
        <div class="col-lg-12 text-center">
              <form class="" method="post" autocomplete="off" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input type="text" name="name" placeholder="Your Name">
                <br><br>
                <input type="text" name="username" placeholder="Your Username">
                <br><br>
                <input type="text" name="email" placeholder="Your Email">
                <br><br>
                <input type="password" name="password" placeholder="Password">
                <br><br>
             
                <br>
                <button type="submit"  name="submit" class="log">Sign Up</button>
                <br><br>
              </form>
              <!--form complete-->
            
              
              <br>Already have an acccount ? <a href="index.php">Login  </a>
        </div>
      </div>
      <!-- <div class="links">
        <a href="index.php">Home </a>
      </div> -->
  </div>

    <script src="files/js/jquery.js"></script>
    <script src="files/js/bootstrap.min.js"></script>
    <script src="files/js/script.js"></script>

  </body>
</html>

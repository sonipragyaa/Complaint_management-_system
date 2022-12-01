<?php
  // require '../core/session.php';
  require 'config.php';
  // require '../core/admin-key.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPMS  </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

  <?php require 'nav.php'; ?>
  <div class="animated fadeIn">


  <div class="cover main">
    <h1>User Data</h1>
  </div>
    <!--Users client-->
    <div class="div">
        <div class="col-lg-12 ">
          <?php
            $result = mysqli_query($conn,"SELECT * FROM `user`");
             $num_rows = mysqli_num_rows($result);
          ?>
              <div class='admin-data'>
                Registered User
                <span class='button view' href=''><?php echo "$num_rows";?></a>
              </div><br><br><br><br><br>
          <?php
           $db=mysqli_query($conn,"SELECT * FROM `user` ");
            while($data=mysqli_fetch_array($db)) {
            echo"<div class='admin-data'>";
            echo $data['name'];
            echo "<a class='button view' href='user_data.php?id=$data[id]'>View</a>";
            echo "</div>";
           }
          ?>
        </div>

        <div class="baro"></div>
      </div>
    

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>

  </body>
</html>

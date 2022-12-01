<?php
 
  
  //session_start();
   require 'config.php';
   
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
    <h1>Messages</h1>
  </div>

    <div class="div">
        <div class="col-lg-12 ">
          <?php $result = mysqli_query($conn,"SELECT * FROM `cmp_log`");
            $num_rows = mysqli_num_rows($result);
            ?>
             <div class='admin-data'>
                 Messages
                <span class='button view' href=''><?php echo "$num_rows";?></a>
               </div>
               <br><br><br><br>
               <br><br>

               <br>
               <h2 class="text-center"></h2>
               <br><br>

          <?php

            while($data=mysqli_fetch_array($result)) {
            echo"<div class='admin-data'>";
            echo $data['name'];
           
           // $empty=$data['name'];
            echo "<a class='button view' href='message-view.php?id=$data[id]'>View</a>";
            echo "</div>";

          }
           ?>
         

          <br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>

  </div>
    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>

  </body>
</html>

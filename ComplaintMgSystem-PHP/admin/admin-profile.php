<?php
   require 'config.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPMS  </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="custom.css">
    <script src="../files/js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body >

  <?php require 'nav.php'; ?>

  <div class="animated fadeIn">
    <div class="cover main">
      <?php
     if (isset($_SESSION['username'])===true)
      {echo "<h1 class> Welcome , ".$_SESSION['username']."</h1>";}
       ?>
       
       &nbsp;&nbsp;&nbsp;
       <p class="text-right">
          <?php echo date("l, d M"); ?>
       </p>
    </div>
    <div class="div ">
      <div class="col-lg-12">
          <div class="analysis">
            <?php
               $admin = mysqli_query($conn,"SELECT * FROM `admin`");
               $count_admin = mysqli_num_rows($admin);

               $users = mysqli_query($conn,"SELECT * FROM `user`");
               $count_users = mysqli_num_rows($users);

               $cmp = mysqli_query($conn,"SELECT * FROM `cmp_log`");
               $count_cmp = mysqli_num_rows($cmp);

               $forward = mysqli_query($conn,"SELECT * FROM `view_cmp`");
               $count_forward = mysqli_num_rows($forward);
            ?>
            <div class="track theme">
                Total Users <br> <p><?php echo $count_users;?></p>
            </div>
            <div class="track vio">
                Admin <br> <p><?php echo $count_admin;?></p>
            </div> 
            <div class="track red">
                Complaints <br> <p><?php echo $count_cmp;?></p>
            </div>
            <div class="track blue">
                Forwarded <br> <p><?php echo $count_forward;?></p>
            </div>
          </div>
          <div class="textbox">
          <br><br>
            <?php

             $query1=mysqli_query($conn,"SELECT * FROM `user` ORDER BY id DESC LIMIT 1 ");
             $name=mysqli_fetch_array($query1);
             $new_user=$name['name'];

             $query2=mysqli_query($conn,"SELECT * FROM `cmp_log` ORDER BY id DESC LIMIT 1 ");
             $name1=mysqli_fetch_array($query2);
             $new_msg=$name1['name'];
             ?>
             <div class="content ">
               <div class="div_data ">New User</div>
               <div class="div_data ">New Message From</div>
               <!-- <div class="div_data">New sub-admin </div> -->
             </div>
              <div class="div_data vio">
                    <span><?php echo $new_user; ?></span>
              </div>
              <div class="div_data blue">
                    <span><?php echo $new_msg; ?></span>
              </div>
          </div>
      </div>
      </div>
    </div>
  </div>
    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>
    <script>
    $(document).ready(function(){
        $("#close").click(function(){
            $("#msg").remove();
        });
    });
  </script>


  </body>
</html>

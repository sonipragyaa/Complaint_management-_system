<?php
   session_start();
    require 'config.php';
   // include 'core/user_key.php';
    //for session
    $session=$_SESSION['email'];
    $ref = rand (3858558,100000);$error = "";$message = "";$alpha="M y a p p ";
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
    <style media="screen">
    table{border: 0px;}
    td{
      padding:10px;
      border-top: 0px solid #eee;
      border-bottom: 0px solid #eee!important;
      padding-left: 0px;
      color:#0ea798;
    }
    input,button.log{width: 450px;}
    </style>
  </head>
  <body>
    <div class="cover user text-center" style="height:120px;">
      <br>
      <h2>Add Complaints</h2>
    </div>
    <?php require 'nav-profile.php'; ?>
    <div class="animated fadeIn">
      <div class="padd">
        <div class="col-lg-12 text-center">
            <?php
           // include 'config.php';
            include 'config.php';
            $sql1="SELECT * FROM `user` WHERE email LIKE '%$session%'";
            $result = mysqli_query($conn,$sql1) or die("query unsuccessfull");
            if(mysqli_num_rows($result)>0){
  
              while($row= mysqli_fetch_assoc($result)) {
                
           
              $id=$row['id'];
              $name=$row['name'];
              $username=$row['username'];
              $email = $row['email'];
              }}
                   if(empty($_POST)===false){
                     $phoneno =mysqli_real_escape_string($conn,$_POST['phoneno']);
                     $subject = mysqli_real_escape_string($conn,$_POST['subject']);
                     $complain = mysqli_real_escape_string($conn,$_POST['complain']);
                     if(empty($phoneno) || empty($subject) || empty($complain)){
                     }elseif (!preg_match("/^[0-9]*$/",$phoneno)) {
                       $error = "Invalid Phone Number";
                     }else{
                      $query="INSERT INTO `cmp_log` VALUES ('0','$id','$name','$username','$email','$phoneno','$subject','$complain','$ref')" or die(mysql_error());
                       mysqli_query($conn,$query);
                       $message = "Your Complain has been Registerd";
                       }
                   }
                  
              ?>
              <!---->
               <!-- <?php
          include 'config.php';
          $sql1="SELECT * FROM `user` WHERE email LIKE '%$session%'";
          $result = mysqli_query($conn,$sql1) or die("query unsuccessfull");
          if(mysqli_num_rows($result)>0){

            while($row= mysqli_fetch_assoc($result)) {
              ?> -->
              <form class="" method="post" autocomplete="off">
             <div class="container">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <h2>Your Refference no : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ref;
                   
                      ?></h2>
                  </div>
              </div>
              <table>
                <tr>
                  <td class="text-left">Your Refference no</td>
           
                  <td><input type = "refid" name = "refid" placeholder = "<?php echo $ref;  ?>"> </td>
                </tr>
                <tr>
                  <td class="text-left">Your Username</td>
                  <td><input type = "name" name = "username" placeholder = "<?php  echo $row['username'];?>">  </td>
                </tr>
                <tr>
                  <td class="text-left">Your User ID</td>
                  <td><input type = "id" name = "id" placeholder = "<?php  echo $row['id'];?>">  </td>
                </tr>
                <tr>
                  <td class="text-left">Your Your Email ID</td>
                  <!-- <td class="text-left"><div class="dis_b"><?php echo $email;?></div></td> -->
                  <td><input type = "email" name = "email" placeholder = "<?php  echo $row['email'];?>">  </td>
                </tr>
                <?php
            }}
                ?>
                <tr>
                  <td class="text-left">Your Contact Number *</td>
                  <td><input type = "text" name = "phoneno" maxlength=10 placeholder = "Your Phone number">  </td>
                </tr>
                <tr>
                  <td class="text-left">Your Subject *</td>
                  <td><input type="text" name = "subject" placeholder = "Subject"></td>
                </tr>
                <tr>
                  <td class="text-left">Your Complain *</td>
                  <td><textarea name="complain" rows="8" cols="80" placeholder="Your complain"></textarea></td>
                </tr>
                <tr><td></td><td></td></tr>
                <tr>
                  <td></td>
                  <td><button type="submit" class="log">Submit</button></td>
                </tr>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
      <footer>
          <?php
          include 'footer.php';

          ?>
      </footer>
    <script src="files/js/jquery.js"></script>
    <script src="files/js/bootstrap.min.js"></script>
    <script src="files/js/script.js"></script>
  </body>
</html>

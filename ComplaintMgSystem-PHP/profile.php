<?php
 require 'config.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPMS</title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      /*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX HACK */
input[type=checkbox]{
 display: none;
} 
/*HAMBURGER MENU*/
.hamburger {
 display: none;
 font-size: 24px;
 user-select: none;
}
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}

/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
.hamburger {
 display: block;
}
.nav-links .menu{
  display:none;
  position: relative;

}
}</style>
  </head>
  <body>
      <div class="cover">
        <nav class="nav_u">
          <ul class="nav-links">
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <li><a  class="menu" href="profile.php">Home</a></li>
            <li><a class="menu"  href="message.php">Add Complaints</a></li>
          <li><a  class="menu" href="logout.php" onClick="javascript:return confirm ('Are you really want to delete ?');">Logout</a></li>
          </ul>
        </nav>
        <!-- <p class="text-left ">
        <img src="files/img/logo.png" alt="" width="70px" height="70px"> -->

        <p class="text-right pdd">
        <!-- <img src="files/img/logo.png" alt="" width="70px" height="70px"> -->
           <?php echo date("d M , l "); ?>
        </p>
      </div>

  <div class="animated fadeIn">
          <div class="content">
            <div class="container">
            
                  <div class="col-lg-12">

                      <h2 class="text"><b>How to complain?</b></h2>
                      <br><br><br>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>First</h3>
                            <p>You can complain directly with us you have been dealing with.  Complaints are often sorted out immediately this way.</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Second</h3>
                            <p>If you don’t know who to contact, or you have a name but no telephone number, then call our enquiries team on 18XX XXX XXX</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Third</h3>
                            <p>The Best way to complain you can use our online complaints form.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                        </div>
                      </div>
                      
            <div class="col-lg-12"><br>
                      <br>
                  <div class="jumbotron india_cover"></div>
            </div>
          </div>
        </div>
      </div>
                <?php
                include 'footer.php';
                ?>
  <?php include 'core/jsscript.php'; ?>
  </body>
</html>

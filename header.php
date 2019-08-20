<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Reading Books</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery_1.3.2.js"></script>
    <script type="text/javascript" src="js/jqueryui.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- ENDS JS -->
    <!-- superfish -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" />
    <script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
    <!-- ENDS superfish -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/spring.css" type="text/css" media="screen" />

<!--[if IE 6]>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
<script>/* EXAMPLE */ DD_belatedPNG.fix('*');</script>
<![endif]-->
<!-- ENDS CSS -->
<!-- Cufon -->
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/bebas_400.font.js" type="text/javascript"></script>
<script type="text/javascript">Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });</script>
<!-- /Cufon -->
</head>
<body>
    <!-- WRAPPER -->
    <div id="wrapper">    
      <!-- navigation -->
      <ul id="nav" class="sf-menu">    
          <li class="custom"><a href="contact.php">CONTACT</a></li>
          <li class="custom"><a href="about.php">ABOUT</a></li>
          <li class="custom"><a href="gallery.php">GALLERY</a></li>          
          <li class="custom"><a href="index.php">HOME</a>
    </ul>
<!-- ENDS navigation -->
<!-- HEADER -->
<div id="header"> <a href="index.php"><img src="img/logo.png" alt="" id="logo" /></a> <img src="img/nav-arrow.png" alt="" id="arrow" class="arrow-home" />
  <div class="login-form">
          <?php if(!isset($_SESSION['session_id']))
                {
          ?>             
                <!-- Large modal -->
                <button class="btn btn-primary login-btn" data-toggle="modal" data-target="#myModal">SignIn/SignUp</button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Login/Registration</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="Login">
                                                <form role="form" class="form-horizontal" method="post">
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">
                                                        Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="email1" placeholder="Email" name="email"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                                        Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            SignIn</button>
                                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">
                                                        Cancel</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="Registration">
                                                <form role="form" class="form-horizontal" method="post">
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">
                                                        Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="Name" name="signup_name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">
                                                        Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="email" placeholder="Email" name="signup_email"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-sm-2 control-label">
                                                        Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="password" placeholder="Password" name="signup_password"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="submit" class="btn btn-primary btn-sm" name="signup" />
                                                            
                                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">
                                                            Cancel</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
            }
            else
            {
                ?>                  
                <div class="dropdown user-btn">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="login-btn">Logout</a></li>
                  </ul>
                </div>            
            <?php } ?>    
          </div>
          </div>
          <!-- ENDS HEADER -->
          
          <?php
        include ('connection.php');
        if(isset($_POST))
        {
            if(!empty($_POST['email']) && !empty($_POST['password']))
            {        
                
                $u = $_POST['email'];
           	    $p = md5($_POST['password']);
                $sql = mysqli_query($conn,"SELECT email, pass FROM users WHERE email = '$u' AND  pass = '$p'");
                $row = mysqli_fetch_assoc($sql);
            	if($u == $row['email'] && $p == $row['pass'])
            	{
            	   $_SESSION['session_id'] = session_id();
                   echo "<meta http-equiv='refresh' content='0'>";                   
                }
                else
                {
                    echo '
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Vaild Username and Password.
                    </div>';
                }                
             }
        }
        if(isset($_POST))
        {
            if(!empty($_POST['signup_name']) && !empty($_POST['signup_email']) && !empty($_POST['signup_password']))
            {
                $name=$_POST['signup_name'];
                $email=$_POST['signup_email'];
                $password=md5($_POST['signup_password']);
                $sql = "INSERT INTO users (name,email,pass) VALUES ('$name','$email','$password')";
                mysqli_query($conn, $sql);
            }
        } 
        ?>
        		
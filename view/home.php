<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<<<<<<< HEAD
    <script type="text/javascript" src="../js/sign_up.js"></script>
=======
>>>>>>> b93f34f95caa397bdede4654c196dbe155b67a0e
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="logo">
                    <img src="../images/image1.jpg" alt="mytruck">
                    <span>my truck</span>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="form">
<<<<<<< HEAD
=======
        <?php
         if(isset($_GET['type'])){
          if($_GET['type'] == "code_error"){
            echo '<p style="color: whitesmoke;text-align: center;font-family: monospace;">Code Expired!Signup or Login Again</p>';
         }
         
       } ?>
>>>>>>> b93f34f95caa397bdede4654c196dbe155b67a0e
                <ul class="tab-group">
                    <li class="tab active"><a href="#signup">Sign Up</a></li>
                    <li class="tab"><a href="login.php">Log In</a></li>
                </ul>
                  <?php 
        if(isset($_GET['type'])){
          if($_GET['type'] == "login_error"){
            echo '<p style="color: whitesmoke;text-align: center;font-family: monospace;">Already Exist!Go To Login</p>';
         }
<<<<<<< HEAD
=======

>>>>>>> b93f34f95caa397bdede4654c196dbe155b67a0e
       } 
       ?>
                <div id="signup">
                   <form method="post">
                       <div class="field-wrap">
                           <input type="text/css" class="form-control" name="Name" placeholder="Name" required>
                           <br>
                       </div>
                       <div class="field-wrap">
                           <div class="input-group">
                               <span class="input-group-addon">+91</span>
<<<<<<< HEAD
                               <input  type="text" onkeypress="return isNumber(event)" class="form-control" name="Mobile Number" placeholder="Mobile Number" maxlength="10" required autofocus>
=======
                               <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number" maxlength="10" required>
>>>>>>> b93f34f95caa397bdede4654c196dbe155b67a0e
                               <br>
                           </div>
                       </div>
                       <button type="submit" name="submit" value="signup" class="button button-block"  formaction="../controllers/signup_controllers.php">Signup</button>
                   </form>
                </div>
        </div>
    </div>
</body>

</html>
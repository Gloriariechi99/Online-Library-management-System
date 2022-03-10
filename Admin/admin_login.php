
<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <style type="text/css">
      *{
        font-size: 15px;
  
      }
      .section3{
        margin: 20px auto;
      }
    </style>
</head>
<body>

<br>
    <section class="container-fluid section3">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="container1" action="admin_login.php" method="post">
                    <div class="mb-3">
                        <label class="text-center"><span>Login</span></label>
                        <br>
                        <br>
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <label class="float-end"><a href="updatePassword.php">Forgot Password?</a></label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                      <button type="submit" name="submit" value="submit" class="btn btn-primary float-end">Login</button>
                     </div>
                     <br>
                     <p>Don't have an account?<a href="registration.php">Create One</a></p>
                    
                  </form>
            </section>
        </section>
    </section>

  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username']; 

        ?>
          <script type="text/javascript">
            window.location="index1.php"
          </script>
        <?php
      }
    }

  ?>

</body>
</html>
<?php
include "connection.php";
include "navbar.php";



if (isset($_POST['submit'])){

    $usename = $_POST["username"];
    $password = $_POST["password"];
    $count=0;

    $sql = "SELECT * FROM `names` WHERE username='$usename' && password='$password'";
    $result = mysqli_query($db,$sql);

    $count = mysqli_num_rows($result);
    if($count==0){

        ?>
        <script type="text/javascript">
            alert("The username and password do not match");
        </script>
         <?php
    }
   
    else{
        $_SESSION['login_user'] = $usename;
        header(header: "location:index1.php");
    }


}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style1.css">


    <title>Student Login</title>
    <style type="text/css">
    *{
        font-size: 15px;
    }
    .box2{
        height: 300px;
        margin: 50px;
    
    }
    nav{
        float: right;
    }
    </style>
</head>

<body>
    <section class="container-fluid box2">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="container1" action="student_login.php" method="post">
                    <div class="mb-3">
                        <label class="text-center"><span>Login</span></label>
                        <br>
                        <br>
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <label class="float-end"><a href="update_password.php">Forgot Password?</a></label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                      <button type="submit" name="submit" value="submit" class="btn btn-primary float-end">Login</button>
                     </div>
                     <br>
                     <p>Don't have an account?<a href="signUp.php">Create One</a></p>
                    
                  </form>
            </section>
        </section>
    </section>
    <?php
    include "footer.php";
    ?>
</body>
</html>
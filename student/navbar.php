<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<header>
            <div class="logo">
                <br>
                <h1 class="text-white">DREAMERS LIBRARY</h1> 
            </div>
            <nav >
                <ul >
                    <li><a href="index1.php" class="text-white text-decoration-none"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="books.php" class="text-white text-decoration-none"><i class="fa fa-book"></i>Books</a></li>
                    <li><a href="feedback.php" class="text-white text-decoration-none"><i class="fa fa-comment"></i>Feedback</a></li>                    
                </ul>

                <?php
            if(isset($_SESSION['login_user']))
            {?>
            <ul >
              <li><a href="profile.php">PROFILE</a></li>
            </ul>

                <ul>
                  <li><a href="">
                    <div style="color: white">
                      <?php
                        // echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['image']."'>";
                        //  echo $_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">LOGOUT</span></a></li>
                </ul>
                
              <?php
            }
            else{
            ?>
            
              <ul>

                <li class="float-right"><a href="student_login.php"><span class="glyphicon glyphicon-log-in">LOGIN</span></a></li>
                
                <li><a href="signUp.php"><span class="glyphicon glyphicon-user">SIGN-UP</span></a></li>
              </ul>
             
                <?php
            }
          ?>

          

      </div>
    </nav>
        </header>
    
</body>
</html>
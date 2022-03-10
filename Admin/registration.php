<?php
  include "connection.php";
  include "navbar.php";  
  
         
       if(isset($_POST['submit'])){
  
          $firstName = $_POST["firstName"];
          $lastName = $_POST["lastName"];
          $username = $_POST["username"];
          $emailAddress = $_POST["emailAddress"];
          $roll = $_POST["roll"];
          $contact = $_POST["contact"];
          $password = $_POST["password"];
          $confirmPassword = $_POST["confirmPassword"];
          
  
          $count = 0;
          $sql = "SELECT username FROM `names`";
          $res = mysqli_query($db,$sql);
  
          while($row=mysqli_fetch_assoc($res)){
              if($row['username']==$_POST['username']){
                  $count=$count+1;
              }
          }
          if($count==0){
           $sql = "INSERT INTO `admin`(`firstName`, `lastName`, `username`, `emailAddress`, `roll`, `contact`, `password`, `confirmPassword`, `image`) 
           VALUES ('$firstName','$lastName','$username','$emailAddress','$roll','$contact','$password','$confirmPassword', 'image1.png')";
  
         
  
           $result= mysqli_query($db,$sql);
  
           if($result){
              echo "Registration Successful";
              header(header: "location:admin_login.php");
          }
          else{ 
              echo "ERROR ADDING A RECORD $sql".mysqli_error($link);
          }
     
       }
       else{
           ?>
           <script type="text/javascript">
               alert("Username already exists");
           </script>
           <?php
       }
  
      }
  
  ?>



<!DOCTYPE html>
<html>
<head>

  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
      *{
          font-size: 15px;
      }
    section
    {
      margin: 20px auto;
    }
  </style>   
</head>
<body>

<section>
<div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="container2">
                    <form action="registration.php" method="post" class="mt-5 border p-4 bg-light shadow">
                        <h2 class="mb-3 text-secondary">Create Your Account</h2>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label >First Name <span class="text">*</span></label>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter first name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Last Name<span class="text">*</span></label>
                                <input type="text" name="lastName" class="form-control" placeholder="Enter last name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Username<span class="text">*</span></label>
                                <input type="text" name="username" class="form-control" placeholder="Enter a username">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Email Address<span class="text">*</span></label>
                                <input type="email" name="emailAddress" class="form-control" placeholder="Enter last email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Roll<span class="text">*</span></label>
                                <input type="text" name="roll" class="form-control" placeholder="Enter your roll">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="">Contact<span class="text">*</span></label>
                                <input type="number" name="contact" class="form-control" placeholder="Enter phone number">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="">Password<span class="text">*</span></label>
                                <input type="text" name="password" class="form-control" placeholder="Enter your password">
                            </div>
                            <div class="mb3 col-md-6">
                                <label for="">Confirm Password<span class="text">*</span></label>
                                <input type="text" name="confirmPassword" class="form-control" placeholder="Confirm Password">
                            </div>
                               <div class="mb-3 col-md-12 mt-3">
                                <input type="submit" name="submit" value="submit" class="btn btn-primary float-end">
                            </div>

                        </div>
                    </form>

<p class="text-center mt-3">If you have an account Please <a href="admin_login.php">Login</a></p>

                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
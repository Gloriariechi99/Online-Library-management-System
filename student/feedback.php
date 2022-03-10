<?php

include "connection.php";
include "navbar.php";

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
    <title>Feedback</title>
    <style type="text/css"> 
        *{
            font-size: 15px;
        }
        .wrapper{
            padding: 10px;
            margin: 20px auto;
            width:900px;
            height:600px;
            background-color: black;
            opacity: .8;
            
        }
        .form-control{
            height: 80px;
            width: 50%;
        }
        .scroll{
            width: 100%;
            height: 350px;
            overflow: auto;
        }
    
    </style>
</head>
<body>
    <div class="wrapper text-white">
        <h3>If you have any suggestions comment below</h3>
        <form style="" action="feedback.php" method="post">
            <input class="form-control" type="text-area" name="comment" placeholder="write something.....">
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="comment" style="width: 100px; height: 35px;">
            

            

        </form>
    
   <br>
    
<div class="scroll"> 
    <?php
      if(isset($_POST['submit'])){
          $comment = $_POST["comment"];
          $sql="INSERT INTO `comments`(`comment`) VALUES ('$comment')";

          $result = mysqli_query($db,$sql);
          if($result){
              $q = "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
              $res = mysqli_query($db,$q);

              echo "<table class='table table-bordered'>";
              while($row=mysqli_fetch_assoc($res)){
                  echo "<tr>";
                    echo "<td>"; echo $row['comment']; echo "</td>";
                  echo "</tr>";

                   
                  header (header: "location:index1.php");


              }

          }
      }
      else {
        $q = "SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
        $res = mysqli_query($db,$q);

        echo "<table class='table table-bordered'>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr>";
              echo "<td>"; echo $row['comment']; echo "</td>";
            echo "</tr>";
        }


    }
    


    ?>

</div>
</div>

</body>
</html>
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
    <title>Books</title>
    <style type="text/css">
        *{
        font-size: 15px;
    }
        .search{
            padding-left: 1000px;
        }
    </style>
</head>
<body>

<div class="search">
    <br>
    <form class="navbar-form" method="post" name="form1">
        
            <input type="text" name="search" placeholder="search book here.." required>
            <button style="background-color: grey" type="submit" name="submit" class="btn btn-default">
            <i class="fa fa-search"></i>
            </button>
    
    </form>
</div>

<h1>List of Books</h1>
<?php

if(isset($_POST['submit'])){
    $qr= "SELECT * FROM `books` WHERE names like '%$_POST[search]%' ";
    $q = mysqli_query($db,$qr);
    
    if(mysqli_num_rows($q)==0){
        echo "Sorry! The book is not available";
    }
    else{
        echo "<table class='table table-bordered table-hover'>";
echo "<tr style='background-color: grey;'>";
  echo "<th>";  echo"ID";  echo"</th>";
  echo "<th>";  echo"Name";  echo"</th>";
  echo "<th>";  echo"Author-Name";  echo"</th>";
  echo "<th>";  echo"Edition";  echo"</th>";
  echo "<th>";  echo"Status";  echo"</th>";
  echo "<th>";  echo"Quantity";  echo"</th>";
  echo "<th>";  echo"Department";  echo"</th>";
echo "</tr>";

while($row=mysqli_fetch_assoc($q)){
    echo "<tr>";
      echo "<td>";  echo $row['id'];  echo"</td>";
      echo "<td>";  echo $row['names'];  echo"</td>";
      echo "<td>";  echo $row['authors'];  echo"</td>";
      echo "<td>";  echo $row['edition'];  echo"</td>";
      echo "<td>";  echo $row['status'];  echo"</td>";
      echo "<td>";  echo $row['quantity'];  echo"</td>";
      echo "<td>";  echo $row['department'];  echo"</td>";

    echo "</tr>";
}
echo "</table>";
        

    }
    
}
else{
    $sql = "SELECT * FROM `books` ORDER BY `books`.`names` ASC";
$result=mysqli_query($db, $sql);

echo "<table class='table table-bordered table-hover'>";
echo "<tr style='background-color: grey;'>";
  echo "<th>";  echo"ID";  echo"</th>";
  echo "<th>";  echo"Name";  echo"</th>";
  echo "<th>";  echo"Author-Name";  echo"</th>";
  echo "<th>";  echo"Edition";  echo"</th>";
  echo "<th>";  echo"Status";  echo"</th>";
  echo "<th>";  echo"Quantity";  echo"</th>";
  echo "<th>";  echo"Department";  echo"</th>";
echo "</tr>";

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
      echo "<td>";  echo $row['id'];  echo"</td>";
      echo "<td>";  echo $row['names'];  echo"</td>";
      echo "<td>";  echo $row['authors'];  echo"</td>";
      echo "<td>";  echo $row['edition'];  echo"</td>";
      echo "<td>";  echo $row['status'];  echo"</td>";
      echo "<td>";  echo $row['quantity'];  echo"</td>";
      echo "<td>";  echo $row['department'];  echo"</td>";

    echo "</tr>";
}
echo "</table>";


}


?>
    
</body>
</html>


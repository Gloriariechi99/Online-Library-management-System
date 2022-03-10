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
    <title>Library Management System</title>
</head>
<body>
    <div class="container1">
        <header>
            <div class="logo">
                <br>
                <h1 class="text-white">Dreamer's Library</h1> 
            </div>
            <nav>
                <ul>
                    <li><a href="index1.php" class="text-white text-decoration-none"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="admin_login.php" class="text-white text-decoration-none">Admin-Login</a></li>
                    <li><a href="student_login.php" class="text-white text-decoration-none">Student-Login</a></li>
                    <li><a href="books.php" class="text-white text-decoration-none"><i class="fa fa-book"></i>Books</a></li>
                    <li><a href="feedback.php" class="text-white text-decoration-none"><i class="fa fa-comment"></i>Feedback</a></li>                    
                </ul>
            </nav>
        </header>
        <div class="section1">
        <section>
            <br><br><br>
            <div class="box">
                <h1 class="text-white text-center ">Welcome to Dreamers Library</h1><br><br>
                <h1 class="text-white text-center">Open Daily</h1><br>
                <h1 class="text-white text-center">From 7:00 AM to 10:00 PM</h1>
            </div>
            
        </section>
    </div>
       <?php
       include "footer.php";
       ?>
</body>
</html>
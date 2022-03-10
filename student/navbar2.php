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
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        header{
          width: 100%;
          height: 150px;
          background-color: rgb(63, 60, 60);
    
}
        label .logo{
            color: white;
            font-size: 35px;
            line-height: 80px;
            
            font-weight: bold;
            float: left;
            padding-left: 30px;
        }
        nav ul{
            float: right;
            margin-right: 20px;
        }
        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
            text-transform: uppercase;
        }
        nav ul li a{
            font-size: 20px;
            padding: 10px 18px;
        }
        a .active, a:hover{
            background: red;
            transition: .5s;

        }
    </style>
</head>
<body>
<header>
    <nav>
        <label class="logo text-white">DREAMERS LIBRARY</label>
        <ul>
        <li><a href="index1.php" class="text-white text-decoration-none"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="books.php" class="text-white text-decoration-none"><i class="fa fa-book"></i>Books</a></li>
        <li><a href="feedback.php" class="text-white text-decoration-none"><i class="fa fa-comment"></i>Feedback</a></li>             
        </ul>
    </nav>
</header>
    
</body>
</html>
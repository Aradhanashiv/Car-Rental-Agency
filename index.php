<?php
session_start();
// if(isset($_SESSION['username'])){
//     echo $_SESSION['username'];
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;
    0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        body{
            background-color:   rgb(253, 153, 119);
        }

        .body_container{
            margin-top:4rem;
            display: flex;
            justify-content:space-evenly;
            align-items:center;
        }

        .body_container p{
            color:white;
            font-size:7rem;
            font-weight:bolder;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid m-3 p-3 fs-5 bg-light">
    <a class="navbar-brand" >Navbar</a>
     <div class="main_container">
      <ul class="navbar-nav">
        <li class="nav-item">
       
        <a class="nav-link active" aria-current="page" href="registr_aggency.php">Admin panel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registr_customer.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rent_car2.php">ViewAvailableCars</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li> -->
       
      </ul>
    </div>
  </div>
</nav>
<div class="body_container">
    <p>Car Rental <br><strong>Agency</strong></p>
    <img src="images/car.png" alt="" width="40%">
</div>





</body>
</html>



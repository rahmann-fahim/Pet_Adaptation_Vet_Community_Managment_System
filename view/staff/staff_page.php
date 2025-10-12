<?php
@include '../../model/config.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Staff Page</title>
   <link rel="stylesheet" href="../css/style_user.css">
</head>
<body>

<div class="container">
   <div class="content">

      <h3>Hi, <span>Staff</span></h3>

      <p>This is the staff page</p>
      <a href="logout.php" class="btn">Logout</a>
   </div>
</div>

</body>
</html>

<?php
@include '../../model/config.php';
session_start();

// Only allow staff
if(!isset($_SESSION['staff_name'])){
    header("location:../login_form.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Staff Page</title>
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container">
   <div class="content">
      <h3>Hi, <span>Staff</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['staff_name'] ?></span></h1>
      <p>This is the staff page</p>
      <a href="logout.php" class="btn">Logout</a>
   </div>
</div>

</body>
</html>

<?php

@include '../../model/config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login_form.php');
}



if (isset($_GET['search'])) {
    $search = strtolower(trim($_GET['search']));

    if ($search == 'dog') {
        header("Location: ../category-dog.php");
        exit();
    } 
    elseif ($search == 'cat') {
        header("Location: ../category-cat.php");
        exit();
    } 
    else {
        header("Location: ../categories.php");
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pet Adaptation & Vet Community</title>
  <link rel="stylesheet" href="../css/style_user.css"/>
  <link rel="icon" href="../images/favicon.png" />
</head>

<body>
  <section class="navbar">
    <div class="container">
      <div class="logo">
        <a href="user_page.php"><img src="../images/logo.png" alt="Pet Adaptation Navbar Logo" class="img-responsive" /></a>
      </div>
      <div class="menu text-right">
        
        <ul type="none">
            <li><a href="user_page.php">Home</a></li>
            <li><a href="../categories.php">Categories</a></li>
            <li><a href="../pets.php">Pets</a></li>
            <li><a href="../vet-community.php">Vet Community</a></li>
            <li><a href="../logout.php">Logout</a></li>
         </ul>

      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  

  
  <section class="pet-search text-center">
    <div class="container">
    <form action="user_page.php" method="GET">
      <input type="search" name="search" placeholder="Search for pet..."/>
      <input type="submit" value="search" class="btn btn-primary"/>
    </form>

    </div>
  </section>
 
  <section class="categories">
    <div class="container">
      <h2 class="text-center">Categories</h2>
      <a href="../category-dog.php">
        <div class="box-3">
          <img src="../images/dog.png" alt="dog" class="img-responsive img-curve img-bg categories-img" />
          <h3 class="text-center text-orange">Dog</h3>
        </div>
      </a>
      <a href="../category-cat.php">
        <div class="box-3">
          <img src="../images/cat.png" alt="cat" class="img-responsive img-curve img-bg categories-img" />
          <h3 class="text-center text-orange">Cat</h3>
        </div>
      </a>
      <a href="#">
        <div class="box-3 ">
          <img src="../images/fish.png" alt="fish" class="img-responsive img-curve img-bg categories-img" />
          <h3 class="text-center text-orange">Fish</h3>
        </div>
       
        <div class="clearfix"></div>
    </div>
    </a>
  </section>

  <section class="pet-menu">
    <div class="container">
      <h2 class="text-center">Explore Pets</h2>
     
      <div class="pet-menu-box">
        <div class="pet-menu-img">
          <img src="../images/menu-dog-1.png" alt="" class="img-curve img-responsive">
        </div>
        <div class="pet-menu-desc">
          <h4>Pet Title</h4>
          <p class="pet-status">Location</p>
          <p class="pet-desc">Health condition is perfect</p>
          <br>
          <a href="../adopt.php" class="btn btn-primary">Adopt</a>
         
        </div>
      </div>
      
      <div class="pet-menu-box">
        <div class="pet-menu-img">
          <img src="../images/menu-dog-2.png" alt="" class="img-curve img-responsive">
        </div>
        <div class="pet-menu-desc">
          <h4>Pet Title</h4>
          <p class="pet-status">Location</p>
          <p class="pet-desc">Health condition is perfect</p>
          <br>
          <a href="../adopt.php" class="btn btn-primary">Adopt</a>
          
        </div>
      </div>
      <div class="pet-menu-box">
        <div class="pet-menu-img">
          <img src="../images/menu-dog-3.png" alt="" class="img-curve img-responsive">
        </div>
        <div class="pet-menu-desc">
          <h4>Pet Title</h4>
          <p class="pet-status">Location</p>
          <p class="pet-desc">Health condition is perfect</p>
          <br>
          <a href="../adopt.php" class="btn btn-primary">Adopt</a>
         
        </div>
      </div>
      <div class="pet-menu-box">
        <div class="pet-menu-img">
          <img src="../images/menu-cat-3.png" alt="" class="img-curve img-responsive">
        </div>
        <div class="pet-menu-desc">
          <h4>Pet Title</h4>
          <p class="pet-status">Location</p>
          <p class="pet-desc">Health condition is perfect</p>
          <br>
          <a href="../adopt.php" class="btn btn-primary">Adopt</a>
          
        </div>
      </div>
      <div class="pet-menu-box">
        <div class="pet-menu-img">
          <img src="../images/menu-cat-1.png" alt="" class="img-curve img-responsive">
        </div>
        <div class="pet-menu-desc">
          <h4>Pet Title</h4>
          <p class="pet-status">Location</p>
          <p class="pet-desc">Health condition is perfect</p>
          <br>
          <a href="../adopt.php" class="btn btn-primary">Adopt</a>
         
        </div>
      </div>
      <div class="pet-menu-box">
        <div class="pet-menu-img">
          <img src="../images/menu-dog-6.png" alt="" class="img-curve img-responsive">
        </div>
        <div class="pet-menu-desc">
          <h4>Pet Title</h4>
          <p class="pet-status">Location</p>
          <p class="pet-desc">Health condition is perfect</p>
          <br>
          <a href="../adopt.php" class="btn btn-primary">Adopt</a>
         
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <p class="text-center mp-21">
      <a href="../pets.php">See All Pets</a>
    </p>
  </section>

  
  <section class="social">
    <div class="container text-center">
      <ul type="none">
        <li>
          <a href="#"><img src="../images/facebook.png" alt="facebook" class="social-img img-responsive"></a>
        </li>
        <li>
          <a href="#"><img src="../images/instagram.png" alt="instagram" class="social-img img-responsive"></a>
        </li>
        <li>
          <a href="#"><img src="../images/twitter.png" alt="twitter" class="social-img img-responsive"></a>
        </li>
      </ul>
    </div>
  </section>
  
  
</body>

</html>

<?php
        include("../footer/footer.php")
     ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH ?>assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Mooli&family=Nunito+Sans:opsz@6..12&family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script> -->


</head>
<body>
<nav>
  <div class="navbar">
    <a href="#" class="logo"><img src = "<?php echo ROOT_PATH ?>assets/images/logo3-removebg.png"></a>
    <ul class="nav-links">
      <li><a href="home">Home</a></li>
      <li>
        <a href="#">Menu</a>
        <ul class="dropdown-menu">
          <li><a href="bread">Bread</a></li>
          <li><a href="sweet">Sweets</a></li>
        </ul>
      </li>
      <li><a href="about">About</a></li>

      <?php if(!myAppIsUserSignedIn()){ ?>
      <li><a href="<?php echo ROOT_PATH; ?>login">Login</a></li>
      <?php }else{ ?>
        <li><a href="<?php echo ROOT_PATH; ?>insertproduct">Add Product</a></li>
        <li><a href="<?php echo ROOT_PATH; ?>selectfordelete">Delete Product</a></li>
        <li><a href="<?php echo ROOT_PATH; ?>signout">Logout</a></li>
        <?php } ?>
    </ul>
  </div>
</nav>

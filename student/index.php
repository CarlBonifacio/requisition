<!DOCTYPE html>
<html>
<head>
	<title>CMU REQUISITION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="icon" href="images/cmu.ico">
     <style>
     body {
          background-image: url("images/bg2.png");
          height: 955px;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
     }
     </style>
</head>
<body>
          <nav>
               <div class="logo" href="studenthome.php">D O C U Q U E S T</div>
               <ul>
                    <li><a href="#">Authentication</a></li>
                    <li><a href="#">User Management</a></li>
                    <li><a href="#">Requisition Process</a></li>
                    <li><a href="#">Record Management</a></li>
                    <li><a href="homeindex.php">Report Management</a></li>
               </ul>
          </nav>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <form action="studentlogin.php" method="post">
     	<h2>Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
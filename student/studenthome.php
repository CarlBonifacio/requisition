<?php 
session_start();

if (isset($_SESSION['auth_stdnt_id']) && isset($_SESSION['auth_username'])) {

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
			<link rel="stylesheet" type="text/css" href="studentstyle.css">
			<link rel="icon" href="images/cmu.ico">
	</head>
	<body>
		<nav>
			<div class="logo" href="studenthome.php">D O C U Q U E S T</div>
			<ul>
				<li><a href="studenthome.php">Authentication</a></li>
				<li><a href="studentprofile.php">User Management</a></li>
				<li><a href="request.php">Requisition Process</a></li>
				<li><a href="status.php">Record Management</a></li>
				<li><a href="logout.php">Report Management</a></li>
			</ul>
		</nav>
	</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
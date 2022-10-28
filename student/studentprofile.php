<?php 
session_start(); 
include "db_conn.php";
	if(isset($_GET["id"]))
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
			<link rel="stylesheet" type="text/css" href="studentstyleprofile.css">
			<link rel="icon" href="images/cmu.ico">
	</head>
	<style>
		body {
          background-image: url("images/bg.jpg");
          height: 955px;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
     }
	</style>
	<body>
		<nav>
			<div class="logo" href="studenthome.php">D O C U Q U E S T</div>
			<ul>
				<li><a href="index.php">Authentication</a></li>
				<li><a href="studentprofile.php">User Management</a></li>
				<li><a href="request.php">Requisition Process</a></li>
				<li><a href="status.php">Record Management</a></li>
				<li><a href="logout.php">Report Management</a></li>
			</ul>
			<img src="images/dp.png" alt="Avatar" class="avatar"><br><br>
			<form>
				<h1> PERSONAL INFORMATION </h1><br>
  			<label for="fname">First Name</label>
  			<input type="text" id="fname" name="fname">
  			<label for="fname">Middle Name</label>
  			<input type="text" id="mname" name="fname">
  			<label for="lname">Last Name</label>
  			<input type="text" id="lname" name="lname">
  			<label for="country">Gender</label>
    		<select id="country" name="country">
      		<option value="Male">Male</option>
      		<option value="Female">Female</option>
    		</select>
    		<label for="Birthday">Birthday</label>
  			<input type="date" id="birthday" name="birthday">
  			<label for="Address">Address</label>
  			<input type="text" id="add" name="add">
			</form>
			
			<form>
				<h1> EMERGENCY CONTACTS </h1><br>
  			<label for="fname">First Name</label>
  			<input type="text" id="fname" name="fname">
  			<label for="fname">Middle Name</label>
  			<input type="text" id="mname" name="fname">
  			<label for="lname">Last Name</label>
  			<input type="text" id="lname" name="lname">
  			<label for="add">Address</label>
  			<input type="text" id="add" name="add">
  			<label for="country">Gender</label>
    		<select id="country" name="country">
      		<option value="Male">Male</option>
      		<option value="Female">Female</option>
    		</select>
  			<label for="Civil Status">Civil Status</label>
  			<input type="text" id="fname" name="civil status">
		</form><br><br><br><br><center>
		<input type="submit" value="SAVE PROFILE"></center>
	</body>
</html>

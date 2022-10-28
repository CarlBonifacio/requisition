<!DOCTYPE html>
<html>
	<head>
		<title>Request Form</title>
			<link rel="stylesheet" type="text/css" href="studentstyle.css">
			<link rel="icon" href="images/cmu.ico">
			<style>
				body {
          background-image: url("images/bg4.jpg");
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
				<li><a href="index.php">Authentication</a></li>
				<li><a href="studentprofile.php">User Management</a></li>
				<li><a href="request.php">Requisition Process</a></li>
				<li><a href="status.php">Record Management</a></li>
				<li><a href="logout.php">Report Management</a></li>
			</ul><br><br><br><br><br><br><br><br><br><br><br><br>
			<form>
				<h1> REQUEST FORM </h1><br>
 	 			<label for="fname">First Name</label>
  				<input type="text" id="fname" name="fname">
  				<label for="mname">Middle Name</label>
  				<input type="text" id="mname" name="mname">
  				<label for="lname">Last Name</label>
  				<input type="text" id="lname" name="lname">
  				<label for="country">Department</label>
    			<select id="docs" name="docs">
      			<option value="cet">College of Engineering and Technology</option>
      			<option value="cte">College of Teacher Education</option>
      			<option value="cas">College of Arts and Sciences</option>
      			<option value="cas">College of Business Accountancy</option>
      			</select>
  				<label for="reqdate">Request Date</label>
  				<input type="date" id="birthday" name="reqdate">
  				<label for="country">Document Available:</label>
    			<select id="docs" name="docs">
      			<option value="cor">Certificate of Registration</option>
      			<option value="coe">Certificate of Enrollment</option>
      			<option value="tor">Transcript of Records</option>
      			<option value="dip">Diploma</option>
      			</select>
      			<input type="submit" value="SUBMIT REQUEST">
		</form>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title>Form Status</title>
			<link rel="stylesheet" type="text/css" href="statusstyle.css">
			<link rel="icon" href="images/cmu.ico">
	</head>

	<style>
		body {
          background-image: url("images/bg3.png");
          height: 955px;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
     	}	
		table {
 			border-collapse: collapse;
  			width: 100%;
		}

		th, td {
 			padding: 30px;
 			text-align: center;
  			border-bottom: 5px solid black;
  			font-size: 150%;
		}

		tr {
			background-color: #ffffff;
		}

		tr:hover {
			background-color: #A2A2A2;
		}
		button {
			background-color: #FF0000; 
  			border: none;
 			color: white;
  			padding: 16px 22px;
  			text-align: center;
  			text-decoration: none;
        	display: inline-block;
  			font-size: 16px;
  			margin: 4px 2px;
  			transition-duration: 0.4s;
  			cursor: pointer;
		}

		button:hover{
			background-color: #FF0000;
  			color: white;
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
			</ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<center>
				<table>
 				<tr>
    				<th>Date</th>
    				<th>Name</th>
    				<th>Status</th>
    				<th>Action</th>
  				</tr>
  				<tr>
    				<td>October 8, 2024</td>
   					<td>Samson</td>
    				<td>Pending</td>
    				<th><button class="button">CANCEL</button></th>
  				</tr>
  				<tr>
    				<td>September 25, 2025</td>
    				<td>Griffin</td>
    				<td>Pending</td>
    				<th><button class="button">CANCEL</button></th>
  				</tr>
  				<tr>
    				<td>May 9, 2023</td>
    				<td>Swanson</td>
    				<td>Pending</td>
    				<th><button class="button">CANCEL</button></th>
  				</tr>
  				<tr>
    				<td>January 10, 2023</td>
    				<td>Brown</td>
    				<td>Pending</td>
    				<th><button class="button">CANCEL</button></th>
  				</tr>
			</table>
		</center>
	</body>
</html>

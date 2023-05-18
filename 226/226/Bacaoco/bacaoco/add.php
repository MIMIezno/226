<!DOCTYPE html>
<html>
<?php
include('header.php');
?>

<head>
<title>Insert Data</title>
<style>
.container {
  
	max-width: 800px;
	margin: 0 auto;
	padding: 50px;
	background-color: #fff;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	border-radius: 5px;
}

h1 {
	font-size: 36px;
	margin-bottom: 20px;
}

label {
	display: block;
	font-size: 18px;
	margin-bottom: 10px;
}

input[type="text"],
input[type="tel"],
textarea {
	padding: 10px;
	font-size: 16px;
	border: none;
	border-radius: 3px;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
	margin-bottom: 20px;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	font-size: 18px;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

.back-btn {
	position: fixed;
	bottom: 20px;
	right: 20px;
	background-color: #555;
	color: #fff;
	padding: 10px 20px;
	font-size: 18px;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

.back-btn:hover {
	background-color: #333;
}
	</style>
	
</head>
<body>
	<h1>Add New Medical Record</h1>
	<form action="insert.php" method="POST">

		<label for="ServiceID">Service ID:</label>
		<input type="int" name="ServiceID" id="ServiceID"><br>

		<label for="Servicename">Service Name:</label>
		<input type="text" name="Servicename" id="Servicename"><br>

		<label for="Description">Description:</label>
		<input type="text" name="Description" id="Description"><br>

		<label for="Price">Price:</label>
		<input type="text" name="Price" id="Price"><br>


		<input type="submit" value="Submit">
	</form>
    <?php
include('footer.php');
?>
</body>
</html>






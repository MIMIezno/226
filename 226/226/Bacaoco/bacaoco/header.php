<!DOCTYPE html>
<html>
<head>
<title>Dog Care Services</title>
    <style>
		nav {
			background-color: #333;
			overflow: hidden;
		}


		nav a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
            font-family: Arial, sans-serif;
		}

		nav a:hover {
			background-color: #ddd;
			color: black;
		}

		.active {
			background-color: #4CAF50;
			color: white;
		}

        

		.logo {
			display: flex;
			align-items: center;
			position: relative;
		}

		.logo img {
			height: 100px;
			width: auto;
			margin: 0 10px;
			border-radius: 50%;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
		}

		.logo h1 {
			color: green;
			font-size: 3rem;
			font-weight: normal;
			margin: 0;
			padding: 0;
            font-family: Arial, sans-serif; 
            
		}
	</style>
</head>
<body>

<div class="logo">
			<img src="dog.jpg" alt="My Logo">
            <h1>Dog Care Services</h1>
            
		</div>

	<nav>
		<a href="index.php" class="active">Home</a>
		
		<a href="#">Contact</a>
        <a href="aboutme.php">About Me</a>
		<a href="dashboard.php">Dashboard</a>
		<a href="login.php">Log In</a>
	</nav>


</body>
</html>
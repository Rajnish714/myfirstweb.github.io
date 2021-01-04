<?php require('dbcon.php');
session_start();
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/nav1.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/navscript.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a href="../userdata/index.php" class="navbar-brand mr-auto" id="brand">ARTIX</a>	
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<div id="ctn" onmouseover="show()" onmouseout="hide()">
						<?php
						if (isset($_SESSION['usid'])) {
								
							echo '<a class="nav-link">' . $_SESSION['UN'];'</a>';

						} else {
							
							echo '<a href="#" class="nav-link" id="acc">account</a>';
						}
						?>
						<div id="box">
							<?php
							if (isset($_SESSION['usid'])){
								echo '<a href="order.php" class="nav-link">order</a>';	
								echo '<a href="user_orderlist.php" class="nav-link">orderlist</a>';							
								echo '<a href="userlogout.php" class="nav-link">logout</a>';
							} else {
								echo '<a href="userlogin.php" class="nav-link">LOGIN</a>';
							}
							?>
						</div>
					</div>
				</li>
				<li class="nav-item">
				</li>
			</ul>
		</div>
	</nav>

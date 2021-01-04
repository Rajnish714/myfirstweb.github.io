

<!DOCTYPE html>
<html>

<head>
	<title>order page</title>
</head>

	<?php include('navbar.php');?>

	
	
	<div class="container-fluid">
	
		<form action="order.php" method="post" enctype="multipart/form-data" align="center" onsubmit="">

			<br>
			<div class="form-group">
			<h3>type of photo</h3><br><input type="radio" name="pics" value="color skatch" checked="checked">  color sketch
			<input type="radio" name="pics" value="pencil skatch">pencil sketch
			</div>	
			<div class="form-group">
			<h3>size</h3>
			<select name="size">

				<option value="A4" id="a4">A4 size</option>
				<option value="A2" id="a2">A2size</option>
				<option value="A1" id="a1">A1 size</option>

			</select>
			</div>
			<div class="form-group">
			<h3>number of faces</h3>
			<input type="number" name="quantity" min="1" max="10" value="1">
			<br>
			<h3>choose photo</h3>
			<input type="file" name="photo" required>
			<br>
			<br>
			<input type="submit" name="placeorder">
			</div>
		</form>

		
	</div>
</body>

</html>

<?php



if (isset($_POST['placeorder'])) {

	include 'dbcon.php';

	//------------------------------product details-----------------------------------------
	$typOfpic = $_POST['pics'];
	$quantity = $_POST['quantity'];
	$size = $_POST['size'];
	$picture = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	move_uploaded_file($tempname, "pics/$picture");
	//---------------------------------foreign key--------------------------------------------
	$num = $_SESSION['UN'];
	$userid = "SELECT `uid` FROM `user` WHERE `username` = '$num'";
	$runUid = mysqli_query($con , $userid);
	$data = mysqli_fetch_assoc($runUid);
	$uid = $data['uid'];
	//--------------------------------------------------------------------------------------
	if ($typOfpic == 'color skatch') {

		if ('color' == true) {
			if ($size == 'A4') {
				$a4 = $quantity * 2000;
				
				$qry = "INSERT INTO `order`(`uid`,`product`, `size`, `quantity`, `photo`, `prize`) VALUES ('$uid','$typOfpic','$size','$quantity','$picture','$a4')";
				$run = mysqli_query($con, $qry);
			} elseif ($size == 'A2') {
				$a2 = $quantity * 3000;
				$qry = "INSERT INTO `order`(`uid`,`product`, `size`, `quantity`, `photo`, `prize`) VALUES ('$uid','$typOfpic','$size','$quantity','$picture','$a2')";
				$run = mysqli_query($con, $qry);
			} else {
				$a1 = $quantity * 4000;
				$qry = "INSERT INTO `order`(`uid`,`product`, `size`, `quantity`, `photo`, `prize`) VALUES ('$uid','$typOfpic','$size','$quantity','$picture','$a1')";
				$run = mysqli_query($con, $qry);
			}
		}
		
	} elseif ($typOfpic == 'pencil skatch') {

		if ($size == 'A4') {
			$a4 = $quantity * 6000;
			$qry = "INSERT INTO `order`(`uid`,`product`, `size`, `quantity`, `photo`, `prize`) VALUES ('$uid','$typOfpic','$size','$quantity','$picture','$a4')";
			$run = mysqli_query($con, $qry);
		} elseif ($size == 'A2') {
			$a2 = $quantity * 7000;
			$qry = "INSERT INTO `order`(`uid`,`product`, `size`, `quantity`, `photo`, `prize`) VALUES ('$uid','$typOfpic','$size','$quantity','$picture','$a2')";
			$run = mysqli_query($con, $qry);
		} else {
			$a1 = $quantity * 8000;
			$qry = "INSERT INTO `order`(`uid`,`product`, `size`, `quantity`, `photo`, `prize`) VALUES ('$uid','$typOfpic','$size','$quantity','$picture','$a1')";
			$run = mysqli_query($con, $qry);
		}
	}
}
?>
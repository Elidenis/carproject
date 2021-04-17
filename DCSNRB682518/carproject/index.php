<?php
session_start();

include 'dbh.inc.php';

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'	=>	$_GET["id"],
				'item_name'	=>	$_POST["hidden_name"],
				'item_price' =>	$_POST["hidden_price"],
				'item_quantity'	=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("You have Already Booked the Car")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("The car has been Removed from the booking")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>carlisting</title>
		<link rel="stylesheet" type="text/css" href="css/book.css">
		<link rel="stylesheet" type="text/css" href="css/comment-nav.css">
	</head>
	<header>
		
	<ul>
		<li><a href="welcome.php">Home</a></li>
		<li><a href="carlisting.php">Cars</a></li>
		<li><a href="contuct.php">Contact us</a></li>
		<li><a href="comment.php">Comments</a></li>
		<li><a href="">Services</a></li>
		
	</ul>



</header>
	<body style="background: url(images/silverurus.jpg);background-attachment: fixed; background-size: 100%">
		<div class="container">
			<br/>
			<br/>
			<br/>
			<h3 align="center">General Motors Cars </h3><br/><br/><br/>

			
			<?php
				
				$query = "SELECT * FROM cars ORDER BY price DESC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{

					while($row = mysqli_fetch_array($result))
					{
				?>



			<div class="maindiv">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="display" align="center" >
						<img src="mainproject/images/<?php echo $row["image"]; ?>" class="imgs"/><br><br>

						<div class="text-info" align="Left">
							<label>Name:</label>	<?php echo $row["name"]; ?><br>
							<label>Brand:</label> <?php echo $row["brand"]; ?><br>
								<label>Seats:</label> <?php echo $row["seates"]; ?><br>
								<label>Fuel:</label> <?php echo $row["fuel_type"]; ?><br>
								<label>Status:</label> <?php echo $row["condition"]; ?><br>
								<label>Price:</label> Ksh <?php echo $row["price"]; ?><br>

						</div>

						<input type="text" name="quantity" value="1" class="form-control"/><br>

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Book" />

					</div>
				</form>
			</div>








			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br/>
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table">
					<tr>



						<th width="40%" align="Left">Car Name</th>
						<th width="10%" align="Left">Days</th>
						<th width="20%" align="Left">P/Day</th>
						<th width="15%" align="Left">Total</th>
						<th width="5%" align="Left">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Ksh <?php echo $values["item_price"]; ?></td>
						<td>Ksh <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="center"><b>Total<b></td>
						<td align="Left"><b>Ksh <?php echo number_format($total, 2); ?><b></td>
						<td></td>
					</tr>
					<?php
					}
					?>

				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

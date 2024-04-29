<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>

	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
        <link href="css/styles.css" rel="stylesheet" />

		<title>CHECKOUT</title>
		<link rel="stylesheet" href="css/style.css" />
		<script type = "text/javascript" src="Java/function.js"></script>
        
    </head>
    <body>


	<center>

<h1>CHECKOUT</h1>
<br><br><br>


</div>

<?php
$array_products = $_POST['hidden_cart'];
$checkoutarr = explode("-", $array_products);

$total=(int)0;
include("cafe_connection.php");

	$sql_product="SELECT * FROM menu_tab";
	$result_product=$connect->query($sql_product);
	

	while($row_product = $result_product->fetch_assoc())
	{

		for($a=0; $a<count($checkoutarr); $a++)
		{

		if($row_product["sid"]==$checkoutarr[$a])
		{
			echo $row_product["product_name"];
			echo " $";
			echo $row_product["product_price"];
			echo "<br>";

			$total+= (int)($row_product["product_price"]);
		}
		}

		?>		
<?php
	}
	echo "<br>";
	echo "total price: $";
	echo $total;

?>
			<br> <br>card information

			<form action="thankyou.html" method="post">

	<input type="text" name="pay" id="pay" />
<br><br>
	<input type="submit" value="Checkout">
</form>


		
			</center>


    </body>
</html>
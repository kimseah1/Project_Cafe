<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>

		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
        <title>MENU</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="Java/myfunction.js"></script>
        
    </head>
    <body>

    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >
            <div class="container"id="mainNav">
                <a class="navbar-brand"><H1>Gongcha Café</H1> </a>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link"  href="website.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

	<center>
<br><br><br>
	<h1 href="website.php">Home</h1>

	<br>

<img src="img/cart.png" width=10%  onclick="myFunction()" style="position:absolute; top:10px; right:30px;" />

<div class="cartImg" id="cart" overflow= "scroll" style="display:none;">


<label id="output"></label>


<form action="checkout.php" method="post">

	<input type="hidden" name="hidden_cart" id="hidden_cart" />

	<input type="submit" value="Checkout">
</form>


</div>
</center>



<h2 style="font-family:verdana; font-size:50px; color: grey; margin:50px; weight: bold; line-height:0.1;">Coffee</h2>

<hr style="margin:70px; ">

<table align = "center" width= 80% border = 1>
			<tr>
<?php

$count=1;
include("cafe_connection.php");

	$sql_product="SELECT * FROM menu_tab";
	$result_product=$connect->query($sql_product);
	
	while($row_product = $result_product->fetch_assoc())
	{
	?>
		<td>
			<?php 
			
			echo "<img src='".$row_product["product_img"]."' />"; ?><br>
			<?php echo $row_product["product_name"]?>
				price: $<?php echo $row_product["product_price"]?>


				<button onclick = "addtocart('<?php echo $row_product ['product_name'];?>', '<?php echo $row_product ['sid'];?>')">Add to cart</button>
		
			</td>
			
		
	<?php 

	if($count>=3)
	{
		echo "</tr><tr>";
		$count=1;
	}
	else{
		$count++;
	}
	}
	


	
	?>
	</table>

		



    </body>

	<script>	
		

	


	</script>
</html>
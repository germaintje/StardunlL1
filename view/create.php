<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="create">
<h1>CREATE NEW PRODUCT</h1>

<form action="?op=create" method="post">
	product id: <br><input type="text" name="product_id"><br>
	product type code: <br><input type="text" name="product_type_code"><br>
	supplier id: <br><input type="text" name="supplier_id"><br>
	product name: <br><input type="text" name="product_name"><br>
	product price: <br><input type="text" name="product_price"><br>
	other product details: <br><input type="text" name="other_product_details"><br>
	<input class="submit" type="submit">
</form>


<?php

?>


<br><a class="terug" href='../index.php'>Ga terug</a>

</body>
</html>

<html>
	<body>
		<?php
		if(isset($_GET["action"]) == "get_product"){
			$product_info = file_get_contents('http://localhost/ws/api.php?action=get_product&id=' . $_GET["id"]);
			$product_info = json_decode($product_info, true);
		?>
		Product Name : <?php echo $product_info["prod_name"] ?><br />
		Shop Name : <?php echo $product_info["shop_name"] ?><br />
		Price : <?php echo $product_info["price"] ?><br />
		<?php
		}
		else {
			$product_list = file_get_contents('http://localhost/ws/api.php?action=get_product_list');
			$product_list = json_decode($product_list, true);
		?>
		<?php foreach($product_list as $product): ?>
		<a href=<?php echo
		"http://localhost/ws/rest_client.php?action=get_product&id=" . $product["id"] ?>><?php echo $product["prod_name"] ?></a><br />
		<?php endforeach; ?>
		 <?php
		 ?>
	</body>
</html>

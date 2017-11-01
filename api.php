<?php
	function get_product_info($id){
		$product_info = array();
		switch($id){
			case 1:
				$product_info = array("prod_name" => "product1", "shop_name" => "shop1", "price" => "11");
				break;
			case 2:
				$product_info = array("prod_name" => "product2", "shop_name" => "shop2", "price" => "22");
				break;
			case 3:
				$product_info = array("prod_name" => "product3", "shop_name" => "shop3", "price" => "33");
				break;
			case 4:
				$product_info = array("prod_name" => "product4", "shop_name" => "shop4", "price" => "44");
				break;
			case 5:
				$product_info = array("prod_name" => "product5", "shop_name" => "shop5", "price" => "55");
				break;
		}
		return $product_info;
	}
	function get_product_list(){
		$product_list = array(
			array("id" => 1, "prod_name" => "product1"),
			array("id" => 2, "prod_name" => "product2"),
			array("id" => 3, "prod_name" => "product3"),
			array("id" => 4, "prod_name" => "product4"),
			array("id" => 5, "prod_name" => "product5"));
		return $product_list;
	}

	if(isset($_GET["action"])){
		switch($_GET["action"]){
			case "get_product_list":
				$value = get_product_list();
				break;
			case "get_student":
				$value = get_product_info($_GET["id"]);
				break;
		}
	}
	exit(json_encode($value));
?>

<?php
	class Products{
		public function getProdNames(){
			$prodname = array("product1", "product2", "product3", "product4",
				"product5", "product6", "product7", "product8", "product9");
			return $prodname;
		}
		public function getPrices(){
			$prices = array("11", "22", "33", "44",
				"55", "66", "77", "88", "99");
			return $prices;
		}
		public function getShopNames(){
			$shops = array("shop1", "shop2", "shop3", "shop4",
				"shop5", "shop6", "shop7", "shop8", "shop9");
			return $shops;

		}
	}
?>

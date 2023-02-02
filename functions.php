<?php

require('database/DBController.php');

require('database/product.php');

require('database/cart.php');

$db = new DBController();

$product = new Product($db);
$product_shuffle = $product->getData();
//print_r($product->getData());

$Cart = new cart($db);

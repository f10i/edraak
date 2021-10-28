<?php

$db = new mysqli("mysql", "root", "", "edraak");

$product_id = $db->real_escape_string($_POST['product_id']);
$review = $db->real_escape_string($_POST['review']);

$db->query("INSERT INTO product_reviews(product_id, review) VALUES($product_id, '$review')");

$query_params = ['id' => $_POST['product_id']];
header('location: product.php?'.http_build_query($query_params));

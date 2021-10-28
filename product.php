<?php
session_start();
$id = $_GET['id'];

if ($id == 1) {
	$name = "Alienware";
} elseif ($id == 2) {
	$name = "Macbook Pro";
} elseif ($id == 3) {
	$name = "Acer Predator";
} else {
	$name = "invalid product";
}
?>

<h1><?php echo $name ?></h1>

<?php include 'reviews.php' ?>

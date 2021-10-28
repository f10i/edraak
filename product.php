<?php
session_start();
$id = $_GET['id'];

if ($id == 1) {
	$name = "iPhone";
} elseif ($id == 2) {
	$name = "Pixel Phone";
} elseif ($id == 3) {
	$name = "Samsung";
} else {
	$name = "invalid product";
}
?>

<h1><?php echo $name ?></h1>

<?php include 'reviews.php' ?>
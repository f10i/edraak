<form method="post" action="new_review.php">
	<input type="hidden" name="product_id" value="<?php echo $_GET['id'] ?>" />
	<textarea name="review" rows="4" cols="25"></textarea>
	<input type="submit" name="submit" />
</form>

<?php

$db = new mysqli("mysql", "root", "", "edraak");
$reviews = $db->query("SELECT * FROM product_reviews WHERE product_id = ".$db->real_escape_string($_GET['id'])." ORDER BY id DESC");

while ($review = $reviews->fetch_assoc()) {
   echo "<div>".htmlspecialchars($review['review'])."</div>";
}

?>

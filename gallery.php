<?php


?>
<?php include 'header.php'; ?>
	<div class="w3-row">
<?php

include 'db.php';
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$gallerytable = $conn->prepare('SELECT image_name, image_url, image_md5name FROM hr_images');
$gallerytable->execute();
$result = $gallerytable->setFetchMode(PDO::FETCH_ASSOC);
 
foreach ($gallerytable as $result) {
	
echo '<div class="w3-container w3-col m3 l3 w3-padding "><a href="/image/' . $result['image_md5name'].'"><img class="w3-mobile" src="' . $result['image_url'].'" width="304px" height="260px"/></a></div>';

}
$conn = null;
?>

</div>
<hr>
<?php include 'footer.php'; ?>
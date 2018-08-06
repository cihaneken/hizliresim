<?php

$request  = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$endparams = end($params);

include 'header.php';

echo '<div class="w3-container w3-center"><img class="w3-image" src="../images/'.$endparams.'"/></div>';

include 'footer.php';
?>
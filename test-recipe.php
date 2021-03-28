<?php
require "includes/header.php";
require 'includes/dbhandler.php';
?>
<link rel="stylesheet" href="css/test-recipe.css">
<?php

$rec = "SELECT * FROM recipes WHERE rid=(SELECT max(rid) FROM recipes)";
$res = mysqli_query($conn, $rec);
$row = mysqli_fetch_array($res);

$ingarr = preg_split("/;/", $row['ingredients']); 
$stparr = preg_split("/;/", $row['steps']); 
$creator = $row['creator'];

$name = $row['name'];
echo "<h2 style='text-align:center'>$name</h2>";

echo "<h3 style='text-align:center'>Ingredients: </h3>";
foreach ($ingarr as $ingvalue) {
    echo "<p style='text-align:center'>$ingvalue</p>";
}
echo "<h3 style='text-align:center'>Steps: </h3>";
foreach ($stparr as $stpvalue) {
    echo "<p style='text-align:center'>$stpvalue</p>";
}

echo "<p style='text-align:center'>Recipe added by: $creator</p>";
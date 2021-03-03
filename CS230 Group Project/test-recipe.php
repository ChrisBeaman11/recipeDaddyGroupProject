<?php
require "includes/header.php";
require 'includes/dbhandler.php';

$rec = "SELECT * FROM recipes WHERE rid=1";
$res = mysqli_query($conn, $rec);
$row = mysqli_fetch_array($res);
$exp = ';';

$ingarr = preg_split("/;/", $row['ingredients']); 
$stparr = preg_split("/;/", $row['steps']); 

$name = $row['name'];
echo "<h2>$name</h2>";

echo "<h3>Ingredients: </h3>";
foreach ($ingarr as $ingvalue) {
    echo "<p>$ingvalue</p>";
}
echo "<h3>Steps: </h3>";
foreach ($stparr as $stpvalue) {
    echo "<p>$stpvalue</p>";
}
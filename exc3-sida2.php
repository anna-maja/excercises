<?php
$fname = $_POST['fnamn'];
$lname = $_POST['enamn'];

echo "Hej $fname $lname!";

// $_POST är en associative array som innehåller info om alla postvariabler
echo "<pre>";
print_r ($_POST);
echo "</pre>";
?>
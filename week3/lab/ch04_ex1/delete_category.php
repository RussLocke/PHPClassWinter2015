<?php
// Get ID
$category_id = $_POST['category_id'];

// Delete the product from the database
require_once('database.php');
$query = "DELETE FROM categories
          WHERE categoryID = '$category_id'";
echo $query;
$db->exec($query);

// display the Product List page
include('index.php');
?>
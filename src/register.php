<?php

require_once './dbhelper.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header("Location: ./");
  exit();
}

$conn = getDb();

$category = $_POST['category'];
$price = intval($_POST['price']);
addItem($conn, $category, $price);
header("Location: ./");
exit();

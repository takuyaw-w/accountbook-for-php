<?php

require_once './dbhelper.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header("Location: ./");
  exit();
}

$conn = getDb();

$category = $_POST['category'];
$price = intval($_POST['price']);
$note = $_POST['note'];
addItem($conn, $category, $price, $note);
header("Location: ./");
exit();

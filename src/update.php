<?php

require_once './dbhelper.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header("Location: ./");
  exit();
}

$conn = getDb();

$id = intval($_POST['id']);
$category = $_POST['category'];
$price = intval($_POST['price']);
$note = $_POST['note'];
updateItem($conn, $id, $category, $price, $note);
header("Location: ./");
exit();

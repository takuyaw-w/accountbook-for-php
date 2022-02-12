<?php

require_once './dbhelper.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header("Location: ./");
  exit();
}

$conn = getDb();

$id = intval($_POST['id']);
deleteItem($conn, $id);
header("Location: ./");
exit();

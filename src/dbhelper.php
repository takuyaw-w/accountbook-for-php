<?php

function createTable(\PDO &$pdo) {
    $sql = <<<EOM
    CREATE TABLE IF NOT EXISTS items(
		id        INTEGER AUTO_INCREMENT PRIMARY KEY,
		category  TEXT NOT NULL,
		price     INTEGER NOT NULL
	);
EOM;
    $pdo->query($sql);
}

function getItems(\PDO &$pdo, int $limit) {
    $sql = "SELECT * FROM items ORDER BY id DESC LIMIT :limit";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':limit', $limit);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function addItem(\PDO &$pdo, string $category, int $price ) {
    $sql = "INSERT INTO items(category, price) VALUES (:category, :price)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->execute();
}

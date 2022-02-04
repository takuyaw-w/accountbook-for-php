<?php

const DSN = 'mysql:host=db;dbname=testdb;port=3306';
const DB_USER = 'testuser';
const DB_PASS = 'testpass';
define('PDO_CONFIG', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
]);

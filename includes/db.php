<?php
include "config.php";

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";port=3306;dbname=" . DB_NAME, DB_USER, DB_PASS);
} catch (Exception $e) {
    die($e->getMessage());
}

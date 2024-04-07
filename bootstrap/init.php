<?php
include "constans.php";
include BASE_PATH. "bootstrap/config.php";
include BASE_PATH. "libs/helpers.php";
include BASE_PATH. "libs/lib_auth.php";
include BASE_PATH. "libs/lib_tasks.php";
include BASE_PATH. "vendor/autoload.php";

try {
    $pdo = new PDO("mysql:host=$db_connection->server; port=$db_connection->port;dbname=$db_connection->database", $db_connection->username, $db_connection->password);
} catch (PDOException $e) {
    toBeDie($e->getMessage());
}
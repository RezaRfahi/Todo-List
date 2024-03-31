<?php

include "constans.php";
include "config.php";
include "./libs/helpers.php";
include "./libs/lib_auth.php";
include "./libs/lib_tasks.php";
include "./vendor/autoload.php";

try {
    $pdo = new PDO("mysql:host=$db_connection->server; port=$db_connection->port;dbname=$db_connection->database", $db_connection->username, $db_connection->password);
} catch (PDOException $e) {
    toBeDie($e->getMessage());
}
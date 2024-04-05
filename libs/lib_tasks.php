<?php

function getFolders(){
    global $pdo;
    $query = "SELECT * FROM `folders`";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}
<?php

function getFolders(){
    global $pdo;
    $query = "SELECT * FROM `folders`";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}

function deleteFolders($id){
    global $pdo;
    $query = "DELETE FROM `folders` WHERE `id` = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $rows = $stmt->rowCount();
    return $rows;
}

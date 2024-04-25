<?php defined('BASE_PATH') OR toBeDie('Access denied..!');

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

function addFolders($name){
    global $pdo;
    $user_id = currentUser();
    $query = "INSERT INTO `folders`(`name`, `user_id`) VALUES (?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $user_id]);
    $rows = $stmt->rowCount();
    return $rows;
}

function getTasks(){
    $where_folder = "";
    if(isset($_GET['folder'])){
        $where_folder = "and folder_id = $_GET[folder]";
    }
    global $pdo;
    $user_id = currentUser();
    $query = "SELECT * FROM `tasks` WHERE `user_id` = ? $where_folder";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id]);
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}

function deleteTask($id){
    global $pdo;
    $query = "DELETE FROM `tasks` WHERE `id` = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $rows = $stmt->rowCount();
    return $rows;
}
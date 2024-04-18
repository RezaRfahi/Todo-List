<?php
include "bootstrap/init.php";

if (isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){
    $deleted_count = deleteFolders($_GET['delete_folder']);
    echo "$deleted_count Folder(s) was successfully deleted";
}

if (isset($_GET['delete_task']) && is_numeric($_GET['delete_task'])){
    $deleted_count = deleteTask($_GET['delete_task']);
    echo "$deleted_count Task(s) was successfully deleted";
}


$folders = getFolders();
$tasks = getTasks();

include "views/layout.php";

?>
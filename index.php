<?php
include "bootstrap/init.php";

if (isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){
    $deleted_count = deleteFolders($_GET['delete_folder']);
    echo "$deleted_count was successfully deleted";
}

$folders = getFolders();
$tasks = getTasks();

include "views/layout.php";

?>
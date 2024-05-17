<?php
include '../bootstrap/init.php';

if(!isAjaxRequest()){
    toBeDie("Invalid request ..!");
}

if (!isset($_POST['action']) || empty($_POST['action'])){
    toBeDie("Invalid Action");
}

switch ($_POST['action']){
    case 'addFolder' :
        if (!isset($_POST['folderName']) || strlen($_POST['folderName']) < 3)
        {
            echo "Please Enter a folder name with more than 3 characters";
            die();
        }
        echo addFolder($_POST['folderName']);
        break;

    case 'addTask' :
        if (!isset($_POST['taskTitle']) || strlen($_POST['taskTitle']) < 3)
        {
            echo "Please Enter a task title with more than 3 characters";
            die();
        }
        var_dump($_POST);
//        echo addTask($_POST['taskTitle'], $_POST['folderId']);
        break;

    default:
        toBeDie("Invalid Action");
}

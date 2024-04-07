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
        echo addFolders($_POST['folderName']);
        break;

    default:
        toBeDie("Invalid Action");
}

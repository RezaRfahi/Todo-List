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
        addFolders($_POST['folderName']);
        break;

    default:
        toBeDie("Invalid Action");
}

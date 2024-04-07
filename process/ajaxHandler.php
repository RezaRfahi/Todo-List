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
        var_dump($_POST);
        break;

    default:
        toBeDie("Invalid Action");
}
var_dump($_POST);
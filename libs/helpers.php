<?php defined('BASE_PATH') OR Die('Access denied..!');

function toBeDie($message)
{
    echo "<div style='align-content: center;background-color: #ffcccc; border: 2px solid #ff6666; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; width: 100%; text-align: center;'>
    <p style='color: #552277; font-weight: bold; font-size: 20px; margin-bottom: 10px;'>Error!: " . $message . "</p><br/></div>";
    die();
}


function isAjaxRequest()
{
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        // This is an AJAX request
        return true;
    }
    return false;
}

function currentUser()
{
    return 1;
}


function dd($var){
    echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
    var_dump($var);
    echo "</pre>";
}

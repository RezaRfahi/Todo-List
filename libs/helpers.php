<?php

function toBeDie($message)
{
    echo "<div style='align-content: center;background-color: #ffcccc; border: 2px solid #ff6666; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; width: 100%; text-align: center;'>
    <p style='color: #552277; font-weight: bold; font-size: 20px; margin-bottom: 10px;'>Error!: " . $message . "</p><br/></div>";
    die();
}
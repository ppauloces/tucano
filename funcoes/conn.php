<?php

try { 
    $pdo = new PDO('mysql:host=localhost;dbname=tucano', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) { 
    echo 'Error: ' . $e->getMessage();
}


?>
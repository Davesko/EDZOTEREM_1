<?php
session_start();
try {
    $db = new PDO("mysql:host=localhost:8888;dbname=edzoterem", "root", "");
}
catch (\PDOException $e){
    throw new \PDOException($e ->getMessage(), $e->getCode());
}

?>



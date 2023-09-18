<?php
session_start();
try {
    $db = new PDO("mysql:host=localhost;dbname=edzoterem2", "root", "root");
}
catch (\PDOException $e){
    throw new \PDOException($e ->getMessage(), $e->getCode());
}

?>




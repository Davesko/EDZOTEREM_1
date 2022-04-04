<?php
require_once "config.php";


$stmt = $db->prepare("SELECT * FROM orak");
$stmt->execute();
$fetched = $stmt->fetchAll();
foreach ($fetched as $item) {
    echo $item['datum'];
}
?>


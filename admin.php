<?php
require_once "config.php";

if (isset($_POST['submit'])){
    if(!isset($_POST['oraID']) || $_POST['oraID'] == ""){
        die("HIBA!!!444!");
    }
    $stmt = $db->prepare("DELETE FROM orak WHERE oraID = :ora");
    $stmt->bindValue(":ora", $_POST['oraID']);
    $stmt->execute();
}

$stmt = $db->prepare("SELECT * FROM orak INNER JOIN edzok ON orak.edzoID = edzok.userID");
$stmt->execute();
$fetched = $stmt->fetchAll();
foreach ($fetched as $item) :?>
    <p><?=$item['datum']?><p>
    <p><?=$item['nev']?><p>
    <form method="post" action="/admin.php">
        <input type="hidden" name="oraID" value="<?=$item['oraID']?>"/>
        <input type="submit" name="submit" value="Törlés">
    </form>
<?php endforeach;?>


<?php
require_once "config.php";
//$_SESSION['userID'] = null;
//$_SESSION['webAdmin'] = null;
//$_SESSION['nev'] = null;
//$_SESSION['nem'] = null;
//$_SESSION['email'] = null;
session_destroy();
header('Location: /index.php');

?>
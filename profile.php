<?php
require_once "config.php";
if(!isset($_SESSION['userID']) || $_SESSION['userID'] == null || $_SESSION['userID'] == ""){
    header('Location: /index.php');
}

$stmt = $db->query("SELECT * FROM orak INNER JOIN edzok ON edzok.userID = orak.edzoID WHERE orak.userID IS NULL");
$stmt->execute();
$orak = $stmt->fetchAll();
?>
<html>
<head>

    <meta charset="utf-8">


    <title >Fitness Vital</title>


    <link rel="icon" href="assets/images/logo.jpg" type="image/icon type">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    <link rel="stylesheet" href="assets/css/formStyle.css">

</head>

<body style="background-color: #1d2124">
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo"><em>FITNESS</em> VITAL</a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="index.php" class="active">KEZDŐLAP</a></li>

                        <li class="main-button"><a href="logout.php" style="color: black">KIJELENTKEZÉS</a></li>


                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="video-overlay" >
    <div class="form-body">
        <div class="row justify-content-center">
                        <h2>Profilod</h2>

            <br>
            <br>
            <br>
            <br>
            <br>
            <form>
                <select>
                    <option selected disabled>Kérjük válassz ki egy órát!</option>
                    <?php foreach ($orak as $ora):?>
                    <?php $sor = $ora['datum'] . " - " . $ora['nev'];?>
                        <option value="<?=$ora['oraID']?>"><?=$sor?></option>
                    <?php endforeach;?>
                </select>
            </form>


        </div>

    </div>

</div>


</body>
</html>



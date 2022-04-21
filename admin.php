<?php
require_once "config.php";

$stmt_edzok = $db->query("SELECT * FROM edzok");
$stmt_edzok->execute();
if (isset($_POST['submit'])){
    if(!isset($_POST['oraID']) || $_POST['oraID'] == ""){
        die("HIBA!!!444!");
    }
    $stmt = $db->prepare("DELETE FROM orak WHERE oraID = :ora");
    $stmt->bindValue(":ora", $_POST['oraID']);
    $stmt->execute();

}

if(isset($_POST['hozza'])){
    $error = [];
    if($_POST['edzo'] == null || $_POST['edzo'] == ""){
        $error[] = "Add meg az edzőt!";
    }
    if($_POST['datum'] == null || $_POST['datum'] == ""){
        $error[] = "Add meg a dátumot!";
    }
    if($_POST['tipus'] == null || $_POST['tipus'] == ""){
        $error[] = "Add meg a típust!";
    }
    if($_POST['ar'] == null || $_POST['ar'] == "" || !is_numeric($_POST['ar'])){
        $error[] = "Add meg az árat!";
    }
    if(count($error) > 0){
        die("üres");
    }
    else{
        $stmt_add = $db->prepare("INSERT INTO orak (userID, edzoID, datum, tipus, ar) VALUES (:userID, :edzoid, :datum, :tipus, :ar)");
        $stmt_add->bindValue(":userID", $_SESSION['userID']);
        $stmt_add->bindValue(":edzoid", $_POST['edzo']);
        $stmt_add->bindValue(":datum", $_POST['datum']);
        $stmt_add->bindValue(":tipus", $_POST['tipus']);
        $stmt_add->bindValue(":ar", $_POST['ar']);
        $stmt_add->execute();
    }
}

?>

<head>
    <meta charset="utf-8">
    <title >Fitness Vital</title>
    <link rel="icon" href="assets/images/logo.jpg" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
    <link rel="stylesheet" href="assets/css/formStyle.css">
</head>

<body style="background-color: #1d2124">


<header class="header-area header-sticky">
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.php" class="logo">FITNESS<em> VITAL</em></a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="index.php" class="active">KEZDŐLAP</a></li>
                        <li style="border: 2px solid #FFF200" class="scroll-to-section" ><a href="logout.php">KIJELENTKEZÉS</a></li>
                        <li></li>
                        <a href="/profile.php" style="margin-left: 40px" class="scroll-to-section" >
                            <svg  xmlns="http://www.w3.org/2000/svg" style="color: grey" width="40" height="40" fill="currentColor" class="bi bi-person flex-fill" viewBox="0 0 15 15">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </a>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>

</header>

<div class="video-overlay" >
    <div class="form-body" >
        <div class="row justify-content-center" >

            <div class="form-holder" >

                <div class="form-content" style="padding-top: 100px">

                    <div class="form-items" >
                        <h3>Órák törlése:</h3>
                        <br>



                                <?php
                                $stmt = $db->prepare("SELECT * FROM orak INNER JOIN edzok ON orak.edzoID = edzok.userID");
                                $stmt->execute();
                                $fetched = $stmt->fetchAll();
                                foreach ($fetched as $item) :?>
                                    <p style="height: 1px">Edző: <?=$item['nev']?><p>
                                    <p style="height: 1px">Dátum: <?=$item['datum']?><p>
                                    <p style="height: 1px">Típus: <?=$item['tipus']?><p>
                                    <p style="height: 1px">Ár: <?=$item['ar']?> Ft<p>
                                    <form method="post" action="/admin.php" >
                                        <input type="hidden" name="oraID" value="<?=$item['oraID']?>"/>
                                        <input style="horiz-align: left" class="btn btn-outline-primary" type="submit" name="submit" value="Törlés">
                                    </form>
                                <?php endforeach;?>



                    </div>

                    <div class="form-items" >
                        <h3>Órák hozzáadása adatbázishoz:</h3>
                        <br>

                        <form method="post" action="admin.php">
                            <div class="col-md-12">
                                <select name="edzo" id="edzo">
                                    <?php foreach ($stmt_edzok as $edzo): ?>
                                        <option value="<?=$edzo['userID']?>"><?=$edzo['nev']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="datetime-local" name="datum" id="datum">
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="tipus" id="tipus" placeholder="Írd be a típust! " >
                            </div>
                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="number" id="ar" name="ar" min="1" placeholder="Írd be az árat!" >
                            </div>

                            <div class="form-button mt-3">
                                <input id="hozza" name="hozza" type="submit" class="btn btn-primary" value="Óra hozzáadása">
                            </div>
                        </form>

                    </div>


                </div>

            </div>




        </div>
    </div>



</div>

</body>





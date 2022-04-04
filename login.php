<?php require_once "config.php";



if(isset($_POST["login"])){
    $error = [];
    if(!isset($_POST["username"]) || $_POST["username"] == "" || strlen($_POST["username"]) > 30){
        $error[]= "A felhasználnév nem lett helyesen megadva!";
    }
    if(!isset($_POST["password"]) || $_POST["password"] == "" || strlen($_POST["password"]) > 40){
        $error[]= "A jelszó nem lett helyesen megadva!";
    }

    if(count($error) > 0){
        foreach ($error as $value)
        echo $value. PHP_EOL;
        exit;
    }
    $stmt = $db->prepare("SELECT * FROM felhasznalo WHERE nev = :nev");
    $stmt->bindValue(":nev", $_POST["username"]);
    $stmt->execute();
    $fetch = $stmt->fetch();
    if($fetch['jelszo'] == md5($_POST['password']))
    {
        $_SESSION['userID'] = $fetch['id'];
        header("location: /index.php");
    }
    else{
        echo $fetch['jelszo'];
        echo "<br>";
        echo md5($_POST['password']);
        die("Rák");
    }


}



?>

<head>

    <meta charset="utf-8">


    <!--    <meta name="author" content="">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">-->

    <title >Fitness Vital</title>


    <link rel="icon" href="assets/images/logo.jpg" type="image/icon type">


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!--    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">-->

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    <link rel="stylesheet" href="assets/css/formStyle.css">

</head>

<body>






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

                        <li class="main-button"><a href="register.php" style="color: black">Regisztráció</a></li>


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


<body style="background-color: #1d2124">

<!-- ***** Main Banner Area Start ***** -->


<div class="video-overlay" >
    <div class="form-body">
        <div class="row justify-content-center">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Lépj be a fiókodba</h3>
                        <p>Töltsd ki a mezőket</p>
                        <form action="login.php" method="post" class="requires-validation" novalidate>


                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Felhasználó" required>
                                <div class="valid-feedback">"Email" helyesen megadva!</div>
                                <div class="invalid-feedback">"Email" nem lehet üres!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
                                <div class="valid-feedback">"Jelszó" helyesen megadva!</div>
                                <div class="invalid-feedback">"Jelszó" nem lehet üres!</div>
                            </div>
                            <div class="form-button mt-3">
                                <button id="login" type="submit" name="login" class="btn btn-primary">Belépés</button>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>

    </div>



</div>






<div style="position: fixed;bottom: 0px ;width:100%;">
    <?php include "footer.php"?>
</div>






</body>





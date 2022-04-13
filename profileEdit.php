<?php
require_once "config.php";



if (isset($_POST['submit'])){

    $stmt = $db->prepare("UPDATE felhasznalo SET nev =:nev, email =:email ,jelszo =:jelszo  WHERE felhasznalo.id = :id ");
    $stmt->bindValue(":nev", $_POST["username"]);
    $pw = md5($_POST["password"]);
    $stmt->bindValue(":email", $_POST["email"]);

    $stmt->bindValue(":jelszo", $pw);
    $stmt->bindValue(":id", $_SESSION['userID']);

    if($stmt->execute())
    {
        echo "Sikeres!";
    }
    else{
        die("Hiba");
    }


    $_SESSION['nev'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];
    $_SESSION['email'] = $_POST['email'];

    header("Location: /profile.php");
}



require_once "kisheader.php";

?>

<body>
<div class="video-overlay">
    <div class="form-body">
        <div class="row justify-content-center">


            <div class="form-holder">

                <div class="form-content">

                    <div class="form-items">
                        <h3>Add meg az új adataidat!</h3>
                        <?php for ($i = 0; $i < 6 ; $i++): ?>


                        <img src="assets/images/line-dec.png">

                            <?php endfor; ?>

                        <p>Amennyiben változatlanul szeretné hagyni az egyes mezőket, akkor azokat <br> amezőket üresen kell hagyni. (amennyiben a jelszót ne szeretné változtatni<br> akkor írja be a motani jelszavát!) </p>

                        <form action="profileEdit.php" method="post" class="requires-validation" novalidate >


                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" value="<?= $_SESSION["nev"] ?>" >
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" value="<?= $_SESSION['email'] ?>" >

                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password"  placeholder="Ide írd az új jelszót! " >
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary">Adatok Frissítése</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


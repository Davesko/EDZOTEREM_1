<?php require_once "config.php";



if(isset($_POST["submit"])){
    $error = [];
    if(!isset($_POST["username"]) || $_POST["username"] == "" || strlen($_POST["username"]) > 30){
        $error[]= "A felhasználnév nem lett helyesen megadva!";
    }
    if(!isset($_POST["password"]) || $_POST["password"] == "" || strlen($_POST["password"]) > 40){
        $error[]= "A jelszó nem lett helyesen megadva!";
    }
    if(!isset($_POST["email"]) || $_POST["email"] == ""){
        $error[]= "Az email nem lett helyesen megadva!";
    }
    if(count($error) > 0){
        if ($error[0]){
            echo $error[0];
        }
        if ($error[1]){
            echo $error[1];
        }
        if ($error[2]){
            echo $error[2];
        }
        exit;
    }
    $stmt = $db->prepare("INSERT INTO felhasznalo (nev, jelszo, email, nem, web_admin) VALUE(:nev, :jelszo, :email, :nem, :jog)");
    $stmt->bindValue(":nev", $_POST["username"]);
    $pw = md5($_POST["password"]);
    $stmt->bindValue(":jelszo", $pw);
    $stmt->bindValue(":nem", $_POST["gender"]);
    $stmt->bindValue(":email", $_POST["email"]);
    $stmt->bindValue(":jog", 0);
    if($stmt->execute())
    {
        echo "Sikeres reg!";
    }
    else{
        die("Hiba");
    }
}

if (isset($_POST['submit'])){
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];
    $_SESSION['admin'] = 1;
}


?>
<?php
require_once "kisheader.php";
?>


<body style="background-color: #1d2124">

<!-- ***** Main Banner Area Start ***** -->




<div class="video-overlay" >
        <div class="form-body">
            <div class="row justify-content-center">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Regisztrálj te is</h3>
                            <p>Töltsd ki a mezőket</p>
                            <form action="register.php" method="post" class="requires-validation" novalidate >

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="username" placeholder="Felhasználó" required>

                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail címed" required>

                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="password" name="password" placeholder="Jelszó" required>

                                </div>


                                <div class="col-md-12 mt-3">
                                    <label class="mb-3 mr-1" for="gender">Nemed: </label>

                                    <input type="radio" value="0" class="btn-check" name="gender" id="male" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="male">Férfi</label>

                                    <input type="radio" value="1" class="btn-check" name="gender" id="female" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="female">Nő</label>

                                    <input type="radio" value="2" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="secret">Egyéb</label>

                                </div>


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label">Elfogadom a szerződési feltételeke!</label>

                                </div>


                                <div class="form-button mt-3">
                                    <button id="submit" name="submit" type="submit" class="btn btn-primary">Regisztráció</button>
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





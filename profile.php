<?php
require_once "config.php";
require_once "kisheader.php";
if(!isset($_SESSION['id']) || $_SESSION['id'] == null || $_SESSION['id'] == ""){
    header('Location: /index.php');
}

if(isset($_POST['torles'])){
    $stmt_delete = $db->prepare("UPDATE orak SET userID = NULL WHERE oraID = :ora");
    $stmt_delete->bindValue(":ora", $_POST['oraID']);
    $stmt_delete->execute();
}

if(isset($_POST['submit'])){
    $stmt_update = $db->prepare("UPDATE orak SET userID = :userID WHERE oraID = :oraID");
    $stmt_update->bindValue(":userID", $_SESSION['id']);
    $stmt_update->bindValue(":oraID", $_POST['oraID']);
    $stmt_update->execute();
}

$stmt = $db->query("SELECT * FROM orak INNER JOIN edzok ON edzok.userID = orak.edzoID WHERE orak.userID IS NULL");
$stmt->execute();
$orak = $stmt->fetchAll();
?>
<html style="background-color: white;">
<body >
<div class="video-overlay" >
    <div class="form-body">
        <div class="row justify-content-center">


            <div class="form-holder"  style="padding-top: 30px ">


                <div class="form-content">

                    <div class="form-items">

                        <h1 style="align-content: center">Profilod Adatai:</h1>



                        <br>

                        <table class="table justify-content-center" style="color: white; width: 1000px">

                            <thead class="align-middle">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Felhasználóneved: </th>
                                <td><?php echo strtoupper($_SESSION['nev'])?></td>

                            </tr>
                            <tr>
                                <th scope="row">E-mail címed: </th>
                                <td><?php echo strtoupper($_SESSION['email'])?></td>

                            </tr>
                            <tr>
                                <th scope="row">Nemed: </th>
                                <td><?php if ($_SESSION['nem'] == 0){
                                        echo "Férfi";
                                    }
                                    elseif ($_SESSION['nem'] == 1){
                                        echo "Nő";
                                    }
                                    else{
                                        echo "Egyéb";
                                    }
                                    ?></td>

                            </tr>

                            </tbody>
                        </table>

                        <button class="btn btn-outline-primary"> <a href="profileEdit.php">Profilod szerkesztése</a></button>
<!--                        <input  class="btn btn-outline-primary" type="submit" name="submit" value=" Profilod szereksztése">-->


                        <br>
                        <br>
                        <br>
                        <form action="profile.php" method="post" class="requires-validation" novalidate>
                                <h3>Szeretne órákra jelentkezni?</h3>
                                <h5>Itt megteheti!</h5>


                                <select name="oraID">
                                    <option selected disabled> Kérjük válassz ki egy órát! </option>
                                    <?php foreach ($orak as $ora):?>
                                    <?php $sor = $ora['tipus']  . " - " . $ora['nev']  ." - " . $ora['datum'] . " - " . $ora['ar'] . " Forint";?>
                                        <option value="<?=$ora['oraID']?>"><?=$sor?></option>
                                    <?php endforeach;?>
                                </select>

                                <br>
                                <br>
                                <input class="btn btn-outline-primary" type="submit" name="submit" value="Foglalás">
                         </form>

                        <table class="table justify-content-center" style="color: white; width: 1000px>

                            <thead class="align-middle">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <th scope="row">Fogalt óráid: </th>
                            <tr><td></td></tr>



                            </tr>

                                <?php
                                $stmt = $db->prepare("SELECT * FROM orak WHERE `userID` = :userID");
                                $stmt->bindValue(":userID", $_SESSION['id']);
                                $stmt->execute();
                                $lefoglaltorak = $stmt->fetchAll();
                                $ar = 0
                                ?>

                                <?php foreach ($lefoglaltorak as $egyora):?>
                                    <?php $ar = $ar + $egyora['ar'];
                                    $sor = $egyora['tipus']  . " - "  . $egyora['datum'] . " - " . $egyora['ar'] . " Forint";?>
                                    <tr>
                                        <td style="font-size: 15px; height: 20px"><?php echo($sor); ?>
                                            <form action="profile.php" method="post">
                                                <input type="hidden" name="oraID" value="<?=$egyora['oraID']?>">
                                                <input type="submit" name="torles" value="Lemondás" class="btn btn-outline-primary" style="font-size: 10px">
                                            </form>
                                        </td>

                                    </tr>


                                <?php endforeach;?>
                            <tr><td></td></tr>
                            <tr><td>Eddig óráid összege: <b> <?php echo $ar?> Forint <b></td></tr>







                            </tbody>
                        </table
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>

</div>


</body>
</html>



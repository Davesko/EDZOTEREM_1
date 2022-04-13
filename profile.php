<?php
require_once "config.php";
require_once "kisheader.php";
if(!isset($_SESSION['userID']) || $_SESSION['userID'] == null || $_SESSION['userID'] == ""){
    header('Location: /index.php');
}

if(isset($_POST['submit'])){
    $stmt_update = $db->prepare("UPDATE orak SET userID = :userID WHERE oraID = :oraID");
    $stmt_update->bindValue(":userID", $_SESSION['userID']);
    $stmt_update->bindValue(":oraID", $_POST['oraID']);
    $stmt_update->execute();
}

$stmt = $db->query("SELECT * FROM orak INNER JOIN edzok ON edzok.userID = orak.edzoID WHERE orak.userID IS NULL");
$stmt->execute();
$orak = $stmt->fetchAll();
?>

<body>
<div class="video-overlay">
    <div class="form-body">
        <div class="row justify-content-center">


            <div class="form-holder">

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
                                    else{
                                        echo "Nő";
                                    }
                                    ?></td>

                            </tr>

                            </tbody>
                        </table>

                        <button class="btn btn-outline-primary"> <a href="profileEdit.php">Profilod szereksztése</a></button>
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
                                    <?php $sor = $ora['tipus']  . " - " . $ora['nev']  ." - " . $ora['datum'] . "-" . $ora['ar'] . " Forint";?>
                                        <option value="<?=$ora['oraID']?>"><?=$sor?></option>
                                    <?php endforeach;?>
                                </select>

                                <br>
                                <br>
                                <input class="btn btn-outline-primary" type="submit" name="submit" value="Foglalás">
                         </form>

                        <table class="table justify-content-center" style="color: white; width: 1000px">

                            <thead class="align-middle">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Fogalt óráid: </th>




                            </tr>

                                <?php
                                $stmt = $db->prepare("SELECT * FROM orak WHERE `userID` = :userID");
                                $stmt->bindValue(":userID", $_SESSION['userID']);
                                $stmt->execute();
                                $lefoglaltorak = $stmt->fetchAll();

                                ?>

                                <?php foreach ($lefoglaltorak as $egyora):?>
                                    <?php $sor = $egyora['tipus']  . " - " . $egyora['datum'] . "-" . $egyora['ar'] . " Forint";?>
                                    <tr><td><?php echo($sor); ?></td></tr>

                                <?php endforeach;?>






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



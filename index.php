<!DOCTYPE html>
<html lang="en">

    <?php
    $db = null;
    require_once "config.php";
    include "header.php";
    ?>


<body>


    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/boxos.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text" >
            <div class="caption">
                <?php if(isset($_SESSION["nev"])): ?>
                    <h6 ">Nézz be hozzánk egy edzésre <br><div style="font-size: 40px ;padding-top: 20px"><?=$_SESSION['nev']?></div></h6>
                <?php else:  ?>
                <h6>Nézz be hozzánk egy edzésre</h6>
                <?php endif;?>

                <h2>Fitness <em>Vital</em></h2>
                <?php if(!isset($_SESSION["id"])): ?>
                    <div class="main-button scroll-to-section">
                        <a href="register.php" style="font-size: 18px">Légy te is tag</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>




    <section class="section" id="prices">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Áraink<em></em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                    </div>
                </div>
            </div>
        </div>
    </section>

  <div class="container">
    <table class="table justify-content-center">

    <thead class="align-middle">
    <tr>
        <th scope="col"> </th>
        <th scope="col">FELNŐTT</th>
        <th scope="col">DIÁK</th>
        <th scope="col">ÉRVÉNYESSÉG</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1 alkalom</th>
        <td>1.200 Forint</td>
        <td>1.000 Forint</td>
        <td>1 nap</td>
    </tr>
    <tr>
        <th scope="row">10 alkalom</th>
        <td>11.000 Forint</td>
        <td>9.000 Forint</td>
        <td>30 nap</td>
    </tr>
    <tr>
        <th scope="row">20 alkalom</th>
        <td>20.000 Forint</td>
        <td>16.000 Forint</td>
        <td>60 nap</td>
    </tr>
    <tr>
        <th scope="row">1 havi</th>
        <td>11.000 Forint</td>
        <td>8.000 Forint</td>
        <td>30 nap</td>
    </tr>
    <tr>
        <th scope="row">1 év</th>
        <td>190.000 Forint</td>
        <td>150.000 Forint</td>
        <td>1 év</td>
    </tr>

    </tbody>
    </table>

  </div>
        <br>
        <br>
        <br>
        <br>
        <br>



    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>NE GONDOLKOZZ, <em>CSELEKEDJ</em> MÉG<em> MA</em>!</h2>
                        <p>Gyere be hozzánk egy edzésre, nem fogsz csalódni!</p>
                        <?php if(!isset($_SESSION["id"])): ?>
                        <div class="main-button scroll-to-section">
                            <a href="register.php">Legyél te is tag</a>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Külön<em>órák</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Válassz egy órát a specifikusabb és profibb edzés érdekében.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'>MAX training</a></li>
                  <li><a href='#tabs-2'>Funkcionális edzés</a></a></li>
                  <li><a href='#tabs-3'>Pilates</a></a></li>
                  <li><a href='#tabs-4'>Aerobic</a></a></li>

                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/max_kiskep.jpg" alt="First Class">
                    <h4> MAX training<br>(Muscle Activity Excellence)</h4>
                    <p>A MAX Training egy szuper intenzív atletikus egész testes edzés amelynek fókuszában az izom és alakformálás áll. Kiválóan alkalmas zsírégetésre is.</p>
                    <div class="main-button">
                        <a href="/MAXTraining.php">Mutass Többet</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/fukncionalis-edzes_kiskep.jpg" alt="Second Training">
                    <h4>Funkcionális edzés</h4>
                    <p>A funkcionális edzésen akár saját testsúllyal, akár más súllyal, olyan gyakorlatokat végzünk amelyekkel az egész testet átmozgatjuk.</p>
                    <div class="main-button">
                        <a href="funkc.php">Mutass Többet</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/pilates_kiskep.jpg" alt="Pilates">
                    <h4>Pilates</h4>
                    <p>A pilates tornagyakorlatok segítségével megnő az izmok és az ízületek állóképessége, csökken a sérülékenységük, illetve egy esetleges sérülésnél gyorsabb a regenerálódásuk.</p>
                    <div class="main-button">
                        <a href="pilates.php">Mutass Többet</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="assets/images/aerobic_kiskep.jpg" alt="Aerobic">
                    <h4>Aerobic</h4>
                    <p>Az aerobik a fizikai gyakorlatok egy formája, amely egyesíti a ritmikus aerob gyakorlatokat a nyújtással és az erősítő edzéssel, azzal a céllal, hogy javítsa az edzettség minden elemét</p>
                    <div class="main-button">
                        <a href="aerobic.php">Mutass Többet</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>

    
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Menet<em>rendünk</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Tekintsd meg hogy milyen órákra tusz bejelentkezni nálunk <br> Az órákra jelentkezéshez jelentkezz be, vagy regisztrálj!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Hétfő</li>
                            <li data-tsfilter="tuesday">Kedd</li>
                            <li data-tsfilter="wednesday">Szerda</li>
                            <li data-tsfilter="thursday">Csütötök</li>
                            <li data-tsfilter="friday">Péntek</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">MAX</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00 - 11:00</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00 - 11:00</td>

                                    <td>Dobóczy Maja</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Zsírégető kondi</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00 - 11:00</td>
                                    <td class="wednesday friday ts-item " data-tsmeta="wednesday" data-tsmeta="friday">10:00 - 11:00</td>

                                    <td>Pálfy Kriszti</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Pilates</td>
                                    <td class="monday ts-item show " data-tsmeta="monday">10:00 - 11:00</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00 - 11:00</td>

                                    <td>Kiss Réka</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="monday ts-item " data-tsmeta="monday">13:20 - 14:50</td>
                                    <td class="wednesday friday ts-item " data-tsmeta="wednesday" data-tsmeta="friday">10:00 - 11:00</td>

                                    <td>Nagy Zsuzsa</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Funkcionális edzés</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00 - 11:00</td>
                                    <td class="wednesday friday ts-item " data-tsmeta="wednesday" data-tsmeta="friday">10:00 - 11:00</td>

                                    <td>Szalay Dávid</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Személyi <em>Edzőink</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Szeretnél helyesen és profin edzeni? Válassz a személyi edzőink közül</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/palzsuzsa.jpg"   alt="">
                        </div>
                        <div class="down-content">
                            <span>Személyi edző</span>
                            <h4>Pál Zsuzsanna</h4>
                            <p>A nevem Pál Zsuzsanna, számomra mindig is fontos volt az egészséges életmód, a mozgás és a sport.
                                Ezért döntöttem úgy, hogy személyi edzésesel és aerobik oktatássl szeretnék foglalkozni. Több évig versenyeztem
                                fitness modell kategóriában. Tanulmányaimat a TF-en, valamint az IFBB szakedző iskolájában végeztem testépítés-fitness szakirányban.
                                <br>
                                <br>
                                Szívesen segítek céljaid elérésében, legyen az akár alakformálás, testzsír csökkentés, állóképesség fejlesztés, izomzat erősítés vagy általános közérzetjavítás.
                            </p>
                            <ul class="social-icons">
                                <li><a href="#">+36 30 2235990<i class="fa fa-facebook"></i></a></li>
                                <li><a href="#">palzsuzsa237@gmail.com<i class=""></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/david.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Személyi edző</span>
                            <h4>Éliás-Szalay Dávid</h4>
                            <p>A sport szeretetét már gyerekkorom óta fontosnak érzem. Fiatalkorom a labdarúgás köré épült fel, közel 12 éven keresztül amatőr szinten, igazolt
                                </br></br>
                                játékosként, versenyszerűen űztem a labdarúgást. A ranglétra összes fokát végigjárva, a serdülőtől a felnőtt csapatig mindenhol igyekeztem a lehető
                                </br></br>
                                legjobbat kihozni magamból, erősítve a csapatot. Kitartásom és elhivatottságom töretlen volt. Ezen időszak alatt, számos dolgot tanultam. A heti három
                                </br></br>
                                edzés megtanított a megfelelő hozzáálláshoz,
                                a küzdeni akaráshoz, a felelősségérzethez. Ez a sport segített hozzá
                                </br></br>
                                a csapatban való együttműködéshez, kapcsolatok kialakításához.</p>
                            <ul class="social-icons">
                                <li><a href="#">+36 30 4562341<i></i></a></li>
                                <li><a href="#">szalaydavid@gmail.com<i class="pho"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/orsai.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Személyi edző</span>
                            <h4>Orsai Gergely</h4>
                            <p>Fiatalon számos sportág kipróbálása után a kézilabda lett az a sport, amelyet egészen 18 éves koromig eredményesen űztem. Sajnos egy sérülés miatt pályafutásomat egy időre befejeződött.
                            </br></br>
                            Pár év elteltével azonban éreztem, hogy hiányzik a mozgás, így jutottam el egy konditerembe.
                            <br><br>
                            1992 óta foglalkozom testépítéssel, 2005 től versenyszerűen. Ez idő alatt tapasztaltam, tanultam meg, hogy mi kell ahhoz, hogy megőrizd egészséged és tested elképzelését szerre tudd alakítani.
                            <br><br>
                            Közben a Testnevelési Főiskolán Testépítő és fitness- oktató képesítést szereztem.
                            <br><br>
                            Ha úgy érzed, hogy nem vagy elégedett magaddal és változtatni szeretnél segítek abban, hogy eligazodj a diéták és edzőgépek világában.


                            </p>
                            <ul class="social-icons">
                                <li><a href="#">+36 30 9500550<i></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Le%C3%A1nyfalu%20fitness%20vital&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <?php

                if (isset($_POST["submit"])){


                $stmt_add = $db->prepare("INSERT INTO kontakt (nev, email, targy, tartalom) VALUES ( :nev, :email, :subject, :message)");
                $stmt_add->bindValue(":nev", $_POST["name"]);
                $stmt_add->bindValue(":email", $_POST["email"]);
                $stmt_add->bindValue(":subject", $_POST["subject"]);
                $stmt_add->bindValue(":message", $_POST["message"]);
                $stmt_add->execute();
                }
                ?>

                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" method="post" action="/index.php">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                  <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <input name="submit" type="submit" id="form-submit" class="main-button" value="Send Message">
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php include "footer.php"?>

</body>



</html>
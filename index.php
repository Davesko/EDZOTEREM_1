<!DOCTYPE html>
<html lang="en">

    <?php
    require_once "config.php";
    include "header.php";
    ?>


<body>

    <!-- *****  BANNER KEZDETE  ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/boxos.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text" >
            <div class="caption">
                <?php if(isset($_SESSION["nev"])): ?>
                <h6>Nézz be hozzánk egy edzésre <br><?=$_SESSION['nev']?></h6>
                <?php else:  ?>
                <h6>Nézz be hozzánk egy edzésre</h6>
                <?php endif;?>
                <h2>Fitness <em>Vital</em></h2>
                <?php if(!isset($_SESSION["userID"])): ?>
                    <div class="main-button scroll-to-section">
                        <a href="register.php" style="font-size: 18px">Légy te is tag</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- ***** BANNER ***** -->




    <!-- ***** ÁRAK ***** -->



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


    <!-- ***** ÁRAK VÉGE ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>NE GONDOLKOZZ, <em>CSELEKEDJ</em> MÉG<em> MA</em>!</h2>
                        <p>Gyere be houzzánk egy edzésre, nem fogsz csalódni!</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Legyél te is tag</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
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
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">MAX training</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Funkcionális edzés</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Third Training Class</a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Fourth Training Class</a></a></li>
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/training-image-01.jpg" alt="First Class">
                    <h4> MAX training<br>(Muscle Activity Excellence)</h4>
                    <p>A MAX Training egy szuper intenzív atletikus egész testes edzés amelynek fókuszában az izom és alakformálás áll. Kiválóan alkalmas zsírégetésre is.</p>
                    <div class="main-button">
                        <a href="MAXTraining.php">Mutass Többet</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/training-image-02.jpg" alt="Second Training">
                    <h4>Funkcionális edzés</h4>
                    <p>A funkcionális edzésen akár saját testsúllyal, akár más súllyal, olyan gyakorlatokat végzünk amelyekkel az egész testet átmozgatjuk.</p>
                    <div class="main-button">
                        <a href="funkc.php">Mutass Többet</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/training-image-03.jpg" alt="Third Class">
                    <h4>Third Training Class</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="#">Mutass Többet</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="assets/images/training-image-04.jpg" alt="Fourth Training">
                    <h4>Fourth Training Class</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class="main-button">
                        <a href="#">Mutass Többet</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Menet<em>rendünk</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Tekintsd meg hogy milyen órákra tusz bejelentkezni nálunk</p>
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
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00 - 12:30</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00 - 3:30</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
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
                            <img src="assets/images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>MAX edző</span>
                            <h4>Dobóczy Maja</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

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




    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Le%C3%A1nyfalu%20fitness%20vital&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
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
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
<?php include "footer.php"?>

</body>



</html>
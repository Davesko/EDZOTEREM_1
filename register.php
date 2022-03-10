

<head>

    <meta charset="utf-8">


    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title >Fitness Vital</title>


    <link rel="icon" href="assets/images/logo.jpg" type="image/icon type">


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

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

                        <li class="main-button"><a href="register.php">Bejelentkezés</a></li>
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
                            <h3>Regisztrálj te is</h3>
                            <p>Töltsd ki a mezőket</p>
                            <form class="requires-validation" novalidate>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="name" placeholder="Teljes név" required>
                                    <div class="valid-feedback">Username field is valid!</div>
                                    <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail címed" required>
                                    <div class="valid-feedback">Email field is valid!</div>
                                    <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
                                    <div class="valid-feedback">Password field is valid!</div>
                                    <div class="invalid-feedback">Password field cannot be blank!</div>
                                </div>


                                <div class="col-md-12 mt-3">
                                    <label class="mb-3 mr-1" for="gender">Nemed: </label>

                                    <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="male">Férfi</label>

                                    <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="female">Nő</label>

                                    <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="secret">Egyéb</label>
                                    <div class="valid-feedback mv-up">You selected a gender!</div>
                                    <div class="invalid-feedback mv-up">Please select a gender!</div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label">Elfogadom a szerződési feltételeke!</label>
                                    <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                                </div>


                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Regisztráció</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>


</div>






<footer>
    <div class=" justify-content-center justify-content-lg-between p-4 border-bottom">
        <div>
            <div class="col-lg-12">
                <p style="color: black">Copyright &copy; 2022 FITNESS VITAL</p>





            </div>
        </div>
    </div>
</footer>
<?php //include "footer.php"?>





</body>





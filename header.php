<head>

    <meta charset="utf-8">
    <title>Fitness Vital</title>
    <link rel="icon" href="assets/images/logo.png" type="image/icon type">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="assets/css/stylesheet.css">



</head>

<body>


<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>




<header class="header-area header-sticky">
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.php" class="logo">FITNESS<em> VITAL</em></a>

                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">KEZDŐLAP</a></li>
                        <li class="scroll-to-section"><a href="#prices">ÁRAK</a></li>
                        <li class="scroll-to-section"><a href="#our-classes">ÓRÁK</a></li>
                        <li class="scroll-to-section"><a href="#schedule">MENETREND</a></li>
                        <li class="scroll-to-section"><a href="#trainers">EDZŐINK</a></li>
                        <li class="scroll-to-section"><a href="#contact-us">KONTAKT</a></li>
                        <?php if(!isset($_SESSION['id'])):?>
                        <li style="border: 2px solid #FFF200" class="scroll-to-section"><a href="login.php">BEJELENTKEZÉS</a></li>
                        <?php else:?>
                        <li style="border: 2px solid #FFF200" class="scroll-to-section" ><a href="logout.php">KIJELENTKEZÉS</a></li>
                            <li></li>
                        <?php if((int)$_SESSION['webAdmin'] > 0):?>
                        <li style="border: 2px solid #FFF200" class="scroll-to-section"><a href="admin.php">ADMIN</a></li>
                        <?php endif;?>
                        <?php endif;?>


                        <?php if(isset($_SESSION['id'])):?>
                        <a href="/profile.php" style="margin-left: 40px" class="scroll-to-section" >
                        <svg  xmlns="http://www.w3.org/2000/svg" style="color: grey" width="40" height="40" fill="currentColor" class="bi bi-person flex-fill" viewBox="0 0 15 15">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>

                        </svg>
                        </a>
                        <?php endif;?>









                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>


</header>









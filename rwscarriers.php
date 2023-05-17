<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Freight Logistics: Carriers | Raging Wolf Solutions</title>

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
</head>

<body is="dmx-app" id="index" class="bg-dark">

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container modules-container mt-0 mb-5 pb-5">
            <div class="row">
                <div class="pb-4 pl-1 pr-1 col-12 col-md-10">
                    <h5 class="text-uppercase text-yellow text-warning">carrier connection</h5>
                    <h1 class="text-light text-left">Interested in partnering with the PACK?</h1>
                    <p class="text-white-50 mb-4" style="max-width: 770px !important">Raging Wolf Solutions is always looking to expand its base of trusted, dedicated freight carrier partners. If you would like to move freight with us, please begin by downloading the PDF below.</p>
                    <form id="carrierform" is="dmx-form" novalidate="">
                        <div class="row">
                            <div class="text-left col-12">
                                <h5 class="text-light">1. Save a copy of our carrier packet.</h5>
                                <a target="_blank" rel="noopener noreferrer" is="dmx-link" href="assets/Raging%20Wolf%20Carrier%20Packet%20010323%281%29.pdf" data-lf-fd-inspected-kn9eq4r1yyr7rlvp="true">
                                    <button id="btn1" class="btn btn-secondary pl-3 pr-3 mb-4 pt-3 pb-3 ps-3 pe-3" is="dmx-button" value="" type="button"><i class="fa fa-download"></i>&nbsp;Download Carrier Packet</button>
                                </a>
                                <h5 class="text-light pt-2">2. Send the completed carrier packet to us.</h5>
                                <h5 class="text-primary text-truncate"><a class="text-white" is="dmx-link" href="mailto:support@ragingwolfsolutions.com">support@ragingwolfsolutions.com</a></h5>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
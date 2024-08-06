<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Your Cart</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lustria&family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
    <script src="dmxAppConnect/dmxVideo/dmxVideo.js" defer></script>

    <link rel="stylesheet" href="css/charity.css" />


    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/dmxSlideshow.css" />
    <script src="dmxAppConnect/dmxSlideshow/dmxSlideshow.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/themes/default.css" />
    <script src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/dmxTyped.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/typed.min.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxDatastore/dmxDatastore.js" defer></script>
</head>

<body is="dmx-app" id="index" class="bg-dark">

    <dmx-value id="strCart" dmx-bind:value="queryCart.data.items"></dmx-value>
    <dmx-array id="arrCart" dmx-bind:items="strCart.value.split('—')"></dmx-array>
    <dmx-query-manager id="queryCart"></dmx-query-manager>
    <dmx-json-datasource id="jsonDS1" is="dmx-serverconnect" url="js/wolfsden_v2.json"></dmx-json-datasource>
    <div is="dmx-browser" id="browser1"></div>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>




    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3" style="min-height: 75vh;">

        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container">

            <div class="row justify-content-center row-cols-12">
                <h1 class="col text-center text-warning" id="welcome">Echoes of the Pack: Unleash Your Voice</h1>
                <div class="" id="">
                </div>

            </div>

        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>

</body>

</html>
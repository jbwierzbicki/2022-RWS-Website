<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Freight Logistics: Carriers | Raging Wolf Solutions</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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
    <script>
        function initApollo(){var n=Math.random().toString(36).substring(7),o=document.createElement("script");
o.src="https://assets.apollo.io/micro/website-tracker/tracker.iife.js?nocache="+n,o.async=!0,o.defer=!0,
o.onload=function(){window.trackingFunctions.onLoad({appId:"663126372a6e2c01c71a0faf"})},
document.head.appendChild(o)}initApollo();
    </script>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "mrz6iftq48");
    </script>
    <script>
        !function(t){if(window.ko)return;window.ko=[],["identify","track","removeListeners","open","on","off","qualify","ready"].forEach(function(t){ko[t]=function(){var n=[].slice.call(arguments);return n.unshift(t),ko.push(n),ko}});var n=document.createElement("script");n.async=!0,n.setAttribute("src","https://cdn.getkoala.com/v1/pk_8f6e0e1be3ac9f1e37dea684410f7c092849/sdk.js"),(document.body || document.head).appendChild(n)}();
    </script>
</head>

<body is="dmx-app" id="index" class="bg-dark">

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container modules-container mt-0 mb-5 pb-5">
            <div class="row justify-content-center">
                <div class="pb-4 pl-1 pr-1 col-12 col-md-10 text-center">
                    <h5 class="text-uppercase text-yellow text-warning">Thank You For Your Submission</h5>
                    <h1 class="text-light text-left">We're excited to welcome you to the PACK!</h1>
                    <p class="text-white-50 fw-normal mb-5 ms-auto me-auto" style="max-width: 770px !important">If you would like to take a step further, Raging Wolf Solutions requires that new carriers submit a copy of our signed carrier packet to the team before hauling freight for RWS.</p>
                    <form id="carrierform" is="dmx-form" novalidate="">
                        <div class="row">
                            <div class="text-left col-12">
                                <h5 class="text-white-50">1. Save a copy of our carrier packet.</h5>
                                <a target="_blank" rel="noopener noreferrer" is="dmx-link" href="assets/Raging%20Wolf%20Carrier%20Packet%2011-12-24.pdf" data-lf-fd-inspected-kn9eq4r1yyr7rlvp="true">
                                    <button id="btn1" class="btn btn-secondary pl-3 pr-3 mb-4 ps-3 pe-3" is="dmx-button" value="" type="button"><i class="fa fa-download"></i>&nbsp;Download Carrier Packet</button>
                                </a>
                                <h5 class="pt-2 text-white-50">2. Send the completed carrier packet to us.</h5>
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
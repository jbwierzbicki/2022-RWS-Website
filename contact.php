<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Freight Logistics: Contact Us | Raging Wolf Solutions</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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
    <!-- Meta Pixel Code -->
    <script>
        function initApollo(){var n=Math.random().toString(36).substring(7),o=document.createElement("script");
o.src="https://assets.apollo.io/micro/website-tracker/tracker.iife.js?nocache="+n,o.async=!0,o.defer=!0,
o.onload=function(){window.trackingFunctions.onLoad({appId:"663126372a6e2c01c71a0faf"})},
document.head.appendChild(o)}initApollo();
    </script>
    <script>
        !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '990687025454946');
                fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=990687025454946&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

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

    <section id="modules" class="border-top rounded-1 rounded-0 border-secondary pb-3">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container modules-container mt-2 pb-5">
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
                                        <input id="name1" name="name" type="text" class="form-control mb-3" required="">
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
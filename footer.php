<!-- Wappler include head-page="index.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" jquery_slim_35="local" -->
<footer class="univ--footer module-card">
    <div class="container wappler-block univ--footer--container">
        <div class="row univ--footer--container--row watermark">

            <div class="col-12 col-sm-6 col-md-6 univ--footer--container--row--col">
                <h6 class="text-white mb-2 pb-1 ps-3 pe-3">Raging Wolf Solutions</h6>

                <p class="text-justify mb-4 ps-3 pe-3" id="about">Freight transportation and logistics coordination done right. We deal with air/ground expedites, full truckloads, partials, cargo vans, sprinter vans and straight trucks all across the country. Here, you can view the full list of our services, request a quote, or track a shipment!</p><img src="/assets/images/Twinsburg_CC_Logo.webp" dmx-on:click="browser1.goto('https://business.twinsburgchamber.com/list/member/raging-wolf-solutions-1022')" class="ms-3 img-fluid" loading="lazy" alt="Chamber Logo">




            </div>
            <!-- Second Column (Services - Using Absolute Position for Social) -->
            <div class="col-12 col-sm-6 col-md-3 univ--footer--container--row--col2 position-relative pb-5">
                <!-- Added position-relative and pb-5 -->

                <!-- Service links - No changes needed here -->
                <h6 class="text-white mb-2 pb-1 ps-3 pe-3">Services</h6>
                <ul class="list-group mb-3 pb-1">
                    <!-- You might add mb-5 here instead of pb-5 on parent if preferred -->
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/services-air.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Expedited Air</li>
                    </a>
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/services-ground.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Expedited Ground</li>
                    </a>
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/services-trucking.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Flatbed</li>
                    </a>
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/services-trucking.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Standard Trucking</li>
                    </a>
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/services-specialized.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Specialized Services</li>
                    </a>
                </ul>
                <!-- End Service links -->

                <!-- social media - Modified positioning classes -->
                <div class="social-media-links position-absolute bottom-0 start-0 end-0 mb-3 ms-4">
                    <!-- Added position-absolute bottom-0 start-0 end-0. Kept mb-3 for now, adjust if needed -->
                    <a href="https://www.facebook.com/RagingWolfSolutions" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook" class="text-light me-4">
                        <i class="fab fa-facebook-f fa-fw fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/ragingwolfsolutions/posts/?feedView=all&amp;viewAsMember=true" target="_blank" rel="noopener noreferrer" aria-label="Follow us on LinkedIn" class="text-light ms-1 me-5">
                        <i class="fab fa-linkedin-in fa-fw fa-2x"></i>
                    </a>
                    <!-- Add other social icons here -->
                </div>
            </div> <!-- End Second Column -->
            <div class="col-12 col-sm-6 col-md-3 univ--footer--container--row--col3">
                <h6 class="text-white mb-2 pb-1 ps-3 pe-3">Quick Links</h6>
                <ul class="list-group mb-3 pb-1">
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/index.php">
                        <li class="list-group-item univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0 bg-transparent">Home</li>
                    </a>
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/about.php">
                        <li class="list-group-item univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0 bg-transparent">About Us</li>
                    </a>
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/tracking.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Track a Shipment</li>
                    </a>
                    <a is="dmx-link" href="#" tabindex="0" dmx-on:click="quote_modal.show()">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0" dmx-on:click="quote_modal.show()">Start a Quote</li>
                    </a>

                    <a is="dmx-link" href="https://ragingwolfsolutions.com/contact.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Contact Us</li>
                    </a>
                    <a is="dmx-link" href="https://ragingwolfsolutions.com/careers.php">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Careers</li>
                    </a>
                    <a href="#" dmx-on:click="bugReportModal.show()">
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0">Report a Bug</li>
                    </a>
                    <a is="dmx-link" href="testimonials.php">
                        <!-- REMOVE HIDDEN WHEN READY TO PUBLISH -->
                        <li class="list-group-item bg-transparent univ--footer--container--row--col--li border-0 pt-0 pb-0 pl-0 pr-0 disabled visually-hidden">Testimonials</li>
                    </a>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container wappler-block">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-9">
                <p>Copyright © 2023 All Rights Reserved by Raging Wolf Solutions.</p>
            </div>
        </div>
    </div>
    <script>
        (function(){

    window.ldfdr = window.ldfdr || {};
    (function(d, s, ss, fs){
      fs = d.getElementsByTagName(s)[0];

      function ce(src){
        var cs  = d.createElement(s);
        cs.src = src;
        setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1);
      }

      ce(ss);
    })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_kn9Eq4R1Yyr7RlvP.js');
  })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-L9SVTQ69KT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L9SVTQ69KT');
    </script>

</footer>
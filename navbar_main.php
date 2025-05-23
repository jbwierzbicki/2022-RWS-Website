<!-- Wappler include head-page="index.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" jquery_slim_35="local" components="{dmxValidator:{},dmxBrowser:{},dmxBootstrap5Navigation:{},dmxBootstrap5Modal:{}}" -->
<div is="dmx-browser" id="browser1"></div>
<header class="border-top rounded-1 border-secondary rounded-0 pb-0" id="navbar_main">
    <div class="modal" id="services_modal" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">

                <div class="modal-header bg-dark border-0">

                </div>
                <div class="modal-body bg-dark text-center">
                    <div class="container">
                        <h2 class="modal-title text-white w-100 text-center mt-3 mb-3">Our Service Categories Include</h2>
                        <h4 class="fw-normal mb-3 hover-cursor"><a href="services-air.php" class="text-decoration-none text-warning">Expedited Air</a></h4>
                        <h4 class="text-warning fw-normal mb-3 hover-cursor"><a href="services-ground.php" class="text-decoration-none text-warning">Expedited Ground</a></h4>
                        <h4 class="text-warning fw-normal mb-3 hover-cursor"><a href="services-specialized.php" class="text-decoration-none text-warning">Specialized Services</a></h4>
                        <h4 class="text-warning fw-normal hover-cursor"><a href="services-trucking.php" class="text-decoration-none text-warning">Standard Trucking</a></h4>
                    </div>




                </div>
                <div class="modal-footer bg-dark justify-content-center border-top border-1 border-secondary"><button type="button" class="btn btn-lg btn-outline-secondary mt-2 mb-2 ps-5 pe-5" data-bs-dismiss="modal"><i class="fas fa-arrow-left"></i>&nbsp;Go Back</button></div>
            </div>
        </div>
    </div>
    <div class="container-xl header-container ps-3 pe-3">
        <nav class="header-navbar navbar navbar-expand-lg navbar-dark bg-transparent align-items-stretch pt-0 pb-0">

            <!-- Quote Modal -->
            <div class="modal" id="quote_modal" is="dmx-bs5-modal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content border-secondary border-2 pb-0">

                        <dmx-value id="quote_submitted" dmx-bind:value="0"></dmx-value>
                        <form method="post" action="https://staff.my.salesforce-sites.com/services/apexrest/newquote" dmx-on:submit="quote_submitted.setValue(1)" is="dmx-api-form" id="quote_form" post-data="json">
                            <div class="modal-header bg-dark text-white border-bottom-0 pb-2 ps-4 pe-4">
                                <h5 class="modal-title">Get started with a free quote.</h5>
                                <button class="btn-close small me-0" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body bg-dark pt-2 pb-2 ps-4 pe-4">


                                <div class="row" dmx-hide="(quote_submitted.value==1)">
                                    <div class="col-12">
                                        <div class="form-group md-3 text-white mt-0 mb-2"> <label for="puzip" class="form-label col-form-label-sm mb-0" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp;Pickup</label>
                                            <input type="text" class="form-control form-control-sm" id="puzip" name="PickupLocationc" placeholder="ZIP or City, State" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group md-3 text-white mt-0 mb-2"> <label for="delzip" class="form-label col-form-label-sm mb-0" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp;Delivery</label>
                                            <input type="text" class="form-control form-control-sm" id="delzip" name="DeliveryLocationc" placeholder="ZIP or City, State" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group md-3 text-white mt-0 mb-2"> <label for="details" class="form-label col-form-label-sm mb-0" wappler-command="editContent">Freight Details</label>
                                            <input type="text" class="form-control form-control-sm" id="details" name="CommodityDetailsc" placeholder="Units, weight, dims, etc." required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group md-3 text-white mt-0 mb-4"> <label for="remarks" class="form-label col-form-label-sm mb-0" wappler-command="editContent">Other Notes</label>
                                            <input type="text" class="form-control form-control-sm" id="remarks" name="AdditionalNotesc" placeholder="Optional notes here">
                                        </div>
                                    </div>
                                    <div class="col-12 text-white">
                                        <div class="form-group md-3 mt-0 mb-4 text-white"> <label for="input1" class="form-label col-form-label-sm mb-0" wappler-command="editContent">Is Direct Delivery Required?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="input1" name="DeliverDirectRequiredc" dmx-on:checked="bgvideo1.direct_confirmed.setValue(1)">
                                                <label class="form-check-label small" for="input1">Yes, direct delivery is required!</label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-12">
                                        <div class="module-card form-group md-3 text-center border border-secondary rounded border-2 text-light mt-0 mb-2 pt-3 pb-3 ps-3 pe-3"> <label for="replyemail" class="form-label mb-2 fw-bold"><i class="far fa-envelope"></i> Your Email Address</label>
                                            <input type="email" class="form-control text-center mb-2" id="replyemail" name="CustomerNamec" placeholder="Your email address" required="">
                                            <p class="small text-white-50 text-center mb-1 pt-1 lh-sm" wappler-command="editContent">Contact information submitted through this quote request form will not be shared with any party outside of Raging Wolf Solutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="quote_confirmed" is="dmx-if" dmx-bind:condition="(quote_submitted.value==1)">
                                    <div class="row">
                                        <div class="col gx-5">
                                            <h1 class="text-success text-center display-4"><i class="far fa-check-circle"></i></h1>
                                            <h3 class="text-light text-center">Your quote was submitted.</h3>
                                            <h6 class="text-light text-center fw-normal">Our team will follow up with you at the email address provided in your submission. Thank you!</h6>
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div class="modal-footer bg-dark border-top-0 pt-0">
                                <button id="btn6" class="fw-bold btn module-cta-btn btn-warning w-100 btn-sm lh-lg mt-2 mb-2 text-truncate" wappler-command="editContent" type="submit" dmx-hide="(quote_submitted.value==1)" dmx-on:click="quote_form.submit()">Quote Me&nbsp;<i class="fas fa-caret-right"></i></button>

                                <button id="btn7" class="fw-bold btn module-cta-btn w-100 btn-sm lh-lg mt-2 mb-2 text-truncate btn-outline-secondary" wappler-command="editContent" data-bs-target="#quote_modal" dmx-show="(quote_submitted.value==1)" dmx-on:click="quote_modal.hide()"><i class="fas fa-caret-left"></i>&nbsp;Go Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- End Quote Modal -->




            <a class="navbar-brand mt-1 mb-1 align-self-center" href="https://ragingwolfsolutions.com/index.php">
                <img alt="logo goes to home page" img src="../assets/images/navbar-logo.webp" class="logo-img"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1_collapse" aria-controls="navbar1_collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-stretch" id="navbar1_collapse">
                <div class="navbar-nav align-items-stretch text-center">
                    <a class="nav-item nav-separator ms-2 me-2"></a><a class="nav-item nav-link active rws-nav-item" href="https://ragingwolfsolutions.com/index.php">Home</a>
                    <a class="nav-item nav-separator ms-2 me-2"></a><a class="nav-item nav-link active rws-nav-item" href="https://ragingwolfsolutions.com/blog">News</a>
                    <a class="nav-item nav-separator ms-2 me-2"></a>




                    <a class="nav-item nav-link rws-nav-item" href="#" data-bs-toggle="modal" data-bs-target="#services_modal" dmx-on:click="services_modal.show()">Services</a>
                    <a class="nav-item nav-separator ms-2 me-2"></a>
                    <a class="nav-item nav-link rws-nav-item" href="https://ragingwolfsolutions.com/tracking.php">Track</a>
                    <a class="nav-item nav-separator ms-2 me-2"></a>
                    <a class="nav-item nav-link rws-nav-item" href="https://ragingwolfsolutions.com/rwscarriers.php">Carriers</a>
                    <a class="nav-item nav-separator ms-2 me-2"></a>
                    <!-- REMOVE HIDDEN/disabled WHEN READY TO PUBLISH -->
                    <a class="nav-item nav-link rws-nav-item disabled visually-hidden" href="testimonials.php">Testimonials</a>
                    <a class="nav-item nav-separator ms-2 me-2 visually-hidden"></a>

                    <a class="nav-item nav-link rws-nav-item" href="https://ragingwolfsolutions.com/contact.php">Contact</a>

                    <a class="nav-item nav-separator ms-2"></a><a class="justify-content-center nav-item nav-link bg-warning new_quote fw-bolder ps-4 pe-4 rws-nav-item" href="#" data-bs-toggle="modal" data-bs-target="#quote_modal">Quote Me</a>
                </div>
            </div>
        </nav>
    </div>

</header>
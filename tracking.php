<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Freight Logistics: Shipment Tracking | Raging Wolf Solutions</title>

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
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "lfqgizjy3r");
    </script>
</head>

<body is="dmx-app" id="index" class="bg-dark">
    <dmx-value id="location_request_submitted" dmx-bind:value="0"></dmx-value>
    <dmx-value id="tracking_base_url" dmx-bind:value="'https://staff.my.salesforce-sites.com/services/apexrest/Account/'"></dmx-value>
    <dmx-value id="load_ref"></dmx-value>
    <dmx-api-datasource id="tracking_api" is="dmx-fetch" dmx-bind:url="tracking_base_url.value+load_ref.value"></dmx-api-datasource>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <section id="modules" class="border-top rounded-1 rounded-0 border-secondary pb-5">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container pb-5 modules-container">
            <div class="row">

                <div class="col-md-12">
                    <div class="row mt-5 mb-5">
                        <div class="module-card col border rounded-0 rounded-1 border-secondary mt-5 mb-3 ms-3 me-3 pt-5 pb-5 ps-3 pe-3">
                            <h4 class="text-light lh-sm text-center text-uppercase mt-2 mb-3">Track Your Shipment Status</h4>
                            <p class="text-center mb-4 text-light">Find the status of your freight in our system and request a location update. We'll just need...</p>
                            <div class="modal text-light" id="location_update_modal" is="dmx-bs5-modal" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content border-secondary border-2 pb-0">
                                        <div class="modal-header bg-dark border-0">
                                            <h5 class="modal-title"><i class="fas fa-location-arrow"></i>&nbsp;Shipment Location Update</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-dark pt-1 pb-5" dmx-hide="(location_request_submitted.value==1)">

                                            <p>Location updates can only be shared via email in order to maintain confidentiality. <b>Please provide a valid point-of-contact email address for this load&nbsp;</b>and an update will be sent.</p>

                                            <div class="d-flex align-items-end justify-content-start">
                                                <form id="form_location_update" method="post" action="https://usebasin.com/f/dd70a6a52004" class="d-flex">
                                                    <div class="d-flex flex-wrap">

                                                        <p class="mb-1">Email Address</p>
                                                        <input id="email" name="email" type="email" class="form-control me-3" required="" data-rule-email="">
                                                        <input id="form_message" name="text1" type="text" class="form-control visually-hidden" dmx-bind:value="'Please provide '+email.value+' with a location update for load '+load_ref.value" readonly="true">
                                                    </div>
                                                    <button id="btn2" class="module-cta-btn btn btn-warning text-nowrap text-uppercase mt-4 pt-2 pb-2" type="submit">Submit&nbsp;<i class="fas fa-caret-right"></i></button>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="modal-body bg-dark pt-1 pb-5" dmx-show="(location_request_submitted.value==1)">

                                            <p>Thank you for submitting this tracking request. If your email is valid for this load, a member of our team will contact you with an update shortly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="text-white-50 mb-2">Your Load Reference Number</p>
                                    <input id="load_ref_input" name="Load Ref Input" type="text" class="form-control mb-3" required="" minlength="5" data-msg-minlength="Your reference number should be at least 5 digits." maxlength="5" data-msg-maxlength="Your reference number should be no more than 5 digits.">
                                </div>

                                <div class="col-md-8"><button id="btn4" class="btn module-cta-btn btn-warning w-100 fw-bold mt-1 mb-3" wappler-command="editContent" dmx-on:click="load_ref.setValue(load_ref_input.value);tracking_api.load()">Submit&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button></div>
                                <div class="col-md-8" dmx-show="(tracking_api.data[0].FreightTM__Status__c=='Delivered' || tracking_api.data[0].FreightTM__Status__c=='En_Route' || tracking_api.data[0].FreightTM__Status__c=='Assigned' || tracking_api.data[0].FreightTM__Status__c=='Committed' || tracking_api.data[0].FreightTM__Status__c=='Cancelled')">
                                    <div class="container border border-1 rounded border-light mt-3 mb-2 pt-3 pb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="text-light fw-normal mb-0">Shipment Pickup</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Location</h6>
                                                <h6 class="text-light fw-normal" dmx-text="tracking_api.data[0].FreightTM__Pickup_State__c">N/A</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Date</h6>
                                                <h6 class="text-light fw-normal" dmx-text="tracking_api.data[0].Pickup_Arrival_Date__c">N/A</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="text-light fw-normal mt-4 mb-0">Shipment Delivery</h4>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Location</h6>
                                                <h6 class="text-light fw-normal" dmx-text="tracking_api.data[0].FreightTM__Delivery_State__c">N/A</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Date</h6>
                                                <h6 class="text-light fw-normal" dmx-text="tracking_api.data[0].Delivery_Arrival_Date__c">N/A</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="text-light fw-normal mt-4 mb-0">Additional Details</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Status</h6>
                                                <h6 class="text-light fw-normal" dmx-text="tracking_api.data[0].FreightTM__Status__c">N/A</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Reference #</h6>
                                                <h6 class="text-light fw-normal" dmx-text="load_ref.value">N/A</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Trailer</h6>
                                                <h6 class="text-light fw-normal" dmx-text="tracking_api.data[0].FreightTM__Trailer__c">N/A</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="fw-normal text-uppercase text-white-50 ls-1 mt-2 mb-1">Weight</h6>
                                                <h6 class="text-light fw-normal" dmx-text="tracking_api.data[0].FreightTM__Weight__c">N/A</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button id="btn1" class="btn btn-outline-warning mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#location_update_modal"><i class="fas fa-location-arrow"></i>&nbsp;Request Location</button>
                                            </div>
                                        </div>
                                    </div>
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
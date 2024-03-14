<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Shipment | Location Tracking</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.css" />
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <script src="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLPyBKLy4MIp6P7FeJE1OjOXARChjgo7E"></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "lfqgizjy3r");
    </script>
</head>

<body is="dmx-app" id="trakingph3" class="bg-dark">
    <dmx-query-manager id="load_ref_param"></dmx-query-manager>
    <dmx-api-datasource id="tracking_api" is="dmx-fetch" dmx-bind:url="tracking_base_url.value+load_ref.value"></dmx-api-datasource>
    <dmx-value id="load_ref" dmx-bind:value="load_ref_param.data.load_ref"></dmx-value>
    <dmx-value id="location_latitude" dmx-bind:value="tracking_api.data[0].Location__c.latitude"></dmx-value>
    <dmx-value id="location_longitude" dmx-bind:value="tracking_api.data[0].Location__c.longitude"></dmx-value>
    <dmx-value id="location_city"></dmx-value>
    <dmx-value id="location_state"></dmx-value>
    <dmx-value id="destination" dmx-bind:value="tracking_api.data[0].Delivery_Name_Address__c"></dmx-value>
    <dmx-value id="distance_remaining"></dmx-value>
    <dmx-value id="tracking_base_url" dmx-bind:value="'https://staff.my.salesforce-sites.com/services/apexrest/LoadLocationCustomerView/'"></dmx-value>
    <?php include 'navbar_mini'; ?>

    <header class="border-top rounded-1 border-secondary rounded-0 pb-2" id="navbar_main">
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
                            <form id="quote_form" method="post" action="https://staff.my.salesforce-sites.com/services/apexrest/newquote" is="dmx-api-form" post-data="json" dmx-on:submit="quote_submitted.setValue(1)">
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
                                    <button id="btn6" class="fw-bold btn module-cta-btn btn-warning w-100 btn-sm lh-lg mt-2 mb-2 text-truncate" wappler-command="editContent" type="submit" dmx-hide="(quote_submitted.value==1)" dmx-show="(bgvideo1.direct_confirmed.value==1)">Quote Me&nbsp;<i class="fas fa-caret-right"></i></button>
                                    <button id="btn_confirm_quote" class="fw-bold btn module-cta-btn btn-warning w-100 btn-sm lh-lg mt-2 mb-2 text-truncate" wappler-command="editContent" dmx-on:click="browser1.alert('You have indicated direct delivery is not required. Please click the \'Confirm\' button to proceed.');bgvideo1.direct_confirmed.setValue(1)" dmx-hide="(bgvideo1.direct_confirmed.value==1)">Quote Me&nbsp;<i class="fas fa-caret-right"></i></button>
                                    <button id="btn7" class="fw-bold btn module-cta-btn w-100 btn-sm lh-lg mt-2 mb-2 text-truncate btn-outline-secondary" wappler-command="editContent" data-bs-target="#quote_modal" dmx-show="(quote_submitted.value==1)" dmx-on:click="quote_modal.hide()"><i class="fas fa-caret-left"></i>&nbsp;Go Back</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- End Quote Modal -->

                <a class="navbar-brand mt-1 mb-1 align-self-center" href="index.php">
                    <img alt="logo goes to home page" img src="../assets/images/navbar-logo.webp" class="logo-img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1_collapse" aria-controls="navbar1_collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-stretch" id="navbar1_collapse">
                    <div class="navbar-nav text-center align-items-stretch">
                        <a class="nav-item nav-separator ms-2 me-2"></a><a class="nav-item nav-link active rws-nav-item align-self-center" href="index.php">Home</a>
                        <a class="nav-item nav-separator ms-2 me-2"></a><a class="nav-item nav-link active rws-nav-item align-self-center" href="https://ragingwolfsolutions.com/blog">News</a>
                        <a class="nav-item nav-separator ms-2 me-2"></a>




                        <a class="nav-item nav-link rws-nav-item align-self-center" href="#" data-bs-toggle="modal" data-bs-target="#services_modal" dmx-on:click="services_modal.show()">Services</a>
                        <a class="nav-item nav-separator ms-2 me-2"></a>
                        <a class="nav-item nav-link rws-nav-item align-self-center" href="tracking.php">Track Shipment</a>
                        <a class="nav-item nav-separator ms-2 me-2"></a>
                        <a class="nav-item nav-link rws-nav-item align-self-center" href="rwscarriers.php">Carriers</a>
                        <a class="nav-item nav-separator ms-2 me-2"></a>
                        <a class="nav-item nav-link rws-nav-item align-self-center" href="contact.php">Contact</a>

                        <a class="nav-item nav-separator ms-2"></a><a class="justify-content-center nav-item nav-link bg-warning new_quote fw-bolder rws-nav-item ps-4 pe-4" href="#" data-bs-toggle="modal" data-bs-target="#quote_modal">
                            <div class="d-flex h-100">
                                <h6 class="mb-0 align-self-center fw-bold">Quote Me</h6>
                            </div>

                        </a>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main class="min-vh-100 bg-dark text-warning">
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mt-5 mb-3">
                        <h1 style="font-family: Sansation; letter-spacing: 3px; font-weight: 700;" class="text-uppercase">Load Summary</h1>

                    </div>
                    <div class="row border-bottom pt-3">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="text-white-50 mb-3"><i class="fab fa-wolf-pack-battalion pe-2 fa-fw fa-lg"></i>&nbsp;Load Reference:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-light mb-3" dmx-text="tracking_api.data[0].Load_Reference__c"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="text-white-50 mb-3"><i class="fas fa-hashtag pe-2 fa-fw"></i>&nbsp;Customer PO:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-light mb-3" dmx-text="tracking_api.data[0].PO__c"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom pt-4">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="text-white-50 mb-3"><i class="fas fa-map-marker-alt fa-fw pe-2 pt-1"></i>&nbsp;Current Location:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-light" dmx-text="(location_city.value+', '+location_state.value+' (at '+tracking_api.data[0].Last_Tracked_Timestamp__c.formatDate('h:mma')+' EST)')" dmx-show="location_state.value"></h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="text-white-50 text-truncate mb-3"><i class="fas fa-info-circle pe-2 pt-1 fa-fw"></i>&nbsp;Est. Miles Remaining:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-light mb-3" dmx-text="distance_remaining.value"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom pt-4">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="text-white-50 mb-3"><i class="far fa-flag pe-2 pt-1 fa-fw"></i>&nbsp;Pickup Location:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-light mb-3" dmx-text="tracking_api.data[0].Pickup_Name_Address__c"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="text-white-50 mb-3"><i class="fas fa-flag-checkered fa-fw pt-1 pe-2"></i>&nbsp;Delivery Location:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-light mb-3" dmx-text="tracking_api.data[0].Delivery_Name_Address__c"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="row mt-4 mb-2">
                <div class="col mt-2 mb-2">
                    <div id="mapCanvas" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mt-4 pb-4">
                        <a href="https://www.ragingwolfsolutions.com" class="w-50"><button id="btn2" class="btn btn-outline-warning w-100">
                                <i class="fas fa-arrow-left fa-fw me-2"></i>Return Home
                            </button></a>


                    </div>
                </div>
            </div>
        </div>


    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(initMap, 2000);
            setTimeout(calculateDistance, 2000);
        });

        async function initMap() {
            var latitude = dmx.parse('location_latitude.value');
            var longitude = dmx.parse('location_longitude.value');

            var location = { lat: parseFloat(latitude), lng: parseFloat(longitude) };
            var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });

            // New code to geocode the latitude and longitude
            var geocoder = new google.maps.Geocoder();
            geocodeLatLng(geocoder, location);
        }

        function calculateDistance() {
            var origin = dmx.parse('location_latitude.value') + ',' + dmx.parse('location_longitude.value');
            // Ensure the destination address is a single line by replacing newlines with spaces
            var destination = dmx.parse('destination.value').replace(/\n/g, ' ');

            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [origin],
                destinations: [destination], // Now passing the single-line address
                travelMode: 'DRIVING',
                unitSystem: google.maps.UnitSystem.IMPERIAL,
            }, callback);

            function callback(response, status) {
                if (status == 'OK') {
                    var results = response.rows[0].elements;
                    var element = results[0];
                    if (element.status === "OK") {
                        var distanceText = element.distance.text; // The distance in miles

                        dmx.parse('distance_remaining.setValue("' + distanceText + '")');
                    } else {
                        console.error('Distance calculation failed due to: ' + element.status);
                    }
                } else {
                    console.error('Distance Matrix request failed due to: ' + status);
                }
            }
        }

        function geocodeLatLng(geocoder, location) {
            geocoder.geocode({ 'location': location }, function (results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        // Assuming you want the full address; adjust as needed
                        var addressComponents = results[0].address_components;
                        var city = "", state = "";
                        addressComponents.forEach(component => {
                            if (component.types.includes("locality")) {
                                city = component.long_name;
                            }
                            if (component.types.includes("administrative_area_level_1")) {
                                state = component.short_name;
                            }
                        });
                        // Now you have city and state, you can display them as needed
                        // For example, setting them in an element's text

                        dmx.parse('location_city.setValue("' + city + '")');
                        dmx.parse('location_state.setValue("' + state + '")');

                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
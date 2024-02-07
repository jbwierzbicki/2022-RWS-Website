<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.css" />
    <script src="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLPyBKLy4MIp6P7FeJE1OjOXARChjgo7E"></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
</head>

<body is="dmx-app" id="trakingph3">
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
    <main class="min-vh-100 bg-dark text-warning">
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mt-5 pb-4">
                        <a href="https://www.ragingwolfsolutions.com" class="w-50"><button id="btn1" class="btn btn-outline-warning w-100">
                                <i class="fas fa-arrow-left fa-fw me-2"></i>Return Home
                            </button></a>


                    </div>
                    <div class="d-flex justify-content-center mt-4 mb-4">
                        <h1>Load Summary</h1>
                    </div>
                    <div class="d-flex mb-3">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="w-50 text-secondary">Load ID:&nbsp;<span dmx-text="tracking_api.data[0].Load_Reference__c"></span></th>
                                    <td class="w-50 fw-bold text-secondary">Customer PO:&nbsp;<span dmx-text="tracking_api.data[0].PO__c"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-50 text-secondary">
                                        <div class="d-flex flex-row">
                                            <div class="d-flex">From:</div>
                                            <div class="d-flex ps-2"><span dmx-text="tracking_api.data[0].Pickup_Name_Address__c"></span></div>
                                        </div>
                                    </th>
                                    <td class="w-50 fw-bold text-secondary">To:&nbsp;<span dmx-text="tracking_api.data[0].Delivery_Name_Address__c"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-50 text-secondary">Current Location:&nbsp;<span dmx-text="(location_city.value+', '+location_state.value)" dmx-show="location_state.value"></span>
                                    </th>
                                    <td class="w-50 fw-bold text-secondary">Approx. Miles Remaining:&nbsp;<span dmx-text="distance_remaining.value"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="row mt-3 mb-2">
                <div class="col mt-2 mb-2">
                    <div id="mapCanvas" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mt-5 pb-4">
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

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
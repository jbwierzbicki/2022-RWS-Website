<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
</head>

<body is="dmx-app" id="wolfsdenotice">
    <div class="modal" id="notice" is="dmx-bs5-modal" tabindex="-1" id="modal1" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-3 mb-3 text-center">!! AN IMPORTANT NOTICE REGARDING RWS CHECKOUT PROCESS !!</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mt-3 mb-3">Details of our checkout/purchase process goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger w-100 fw-bold text-black mb-1" data-bs-dismiss="modal" id="back" dmx-on:click="browser1.goto('wolfsden-cart.php')">Go Back</button><button type="button" class="btn btn-warning w-100 fw-bold mt-1" id="proceed" dmx-on:click="">Proceed with Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>


</html>
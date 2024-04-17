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
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>
</head>

<body is="dmx-app" id="wolfsdenShipBill">
    <div class="container d-flex justify-content-center align-items-center text-light" style="height: 100vh;">
        <section class="module-card border-top rounded-1 rounded-0 border-secondary pb-3">
            <div class="row">
                <div class="col">
                    <h3 id="shippingBillingModalLabel" class="text-center mt-2">Shipping Information</h3>
                    <div class="modal-body" id="address">
                        <div class="row">
                            <div class="col-75">
                                <div class="container" id="shipTo">
                                    <form action="/action_page.php">
                                        <div class="row g-0">
                                            <div class="col-50 col mt-3 mb-2">
                                                <label for="fname" class="me-1">Full Name:</label>
                                                <input type="text" class="ms-1 mb-2" id="fname" name="firstname" placeholder="John M. Doe" required="">
                                                <br>
                                                <label for="email" class="me-2"> Email:</label>
                                                <input type="text" class="mb-2" id="email" name="email" placeholder="john@example.com" required="">
                                                <br>
                                                <label for="email" class="me-2"> Phone:</label>
                                                <input type="tel" class="mb-2" id="phone" name="phone" placeholder="123-456-7890">
                                                <br>
                                                <label for="adr" class="me-2">Address:</label>
                                                <input type="text" class="mb-2" id="adr" name="address" placeholder="542 W. 15th Street" required="">
                                                <br>
                                                <label for="city" class="me-2">City:</label>
                                                <input type="text" class="mb-2" id="city" name="city" placeholder="New York" required="">
                                                <br>
                                                <label for="state" class="me-2">State:</label>
                                                <input type="text" class="mb-2" id="state" name="state" placeholder="NY" required="">
                                                <br>
                                                <label for="zip" class="me-2">Zip:</label>
                                                <input type="text" id="zip" name="zip" placeholder="10001" required="">
                                                <br>
                                                <br>
                                                <label for="addNotes" class="me-2"> Notes:</label>
                                                <textarea id="delNotes" class="form-control" placeholder="Leave a note for our team here..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="text-center col mt-3">
                            <input type="submit" value="Back to Cart" style="font-weight: bold;" class="btn btn-warning me-2 block-level" dmx-on:click="browser1.goto('wolfsden-cart.php')">
                            <input type="submit" value="Finish Checkout" style="font-weight: bold;" class="btn btn-warning ms-2 block-level" dmx-on:click="">
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
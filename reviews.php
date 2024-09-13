<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Testimonials</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lustria&family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
    <script src="dmxAppConnect/dmxVideo/dmxVideo.js" defer></script>

    <link rel="stylesheet" href="css/charity.css" />
    <link rel="stylesheet" href="review_style.css">

    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/dmxSlideshow.css" />
    <script src="dmxAppConnect/dmxSlideshow/dmxSlideshow.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxSlideshow/themes/default.css" />
    <script src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/dmxTyped.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/typed.min.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxDatastore/dmxDatastore.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" defer></script>

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

        <div class="review-page container pb-5 border-0 rounded rounded-3" id="reviewPage">

            <h1 class="main-heading text-center text-warning display-3 pt-5" id="welcome" style="">Echoes from the Pack:</h1>

            <hr class="mt-5 mb-5" style="border-top: 3px solid #dc3545;">

            <div class="container text-light mt-5" id="carouselMain">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row mt-4 mb-2">
                                <div class="col text-center bg-opacity-10 bg-transparent" id="first">
                                    <div class="hemispherical-top left-tilt">
                                        <div class="border-container">
                                            <img src="assets/images/services-domestic-air-freight-icon.webp" class="border rounded-circle rounded-3 border-success-subtle border-5 mt-3 mb-3">
                                            <p style="font-size: 20px;" class="fw-light mt-2 mb-3 ms-2 me-2 ps-2 pe-2">"My experience with Megan was fantastic. My skin has never been so smooth and i've noticed a decrease in wrinkles as well! I can't wait to go back!"</p>
                                            <p style="font-family: 'pentagrams-malefissent'; font-size: 36px;" class="text-danger">Riley S. </p>
                                            <p style="font-size: 18px;"><i>Service: Air Expedites</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center bg-opacity-10 bg-transparent" id="second">
                                    <div class="hemispherical-top">
                                        <div class="border-container">
                                            <img src="assets/images/services-expedited-ground-icon.webp" class="border rounded-circle rounded-3 border-success-subtle border-5 mt-3 mb-3">
                                            <p style="font-size: 20px;" class="fw-light mt-2 mb-3 ms-2 me-2 ps-2 pe-2">"I absolutely loved my experience with Raging Wolf team! They are so knowledgable about the industry and left me feeling so confident."</p>
                                            <p style="font-family: 'pentagrams-malefissent'; font-size: 36px;" class="text-danger">Megan B.</p>
                                            <p style="font-size: 18px;"><i>Service: Air Expedites</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center bg-opacity-10 bg-transparent" id="third">
                                    <div class="hemispherical-top right-tilt">
                                        <div class="border-container">
                                            <img src="assets/images/services-trucking-icon.webp" class="border rounded-circle rounded-3 border-success-subtle border-5 mt-3 mb-3" height="230" width="230">
                                            <p style="font-size: 20px;" class="fw-light mt-2 mb-3 ms-2 me-2 ps-2 pe-2">"My experience with Megan was fantastic. My skin has never been so smooth and i've noticed a decrease in wrinkles as well! I can't wait to go back!"</p>
                                            <p style="font-family: 'pentagrams-malefissent'; font-size: 36px;" class="text-danger">Sara D.</p>
                                            <p style="font-size: 18px;"><i>Service: Air Expedites</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row mt-4 mb-2">
                                <div class="col text-center bg-opacity-10 bg-transparent" id="first">
                                    <div class="hemispherical-top left-tilt">
                                        <div class="border-container">
                                            <img src="assets/images/services-domestic-air-freight-icon.webp" class="border rounded-circle rounded-3 border-success-subtle border-5 mt-3 mb-3">
                                            <p style="font-size: 20px;" class="fw-light mt-2 mb-3 ms-2 me-2 ps-2 pe-2">"My experience with Megan was fantastic. My skin has never been so smooth and i've noticed a decrease in wrinkles as well! I can't wait to go back!"</p>
                                            <p style="font-family: 'pentagrams-malefissent'; font-size: 36px;" class="text-danger">Riley S. </p>
                                            <p style="font-size: 18px;"><i>Service: Air Expedites</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center bg-opacity-10 bg-transparent" id="second">
                                    <div class="hemispherical-top">
                                        <div class="border-container">
                                            <img src="assets/images/services-expedited-ground-icon.webp" class="border rounded-circle rounded-3 border-success-subtle border-5 mt-3 mb-3">
                                            <p style="font-size: 20px;" class="fw-light mt-2 mb-3 ms-2 me-2 ps-2 pe-2">"I absolutely loved my experience with Raging Wolf team! They are so knowledgable about the industry and left me feeling so confident."</p>
                                            <p style="font-family: 'pentagrams-malefissent'; font-size: 36px;" class="text-danger">Megan B.</p>
                                            <p style="font-size: 18px;"><i>Service: Air Expedites</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center bg-opacity-10 bg-transparent" id="third">
                                    <div class="hemispherical-top right-tilt">
                                        <div class="border-container">
                                            <img src="assets/images/services-trucking-icon.webp" class="border rounded-circle rounded-3 border-success-subtle border-5 mt-3 mb-3" height="230" width="230">
                                            <p style="font-size: 20px;" class="fw-light mt-2 mb-3 ms-2 me-2 ps-2 pe-2">"My experience with Megan was fantastic. My skin has never been so smooth and i've noticed a decrease in wrinkles as well! I can't wait to go back!"</p>
                                            <p style="font-family: 'pentagrams-malefissent'; font-size: 36px;" class="text-danger">Sara D.</p>
                                            <p style="font-size: 18px;"><i>Service: Air Expedites</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <hr class="mt-5 mb-2" style="border-top: 3px solid #dc3545;">

            <div class="container" id="submitReview">
                <div class="row">
                    <div class="col mt-5 mb-5">
                        <h1 class="main-heading text-center text-warning display-3" id="welcome2">UNLEASH YOUR VOICE!</h1>
                        <p class="text-center text-warning">Let us know how we did by submitting your review below.</p>
                    </div>
                </div>
                <div class="submission-form row w-50 mx-auto rounded rounded-3" id="submissionForm">
                    <div class="col">
                        <div class="row">

                            <div class="form-group mb-3 col">
                                <label for="fullName" class="col-12" style="color: #dc3545;"><b>Full Name:</b></label>
                                <input id="fullName" name="text1" type="text" class="form-control mb-3" style="background-color: black; border: none; color: white;" required="">

                                <label for="fullName" class="col-12" style="color: #dc3545;"><b>Company:</b></label>
                                <input id="companyName" name="text2" type="text" class="form-control mb-3" style="background-color: black; border: none; color: white;" required="">

                                <label for="fullName" class="col-12" style="color: #dc3545;"><b>Email:</b></label>
                                <input type="email" class="form-control mb-3" style="background-color: black; border: none; color: white;" id="email" name="input1" aria-describedby="input1_help" required="">

                                <label for="fullName" class="col-12" style="color: #dc3545;"><b>Service Used:</b></label>
                                <select id="service" class="form-select mb-3" style="background-color: black; border: none; color: white;" required="" name="Service">
                                    <option value="">Select</option>
                                    <option value="1">Expedited Air</option>
                                    <option value="2">Expedited Ground</option>
                                    <option value="3">Standard Trucking</option>
                                    <option value="4">Other</option>
                                </select>

                                <label for="fullName" class="col-12" style="color: #dc3545;"><b>Your Review:</b></label>
                                <textarea id="custyReview" class="form-control" style="background-color: black; border: none; color: white;" name="Review" required="" value="Enter Your Review..."></textarea>
                                <div id="dmxReCaptcha21" class="g-recaptcha"></div>
                                <button id="submit" class="btn w-100 active btn-danger fw-bold lh-lg mt-4 text-warning" type="submit">Submit Your Review<i class="fas fa-caret-right fa-fw"></i></button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Career Opportunities | Raging Wolf Solutions</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer=""></script>
    <script src="dmxAppConnect/dmxBackgroundVideo/dmxBackgroundVideo.js" defer=""></script>

    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <link rel="icon" href="icons/favicon.ico">
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
</head>

<body is="dmx-app" id="index" class="bg-dark">
    <dmx-value id="job_description"></dmx-value>
    <div is="dmx-browser" id="browser1"></div>
    <dmx-value id="visible_career" dmx-bind:value="'career_all'"></dmx-value>

    <?php include 'navbar_mini'; ?>

    <?php include 'navbar_main'; ?>

    <section id="career_main" class="border-top rounded-1 rounded-0 border-secondary pb-5"><img src="assets/images/section-modal-bg-top-stone.png" class="w-100" wappler-command="updateImage">
        <div class="container modules-container pt-5 pb-5">
            <div class="row">

                <div class="col-md-12">


                    <div class="row">
                        <div class="col">

                            <h5 class="services--main--section--container--row--col2-subtitle" wappler-command="editContent">Career Opportunities</h5>
                            <h1 class="mt-0 fw-bold text-white" wappler-command="editContent">Interested in joining our team?</h1>
                            <h5 class="services--main--section--container--row--col2-h5 text-light fw-normal mb-3" wappler-command="editContent">We're looking for passionate people to join the 'PACK' as we take Raging Wolf Solutions to the next level. Join our dynamic team and help us to deliver excellence in freight transportation services.</h5>
                        </div>
                    </div>
                    <div class="row border-bottom border-1 border-secondary mt-4">
                        <div class="col-12 text-start">
                            <button id="btn_viewall" class="btn btn-lg lh-sm mb-2 me-3" wappler-command="editContent" dmx-on:click="visible_career.setValue('career_all')" dmx-class:btn-outline-light="(visible_career.value=='career_all')" dmx-class:btn-outline-secondary="(visible_career.value!='career_all')">View all</button>
                            <button id="btn_operations" class="btn btn-lg lh-sm mb-2 me-3" wappler-command="editContent" dmx-on:click="visible_career.setValue('career_operations')" dmx-class:btn-outline-light="(visible_career.value=='career_operations')" dmx-class:btn-outline-secondary="(visible_career.value!='career_operations')">Operations (1)</button>
                            <button id="btn_sales" class="btn btn-lg lh-sm mb-2 me-3" wappler-command="editContent" dmx-on:click="visible_career.setValue('career_sales')" dmx-class:btn-outline-light="(visible_career.value=='career_sales')" dmx-class:btn-outline-secondary="(visible_career.value!='career_sales')">Sales (2)</button>
                            <button id="btn_sales1" class="btn btn-outline-secondary btn-lg lh-sm mb-2 me-3" wappler-command="editContent">Accounting</button>
                            <button id="btn_sales2" class="btn btn-outline-secondary btn-lg lh-sm mb-2 me-3" wappler-command="editContent">Technology</button>
                        </div>
                    </div>

                    <div id="conditional_sales" is="dmx-if" dmx-bind:condition="((visible_career.value == 'career_sales')||(visible_career.value == 'career_all'))">
                        <section id="career_sales">
                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4">
                                <div class="col-lg-10 mb-2">

                                    <h4 class="text-light" wappler-command="editContent">Representative, Inside Sales</h4>
                                    <h5 class="text-light fw-light mb-3" wappler-command="editContent">We're looking for an experienced freight transportation sales professional to join our team.</h5>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-dollar-sign"></i>&nbsp; Salary</button><button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="far fa-clock"></i>&nbsp; Full time</button>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp; In-person</button>
                                    <button class="btn btn-sm mb-2 me-2 btn-outline-warning" wappler-command="editContent" dmx-on:click="job_description.setValue('representative_inside_sales')"><i class="fas fa-info-circle"></i>&nbsp; Position Information</button>
                                    <div class="d-flex mt-3 flex-column text-light" dmx-show="(job_description.value=='representative_inside_sales')">
                                        <h5>▶ Position Information</h5>
                                        <p class="mb-2">Are you hungry? The PACK at Raging Wolf Solutions is looking for an outgoing, charismatic individual to join our sales team. If accepted, you will be responsible for investigating strong potential leads, setting up meetings, and working with sales to bring our premium freight transportation to new customers. Applications will be reviewed and prioritized based on…
                                        </p>
                                        <ul class="list-group text-white">
                                            <li class="list-group-item bg-transparent text-white">Sales-related background or experience</li>
                                            <li class="list-group-item bg-transparent text-white">Ability to make meaningful connections with potential customers</li>
                                            <li class="list-group-item bg-transparent text-white">Strong communication skills</li>
                                            <li class="list-group-item bg-transparent text-white mb-3">(Preferred) Knowledge of freight transportation or supply chain</li>
                                        </ul>

                                        <p wappler-command="editContent">This is a sales position, so it comes with strong incentive and commission opportunities. for you to connect with new customers and provide them with our outstanding service and competitive pricing. Any new business you help us to acquire will increase your earning potential.
                                        </p>
                                        <p wappler-command="editContent">--- ABOUT US ---
                                        </p>
                                        <p wappler-command="editContent">Raging Wolf Solutions is a full service third party logistics provider, offering shipping and freight transportation solutions across the continental United States. We leverage our expansive network of carriers and combined 60 years in the industry to bring our customers unparalleled communication and service.
                                        </p>
                                        <p wappler-command="editContent">Our team can move anything from one box to a full truckload. Some of our specialty moves include air/ground expedites, full truckloads, straight trucks, cargo vans, sprinter vans -- and much more! See our website for the full list &gt;
                                        </p>
                                        <p wappler-command="editContent">--- WHY RAGING WOLF ---
                                        </p>
                                        <p wappler-command="editContent">Why sell with us? Our team believes that its sales representatives should be rewarded for their success. Bringing in new business helps us all grow. So with that in mind, we do not put a "cap" on your earning potential through commissions. You have our full support!
                                        </p>
                                        <p wappler-command="editContent">---GUIDANCE AND SUPPORT---
                                        </p>
                                        <p wappler-command="editContent">Our operations are based out of Twinsburg OH, and the Raging Wolf team is equipped with the tools and resources you need to succeed. Our digital marketing and promotional team can help you seek out and target leads in markets all across the country. Our Sales team will help you with strategy and your transition into selling with Raging Wolf. We've got your back!</p>
                                        </p>
                                        <button id="apply_now3" class="btn btn-link text-decoration-none text-warning pt-0 pb-0 ps-0 pe-0 btn-lg text-start" wappler-command="editContent" dmx-on:click="browser1.goto('https://forms.clickup.com/14351633/f/dnz8h-3025/I9CWSALTTG6SFD134I')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-end">
                                    <button id="apply_now3" class="btn btn-link text-decoration-none btn-lg text-warning pt-0 pb-0 ps-0 pe-0" wappler-command="editContent" dmx-on:click="browser1.goto('https://forms.clickup.com/14351633/f/dnz8h-3025/I9CWSALTTG6SFD134I')" dmx-hide="(job_description.value=='representative_inside_sales')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                </div>
                            </div>
                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4">
                                <div class="col-lg-10 mb-2">
                                    <h4 class="text-light" wappler-command="editContent">Contractor, Regional Sales</h4>
                                    <h5 class="text-light fw-light mb-3" wappler-command="editContent">We're looking for an experienced freight transportation sales professional to join our team.</h5>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-dollar-sign"></i>&nbsp; Contract</button><button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="far fa-clock"></i>&nbsp; Part time</button>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp; Potentially remote</button>
                                </div>
                                <div class="col-lg-2 text-end">
                                    <button id="apply_now2" class="btn btn-link text-decoration-none btn-lg text-warning pt-0 pb-0 ps-0 pe-0" wappler-command="editContent" dmx-on:click="browser1.goto('https://forms.clickup.com/14351633/f/dnz8h-3007/TLPZ7SME0J1UKEEPGY')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                </div>
                            </div>
                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4">
                                <div class="col-lg-10 mb-2">
                                    <h4 class="text-light" wappler-command="editContent">Representative, Regional Sales</h4>
                                    <h5 class="text-light fw-light mb-3" wappler-command="editContent">We're looking for an experienced freight transportation sales professional to join our team.</h5>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-dollar-sign"></i>&nbsp; Salary</button><button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="far fa-clock"></i>&nbsp; Full time</button>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp; Potentially remote</button>
                                </div>
                                <div class="col-lg-2 text-end">
                                    <button id="apply_now1" class="btn btn-link text-decoration-none btn-lg text-warning pt-0 pb-0 ps-0 pe-0" wappler-command="editContent" dmx-on:click="browser1.goto('https://forms.clickup.com/14351633/f/dnz8h-3025/I9CWSALTTG6SFD134I')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                </div>
                            </div>

                        </section>
                    </div>
                    <div id="conditional_operations" is="dmx-if" dmx-bind:condition="((visible_career.value == 'career_operations')||(visible_career.value == 'career_all'))">
                        <section id="career_operations">
                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4">
                                <div class="col-lg-10 mb-2">
                                    <h4 class="text-light" wappler-command="editContent">Coordinator, Freight Transportation Logistics</h4>
                                    <h5 class="text-light fw-light mb-3" wappler-command="editContent">We're looking for an experienced freight transportation professional to join our team.</h5>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-dollar-sign"></i>&nbsp; Salary</button>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="far fa-clock"></i>&nbsp; Full time</button>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-user"></i>&nbsp; In-person</button>
                                </div>
                                <div class="col-lg-2 text-end">
                                    <button id="apply_now" class="btn btn-link text-decoration-none text-warning btn-lg pt-0 pb-0 ps-0 pe-0" wappler-command="editContent" dmx-on:click="browser1.goto('https://forms.clickup.com/14351633/f/dnz8h-2985/ECVWLNNEJSLZ433JM4')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                </div>
                            </div>
                        </section>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <?php include 'footer'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
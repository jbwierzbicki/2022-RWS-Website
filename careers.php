<!doctype html>
<html>

<head>
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Career Opportunities | Raging Wolf Solutions</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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
    <script>
        function initApollo(){var n=Math.random().toString(36).substring(7),o=document.createElement("script");
o.src="https://assets.apollo.io/micro/website-tracker/tracker.iife.js?nocache="+n,o.async=!0,o.defer=!0,
o.onload=function(){window.trackingFunctions.onLoad({appId:"663126372a6e2c01c71a0faf"})},
document.head.appendChild(o)}initApollo();
    </script>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "mrz6iftq48");
    </script>
    <script>
        !function(t){if(window.ko)return;window.ko=[],["identify","track","removeListeners","open","on","off","qualify","ready"].forEach(function(t){ko[t]=function(){var n=[].slice.call(arguments);return n.unshift(t),ko.push(n),ko}});var n=document.createElement("script");n.async=!0,n.setAttribute("src","https://cdn.getkoala.com/v1/pk_8f6e0e1be3ac9f1e37dea684410f7c092849/sdk.js"),(document.body || document.head).appendChild(n)}();
    </script>
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
                            <button id="btn_operations" class="btn btn-lg lh-sm mb-2 me-3" wappler-command="editContent" dmx-on:click="visible_career.setValue('career_operations')" dmx-class:btn-outline-light="(visible_career.value=='career_operations')" dmx-class:btn-outline-secondary="(visible_career.value!='career_operations')">Operations (0)</button>
                            <button id="btn_sales" class="btn btn-lg lh-sm mb-2 me-3" wappler-command="editContent" dmx-on:click="visible_career.setValue('career_sales')" dmx-class:btn-outline-light="(visible_career.value=='career_sales')" dmx-class:btn-outline-secondary="(visible_career.value!='career_sales')">Sales (2)</button>
                            <button id="btn_sales1" class="btn btn-outline-secondary btn-lg lh-sm mb-2 me-3" wappler-command="editContent">Accounting (0)</button>
                            <button id="btn_sales2" class="btn btn-outline-secondary btn-lg lh-sm mb-2 me-3" wappler-command="editContent">Technology (0)</button>
                        </div>
                    </div>

                    <div id="conditional_sales" is="dmx-if" dmx-bind:condition="((visible_career.value == 'career_sales')||(visible_career.value == 'career_all'))">
                        <section id="career_sales">

                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4">
                                <div class="col-lg-10 mb-2">

                                    <h4 class="text-light" wappler-command="editContent">Freight Agent, Remote</h4>
                                    <h5 class="text-light fw-light mb-3" wappler-command="editContent">We're looking for a freight agent professional to join our team.</h5>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-dollar-sign"></i>&nbsp; Commission</button><button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="far fa-clock"></i>&nbsp; Full time</button>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp; Remote</button>
                                    <button class="btn btn-sm mb-2 me-2 btn-outline-warning" wappler-command="editContent" dmx-on:click="job_description.setValue(job_description.value == 'freight_agent_remote' ? '' : 'freight_agent_remote')">
                                        <i class="fas fa-info-circle"></i>&nbsp;
                                        <span dmx-text="job_description.value == 'freight_agent_remote' ? 'Hide Position Information' : 'Position Information'"></span>
                                    </button>


                                    <div class="d-flex mt-3 flex-column text-light" dmx-show="(job_description.value=='freight_agent_remote')">
                                        <h5>▶ Position Information</h5>
                                        <p class="mb-2">At Raging Wolf Solutions, we're not just a company—we're a family. As a family-owned business, we prioritize building meaningful relationships with our team, clients, and partners. Unlike corporate giants that treat their employees as numbers, we value the individual. If you’re ready to work in a supportive, dynamic environment where your success matters, Raging Wolf Solutions is where you belong. We are currently looking for a Freight Agent to join our growing team. If you're driven, hungry for success, and looking for a place where you can thrive—this is your opportunity!
                                        </p>
                                        <p wappler-command="editContent" class="mt-3"><b>Why Raging Wolf Solutions?</b>
                                        <ul class="custom-list text-white">
                                            <li><b>Commission Split:</b> Your hard work directly impacts your earning potential! The more you hustle, the more you earn.</li>
                                            <li><b>Family-Centered Environment:</b> Forget the corporate grind. At Raging Wolf, we treat every team member like family. Your voice is heard, your efforts are appreciated, and you’ll be recognized for your contributions.</li>
                                            <li><b>Supportive Team:</b> You’ll have a network of experienced professionals who are eager to help you succeed. From training to daily guidance, we ensure you have the resources you need to excel.</li>
                                            <li><b>Flexibility:</b> We understand life can be busy. Enjoy a flexible work schedule that lets you balance your personal and professional life.</li>
                                            <li><b>Growth Opportunities:</b> We’re expanding! As we grow, there will be plenty of room for you to grow alongside us. Rise to new challenges and take on more responsibility as you gain experience.</li>
                                            <li><b>Cutting-Edge Technology:</b> We equip our team with the latest tools and software to ensure you're always ahead of the game. Focus on what matters—building relationships and closing deals.</li>
                                        </ul>
                                        <p wappler-command="editContent"><b>Responsibilities:</b>
                                        <ul class="custom-list text-white">
                                            <li>Identify, develop, and manage relationships with shippers and carriers to move freight efficiently and cost-effectively.</li>
                                            <li>Negotiate pricing and contracts with carriers while ensuring the best rates for clients.</li>
                                            <li>Coordinate shipments and resolve any issues related to freight movement, ensuring timely and smooth operations.</li>
                                            <li>Track and monitor shipments to ensure delivery deadlines are met.</li>
                                            <li>Collaborate with internal teams to improve processes and customer satisfaction.</li>
                                            <li>Stay up-to-date with industry trends and regulations.</li>
                                        </ul>
                                        </p>
                                        <p wappler-command="editContent"><b>What We’re Looking For:</b>
                                        <ul class="custom-list text-white">
                                            <li>An existing book of business.</li>
                                            <li>A self-motivated, ambitious individual who thrives in a commission-based environment.</li>
                                            <li>Experience in freight brokerage or logistics.</li>
                                            <li>Excellent communication and negotiation skills.</li>
                                            <li>Strong attention to detail and problem-solving abilities.</li>
                                            <li>Ability to work independently and as part of a collaborative team.</li>
                                            <li>A positive attitude and a desire to succeed!</li>
                                        </ul>
                                        </p>
                                        <p wappler-command="editContent"><b>Perks of Working at Raging Wolf Solutions:</b>
                                        <ul class="custom-list text-white">
                                            <li><b>Competitive Compensation:</b> Your hard work directly impacts your earnings! The more you hustle, the more you earn.</li>
                                            <li><b>Work-Life Balance:</b> Flexible schedule to help you enjoy your personal life.</li>
                                            <li><b>Team Spirit:</b> Join a close-knit, family-oriented team where you’re more than just an employee—you’re family.</li>
                                            <li><b>Ongoing Training:</b> Access to resources and support to help you grow and succeed in your role.</li>
                                            <li><b>Career Growth:</b> As a rapidly growing company, there’s unlimited potential for advancement.</li>
                                        </ul>
                                        </p>
                                        <p><b>Ready to Join the Pack?</b> If you're looking for an opportunity to earn, grow, and work with a team that values your success, Raging Wolf Solutions is the place for you. Apply today and take the first step toward a rewarding career! Raging Wolf Solutions is an equal-opportunity employer. We encourage applicants from all backgrounds to apply!</p>

                                        <button id="apply_now5" class="btn btn-link text-decoration-none text-warning pt-0 pb-0 ps-0 pe-0 btn-lg text-start" wappler-command="editContent" dmx-on:click="browser1.goto('https://www.indeed.com/jobs?q=raging+wolf+solutions&l=&from=searchOnDesktopSerp&vjk=8fac4ddafd4e9010')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-end">
                                    <button id="apply_now6" class="btn btn-link text-decoration-none btn-lg text-warning pt-0 pb-0 ps-0 pe-0" wappler-command="editContent" dmx-on:click="browser1.goto('https://www.indeed.com/jobs?q=raging+wolf+solutions&l=&from=searchOnDesktopSerp&vjk=8fac4ddafd4e9010')" dmx-hide="(job_description.value=='representative_inside_sales')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                </div>
                            </div>

                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4">
                                <div class="col-lg-10 mb-2">

                                    <h4 class="text-light" wappler-command="editContent">Representative, Inside Sales</h4>
                                    <h5 class="text-light fw-light mb-3" wappler-command="editContent">We're looking for an experienced freight transportation sales professional to join our team.</h5>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-dollar-sign"></i>&nbsp; Salary</button><button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="far fa-clock"></i>&nbsp; Full time</button>
                                    <button class="btn btn-outline-light btn-sm mb-2 me-2 cursor-default" wappler-command="editContent"><i class="fas fa-map-marker-alt"></i>&nbsp; In-person</button>
                                    <button class="btn btn-sm mb-2 me-2 btn-outline-warning" wappler-command="editContent" dmx-on:click="job_description.setValue(job_description.value == 'representative_inside_sales' ? '' : 'representative_inside_sales')">
                                        <i class="fas fa-info-circle"></i>&nbsp;
                                        <span dmx-text="job_description.value == 'representative_inside_sales' ? 'Hide Position Information' : 'Position Information'"></span>
                                    </button>
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
                                        <button id="apply_now3" class="btn btn-link text-decoration-none text-warning pt-0 pb-0 ps-0 pe-0 btn-lg text-start" wappler-command="editContent" dmx-on:click="browser1.goto('https://forms.clickup.com/14351633/f/dnz8h-3485/PTK271OAHJ0BYWG61W')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-end">
                                    <button id="apply_now4" class="btn btn-link text-decoration-none btn-lg text-warning pt-0 pb-0 ps-0 pe-0" wappler-command="editContent" dmx-on:click="browser1.goto('https://forms.clickup.com/14351633/f/dnz8h-3485/PTK271OAHJ0BYWG61W')" dmx-hide="(job_description.value=='representative_inside_sales')">Apply Now&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i></button>
                                </div>
                            </div>
                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4 visually-hidden">
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
                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4 visually-hidden">
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
                            <div class="row border-1 border-secondary border-bottom pt-4 pb-4 visually-hidden">
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

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
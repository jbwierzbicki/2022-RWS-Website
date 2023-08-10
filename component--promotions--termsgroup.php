<!-- Wappler include head-page="promotions.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" jquery_slim_35="local" -->
<div class="row justify-content-between pt-2">
    <div class="col-lg-4 pt-2 pb-2 ps-4 pe-4">
        <div class="row border rounded rounded-2 border-light border-offwhite h-100">
            <div class="col promo-card pt-2">
                <div class="d-flex flex-column hover-cursor" dmx-on:click="browser1.goto('referral.php')">
                    <h1 class="text-light lh-base text-center mb-1"><i class="fas fa-user-friends"></i></h1>
                    <h5 class="text-light text-center lh-base">Friends don't let friends ship alone!</h5>
                </div>

                <div class="d-flex">
                    <p class="text-white-50 text-center">Know someone in need of freight transportation? Send them our way! Contact us using the form below, or tell your referral about Raging Wolf by sharing our services to your network. Make sure they mention your name or business!<span class="text-warning hover-cursor" dmx-on:click="browser1.goto('promotion_terms/referral_terms.php')">&nbsp;See Terms.</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 pt-2 pb-2 ps-4 pe-4">
        <div class="row h-100">
            <div class="border rounded rounded-2 border-light border-offwhite promo-card col pt-2">
                <div class="d-flex flex-column hover-cursor" dmx-on:click="browser1.goto('charity.php')">

                    <h1 class="text-light lh-base text-center mb-1"><i class="fas fa-hand-holding-medical"></i></h1>
                    <h5 class="text-light text-center lh-base">Help donate to an Alpha cause!</h5>

                </div>
                <div class="d-flex">
                    <p class="text-white-50 text-center">Our team is giving back to our future - <span class="text-white-50 hover-cursor" dmx-on:click="browser1.goto('https://www.uhhospitals.org/rainbow')"><i>UH Rainbow Children's Hospital </i></span>- and we need your help! Support this great cause and promote Raging Wolf Solutions at the same time.<span class="text-warning hover-cursor" dmx-on:click="browser1.goto('promotion_terms/charity_terms.php')">&nbsp;See Terms.</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 pt-2 pb-2 ps-4 pe-4">
        <div class="row border rounded rounded-2 border-light border-offwhite h-100">
            <div class="col promo-card pt-2">
                <div class="d-flex flex-column hover-cursor" dmx-on:click="browser1.goto('football_pool.php')">

                    <h1 class="text-light lh-base text-center mb-1"><i class="fas fa-football-ball"></i></h1>
                    <h5 class="text-light text-center lh-base">If your team wins, so do you!</h5>

                </div>
                <div class="d-flex">
                    <p class="text-white-50 text-center">If you enjoy the battle of the grid-iron, you'll love this! Every week, you will receive an email with a link to our online football pool, where you can make your picks for the upcoming NFL games, preseason too! If you correctly predict the most winners, you could receive with a $100.<span class="text-warning hover-cursor" dmx-on:click="browser1.goto('promotion_terms/football_pool_terms.php')">&nbsp;See Terms.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
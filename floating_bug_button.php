<!-- Wappler include head-page="index.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" components="{dmxBootstrap5Modal:{}}" -->

<?php
// floating_bug_button.php
// Contains the floating button and its associated modal
// All button positioning and appearance styles are inline.
?>

<!-- ======================= FLOATING BUG REPORT BUTTON ======================= -->
<button id="bugReportButton" class="btn shadow btn-dark d-none" *="" keep="" bootstrap="" base="" styles="" &="" shadow="" dmx-on:click="bugReportModal.show()" title="Report Bug" tooltip="Report Bug" for="" hover="" aria-label="Report Bug" accessibility="" style="
        /* Positioning */
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1055;

        /* Shape &amp; Size */
        width: 35px;        /* Adjust size as needed */
        height: 35px;       /* MUST be equal to width */
        border-radius: 50%; /* Creates the circle */
        padding: 0;         /* Override Bootstrap padding */

        /* Icon Centering &amp; Size */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem; /* Adjust icon size as needed */

        /* Ensure high contrast for icon if needed - adjust color if btn-warning doesn't provide enough */
        /* color: #000; */ /* Example: uncomment/adjust if needed */
    ">
    <i class="fas fa-bug fa-xs"></i>
    <?php /* Removed text "Report Bug" from inside button */ ?>
</button>

<!-- ======================= BUG REPORT MODAL ======================== -->
<!-- Ensure this ID ('bugReportModal') matches the dmx-on:click above -->
<!-- Modal styling primarily uses Bootstrap classes, which is generally fine -->
<div class="modal fade" id="bugReportModal" is="dmx-bs5-modal" tabindex="-1" aria-labelledby="bugReportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-secondary border-2 pb-0">
            <div class="modal-header bg-dark text-white border-bottom-0 pb-2 ps-4 pe-4">
                <h5 class="modal-title" id="bugReportModalLabel"><i class="fas fa-bug"></i>&nbsp; Report a Bug</h5>
                <button type="button" class="btn-close btn-close-white small me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark pt-2 pb-2 ps-4 pe-4">
                <!-- PLACEHOLDER: Your UseBasin Bug Report Form Iframe will go here. The iframe styles MUST also be inline as requested previously. -->
                <iframe class="basinIframe" src="https://usebasin.com/form/3606f07842fa/view/b1cea672826e?iframe=true" frameborder="0" style="border: none; overflow: hidden;" onload="var self = this; self.contentWindow.postMessage('getHeight', '*'); setInterval(function() { self.contentWindow.postMessage('getHeight', '*'); }, 500); window.addEventListener('message', function(event) { if (event.data.action === 'setHeight') { self.style.height = event.data.height + 'px'; } });" width="100%"></iframe>
                <script type="text/javascript">
                    window.addEventListener('message', function(event) { if (event.data.action === 'redirect') { window.location.href = event.data.url; } }); 
                </script>
            </div>
            <div class="modal-footer bg-dark border-top-0 pt-0">
                <button class="fw-bold btn module-cta-btn w-100 btn-sm lh-lg mt-2 mb-2 text-truncate btn-outline-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i>&nbsp;Close</button>
            </div>
        </div>
    </div>
</div>
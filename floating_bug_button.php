<!-- Wappler include head-page="index.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" components="{dmxBootstrap5Modal:{}}" -->

<?php
// floating_bug_button.php
// Contains the floating button (hidden) and its associated modal.
// UseBasin form has been removed and replaced with a placeholder.
?>

<!-- ======================= FLOATING BUG REPORT BUTTON (HIDDEN & CORRECTED) ======================= -->
<button id="bugReportButton" class="btn shadow btn-dark d-none" /* Corrected class attribute */ dmx-on:click="bugReportModal.show()" title="Report Bug" /* Correct attribute for tooltip */ aria-label="Report Bug" /* Correct attribute for accessibility */ style="
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1055;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.0rem; /* Corrected style attribute (no comments or &amp;) */
    ">
    <i class="fas fa-bug"></i> <?php /* Removed fa-xs class */ ?>
</button>

<!-- ======================= BUG REPORT MODAL ======================== -->
<div class="modal fade" id="bugReportModal" is="dmx-bs5-modal" tabindex="-1" aria-labelledby="bugReportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-secondary border-2 pb-0">
            <div class="modal-header bg-dark text-white border-bottom-0 pb-2 ps-4 pe-4">
                <h5 class="modal-title" id="bugReportModalLabel"><i class="fas fa-bug me-2"></i>Report a Bug</h5>
                <button type="button" class="btn-close btn-close-white small me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark pt-2 pb-2 ps-4 pe-4">

                <!-- USEBASIN IFRAME AND SCRIPT REMOVED -->

                <!-- ADDED PLACEHOLDER TEXT -->
                <div class="text-light text-center py-5">
                    <p>This form is currently being updated.</p>
                    <p>Please check back again later.</p>
                </div>

            </div>
            <div class="modal-footer bg-dark border-top-0 pt-0">
                <button class="fw-bold btn module-cta-btn w-100 btn-sm lh-lg mt-2 mb-2 text-truncate btn-outline-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i>&nbsp;Close</button>
            </div>
        </div>
    </div>
</div>
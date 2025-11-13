<!-- Wappler include head-page="index.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" components="{dmxBootstrap5Modal:{}}" -->

<!-- ======================= FLOATING BUG REPORT BUTTON ======================= -->
<button id="bugReportButton" class="btn shadow btn-dark" dmx-on:click="bugReportModal.show()" title="Report Bug" aria-label="Report Bug" style="
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1030;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.0rem;
    ">
    <i class="fas fa-bug fa-lg"></i>
</button>

<!-- ======================= BUG REPORT MODAL ======================== -->
<div class="modal fade" id="bugReportModal" is="dmx-bs5-modal" tabindex="-1" aria-labelledby="bugReportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-secondary border-2 pb-0">
            <div class="modal-header text-white border-bottom-0 pb-2 ps-4 pe-4 bg-dark">
                <h5 class="modal-title" id="bugReportModalLabel"><i class="fas fa-bug me-2"></i>Report a Bug</h5>
                <button type="button" class="btn-close btn-close-white small me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-2 pb-2 ps-2 pe-2 bg-dark">
                <iframe id="bugReportIframe" src="https://forms.clickup.com/14351633/f/dnz8h-6397/QMHMW90KK67ZRCSIAJ" width="100%" style="background: transparent; border: none; height: 75vh;">
                </iframe>
            </div>
            <div class="modal-footer bg-dark border-top-0 pt-0">
                <button class="fw-bold btn module-cta-btn w-100 btn-sm lh-lg mt-2 mb-2 text-truncate btn-outline-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i>&nbsp;Close</button>
            </div>
        </div>
    </div>
</div>
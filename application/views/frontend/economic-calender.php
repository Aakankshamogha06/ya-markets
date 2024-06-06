

<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title mb-0 wow fadeInUp" data-wow-delay="200ms">Economic <span class="text-gradient">Calender</span></h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
             
                <div id="adobe-dc-view"></div>
<script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>
<script type="text/javascript">
	document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
		var adobeDCView = new AdobeDC.View({clientId: "b5db5790a64f4871828ef886c42d14af", divId: "adobe-dc-view"});
		adobeDCView.previewFile({
			content:{location: {url: "<?php echo base_url('2024_calender.pdf')?>"}},
		 metaData: {
                                        fileName: "2024_calender.pdf"
                                    }
                                }, {
                                    embedMode: "IN_LINE",
                                    showDownloadPDF: false,
                                    showPrintPDF: false
                                });
                            });
</script>
       
            </div>
        </div>
    </div>
</section>

<section class="system">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h5 class="text-primary fw-bold">Supported Payment Systems</h5>
                <h2 class="title">For convenient <span class="text-gradient">deposits </span>
                    <div class="d-lg-block text-gradient">and withdrawals</div>
                </h2>
            </div>
            <div class="col-12">
                <div class="group-btn text-center mt-4">
                    <a href="https://area.yamarkets.com/register" class="btn btn-primary wow fadeInUp" data-wow-delay="100ms">Open live account</a>
                    <a href="https://area.yamarkets.com/register" class="btn btn-secondary ms-md-2 wow fadeInUp" data-wow-delay="300ms">Open demo account</a>
                </div>
            </div>
        </div>
    </div>
</section>


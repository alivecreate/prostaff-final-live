<div class="modal fade" id="contact-form2" tabindex="-1" aria-labelledby="contact-form" aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header service-form">
                <h2 class="mb-0">Get in touch with us.</h2>
                <button type="button" class="btn-close position-relative h-auto" data-bs-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
              </div>
            <div class="modal-body">

                <div class="row g-3">
                    
                    <div class="col-sm-12 col-12 service-form">
                        
                        @include('front.widget.inquiry-form', [
                            "service" => "Contact Form"
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
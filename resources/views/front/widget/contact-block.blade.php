 <!-- contact area start  -->
 <div class="it-contact-area pt-120 pb-120">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6">
                  <div class="it-contact-wrapp grey-bg">
                     <div class="it-contact-title-box pb-10 mb-40">
                        <h3 class="it-section-title">get in touch</h3>
                     </div>
                     
                     
                     @include('front.widget.inquiry-form', [
                            "service" => "Contact Form"
                        ])

                     <div class="it-contact-link">
                        <div class="it-contact-link-title" style="margin: 24px 0px  0px  0px !important">
                           <h3 class="it-section-title-sm mt-5 mb-0">Contact info:</h3>
                        </div>
                        <div class="it-contact-link-item">
                           <br>
                           <a href="tel:{{getWebsiteData()['primary_phone']}}">
                              <i class="flaticon-phone-call"></i> {{getWebsiteData()['primary_phone']}}
                           </a>
                           <br>

                           <a href="tel:{{getWebsiteData()['secondary_phone']}}">
                              <i class="flaticon-phone-call"></i> {{getWebsiteData()['secondary_phone']}}
                           </a>
                           <br>
                           @if(getWebsiteData()['primary_mail'])
                              <a href="mailto:{{getWebsiteData()['primary_mail']}}">
                                 <i class="flaticon-mail"></i> {{getWebsiteData()['primary_mail']}}
                              </a>
                           @endif
                           
                           <br>
                           @if(getWebsiteData()['secondary_mail'])
                              <a href="mailto:{{getWebsiteData()['secondary_mail']}}">
                                 <i class="flaticon-mail"></i> {{getWebsiteData()['secondary_mail']}}
                              </a>
                           @endif
                           
                           <br>
                           <p><strong>Reg Address:</strong></p>
                           <a href="#">
                              <i class="flaticon-location"></i> {{getWebsiteData()['address']}}
                           </a>
                           <br>

                           <br>


                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="it-contact-map-area">
                     <div class="it-contact-map-wrapp">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d236165.00841392!2d73.2283724!3d22.3506738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2cba063ea7a7b98d%3A0x3cfc0541f8a7332c!2sUjval%20Projects!5e0!3m2!1sen!2sin!4v1718078402144!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
 </div>
      <!-- contact area end  -->
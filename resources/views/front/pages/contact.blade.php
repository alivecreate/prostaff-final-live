@extends('front.layout.main-layout')

@section('content')
    
    
    <body data-mobile-nav-style="classic" class="custom-cursor">

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background " style="background-image: url({{asset('picture/manpower3.jpg')}})">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        {{-- <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Contact us</h1> --}}
                        {{-- <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Clients relationships</h2> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section>
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px w-90 md-w-100">Get in Touch With Us Today</h3>
                        <p class="w-95 md-w-100">Need more information about our services? Our friendly support team is here to guide you every step of the way. Don’t hesitate to reach out.</p>
                    </div>

                    <div class="col-lg-7 ps-50px lg-ps-15px">
                        <div class="row justify-content-center">
                            <div class="col-12" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="bg-very-light-gray fs-17 lh-30 p-35px lg-p-25px border-radius-5px" style="max-width: 75%;">
                                    <img src="{{asset('picture/contact.jpg')}}" alt="" class="border-radius-4px mb-30px lg-mb-20px">
                                    
                                    
                                    <span class="alt-font text-dark-gray fs-19 fw-600 d-inline-block mt-3">Singapore</span>
                                    <span class="d-block"><span class="text-dark-gray fw-600">Call:</span> <a href="tel:{{getWebsiteData()['secondary_phone']}}">{{getWebsiteData()['secondary_phone']}}</a></span>
                                    <span class="d-block"><span class="text-dark-gray fw-600">Email:</span> <a href="mailto:{{getWebsiteData()['secondary_mail']}}" class="text-decoration-line-bottom">{{getWebsiteData()['secondary_mail']}}</a></span>
                                    <p class="mb-15px">{{getWebsiteData()['address']}}</p>


                                    <span class="alt-font text-dark-gray fs-19 fw-600 d-inline-block">India</span> 
                                    <span class="d-block"><span class="text-dark-gray fw-600">Call:</span> <a href="tel:{{getWebsiteData()['primary_phone']}}">{{getWebsiteData()['primary_phone']}}</a></span>
                                    <span class="d-block mb-3"><span class="text-dark-gray fw-600">Email:</span> <a href="mailto:{{getWebsiteData()['primary_mail']}}" class="text-decoration-line-bottom">{{getWebsiteData()['primary_mail']}}</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
<section class="p-0 h-500px sm-h-350px overlap-height" id="location">
    <div class="container-fluid h-100 overlap-gap-section">
        <div class="row justify-content-center h-100">
            <div class="col-12 p-0">
                <div class="map h-500px md-h-400px sm-h-350px">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.53824670451!2d103.79258027403444!3d1.4514101612429318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1313a8139d23%3A0x8c91f351ebc62770!2sWoodlands%20Industrial%20Park%20E5%2C%20Singapore!5e0!3m2!1sen!2sin!4v1754381416678!5m2!1sen!2sin" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- end section --> 
        <!-- start section -->
<section>
    <div class="container overlap-section overlap-section-three-fourth" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'> 
        <div class="row row-cols-md-1 justify-content-center">
            <div class="col-xl-10">
                <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                    <div class="row">
                        <div class="col-9">
                            <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">How we can help you?</h3>
                        </div>
                        <div class="col-3 text-end" data-anime='{ "translateY": [30, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <i class="bi bi-send icon-large text-dark-gray animation-zoom"></i>
                        </div>
                    </div>



                    <form onsubmit="sendToWhatsApp(event)">
                        <div class="form-group mb-20px position-relative d-flex align-items-center">
                            <span class="me-3"><i class="bi bi-person icon-extra-medium text-dark-gray"></i></span>
                            <input class="form-control fs-17 placeholder-medium-gray bg-white border-radius-0px ps-3" type="text" id="name" name="name" placeholder="Enter your name*" required>
                        </div>
                        
                        <div class="form-group mb-20px position-relative d-flex align-items-center">
                            <span class="me-3"><i class="bi bi-envelope icon-extra-medium text-dark-gray"></i></span>
                            <input class="form-control fs-17 placeholder-medium-gray bg-white border-radius-0px ps-3" type="email" id="email" name="email" placeholder="Enter your email address*" required>
                        </div>

                        <div class="form-group mb-20px position-relative d-flex align-items-center">
                            <span class="me-3"><i class="bi bi-phone icon-extra-medium text-dark-gray"></i></span>
                            <input class="form-control fs-17 placeholder-medium-gray bg-white border-radius-0px ps-3" type="number" id="phone" name="phone" placeholder="Enter your phone number*" required>
                        </div>

                        <div class="form-group mb-20px position-relative d-flex">
                            <span class="me-3 pt-2"><i class="bi bi-chat-square-dots icon-extra-medium text-dark-gray"></i></span>
                            <textarea class="form-control fs-17 placeholder-medium-gray bg-white border-radius-0px ps-3" id="message" name="message" placeholder="Enter your message" rows="4"></textarea>
                        </div>

                        <input type="hidden" name="redirect" value="">

                        <div class="text-end">
                            <button class="btn btn-success btn-medium  fw-700" type="submit">Send on WhatsApp</button>
                        </div>
                    </form>




                    <!-- start WhatsApp contact form -->
                    {{-- <form onsubmit="sendToWhatsApp(event)" class="row contact-form-style-02">
                        <div class="col-md-6 mb-30px">
                            <input class="form-control required" type="text" id="name" name="name" placeholder="Your name*" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control required" type="email" id="email" name="email" placeholder="Your email address*" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control required" type="number" id="phone" name="phone" placeholder="Your phone*" />
                        </div>
                        <div class="col-md-12 mb-30px">
                            <textarea class="form-control" cols="40" rows="4" id="message" name="message" placeholder="Your message"></textarea>
                        </div>
                        <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                            <p class="text-center text-md-start fs-15 lh-26">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                        </div>
                        <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                            <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow submit" type="submit">Send on WhatsApp</button>
                        </div>
                        <div class="col-12">
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form> --}}
                    <!-- end WhatsApp contact form -->

                    <script>
                        function sendToWhatsApp(event) {
                            event.preventDefault();
                            const name = document.getElementById('name').value;
                            const phone = document.getElementById('phone').value;
                            const email = document.getElementById('email').value;
                            const message = document.getElementById('message').value;
                            
                            const text = `Hi, I am *${name}*. Please provide more info.\n\nHere are my details:\nName: ${name}\nPhone: ${phone}\nEmail: ${email}\nMessage: ${message}`;
                            const encodedText = encodeURIComponent(text);
                            const whatsappNumber = "8078688378"; // Include your country code
                            window.open(`https://wa.me/${whatsappNumber}?text=${encodedText}`, '_blank');
                        }
                    </script>

                </div>
            </div>

            <!-- social media row -->
            <div class="row align-items-center justify-content-center mt-8">
                <div class="col-md-auto text-center text-md-end sm-mb-20px">
                    <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Connect with social media </h6>
                </div>
                <div class="col-2 d-none d-lg-inline-block">
                    <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                </div>
                <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                    <ul class="large-icon dark">
                        <li class="m-0"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                        <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                        <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-linkedin"></i><span></span></a></li>
                        {{-- <li class="m-0"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>       --}}
                    </ul>                  
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- end section --> 
@endsection

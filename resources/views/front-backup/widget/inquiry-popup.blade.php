<div class="modal fade" id="inquiryModal" tabindex="-1" role="dialog" aria-labelledby="inquiryModalLabel"
    aria-hidden="true">

    

    <div class="modal-dialog" role="document">




        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title pull-left" id="inquiryModalLabel" style="color: #bc7931;text-transform: uppercase;font-weight: bold;word-spacing: 2px;letter-spacing: 1px;">Inquire Now</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

            @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <ul>
                <li>{{ $error }}</li>
        </ul>
    </div>
    @endforeach
@endif

                <div class="row g-3">

                    <div class="col-sm-12 col-12 service-form">
                        <div class="card inquiry-form">
                            <div class="card-body">


                                <form class="theme-form" action="{{ route('storeContactForm') }}"
                                    method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="page_url" value="{{ Request::url() }}">

                                    <div class="form-group">
                                        <label for="name">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="name" value=""
                                            required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" name="phone" id="phone" value=""
                                            required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Country</label>
                                        <select name="address" class="form-control" name="address">
                                            @foreach(getCountries() as $country)
                                            <option value="{{$country}}" @if($country=='India' ) selected="true" @endif>
                                                {{$country}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="service">service</label>
                                        <select class="form-control" name="service" id="service">
                                            <option value="">Choose Your Service</option>

                                            @foreach(getServiceList() as $service)
                                            <option value="{{$service}}">{{$service}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    
                                    <div class="form-group" style="margin:18px 0px">
                                        <label for="document">Upload Document</label>
                                        <input type="file" name="document" id="document" value="">
                                        <p class="text-danger">File type: doc, docx, pdf, xls, xlsx, csv, txt, jpeg, jpg, png, gif, webp (Max Size: 20MB)</p>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" name="message" id="message" rows="5"
                                            placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

</div>
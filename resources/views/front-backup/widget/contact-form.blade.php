
<form class="theme-form" action="{{ route('storeContactForm') }}" method="POST">
    @csrf

    
    <input type="hidden" name="page_url" value="{{ Request::url() }}">

    <div class="form-row row">
        <div class="col-md-6">
            <label for="fullname">Full fullname</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name"
                required="" value="{{old('name')}}">
            <input type="hidden" name="type" value="contact">
        </div>
        <div class="col-md-6">
            <label for="phone">Phone number</label>
            <input type="number" class="form-control" name="phone" placeholder="Enter your number"
                required="" value="{{old('phone')}}">
        </div>

        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" required="" value="{{old('email')}}">
        </div>
        
        <div class="col-md-6">
            <label for="service">Service</label>
            <select class="form-control" name="service" required="" {{old('service')}}>
                <option value="">Select Service</option>
                @foreach(getServiceList() as $service)
                    <option value="{{$service}}" @if(old('service') == $service) selected @endif>{{$service}}</option>
                @endforeach

            </select>
        </div>
        
        <div class="col-md-12">
            <label for="review">Write Your Message</label>
            <textarea class="form-control" placeholder="Write Your Message"
                name="message" rows="6">{{old('message')}}</textarea>
        </div>
        <div class="col-md-12">
            <button class="btn btn-solid" type="submit">Send Your Message</button>
        </div>
    </div>
</form>

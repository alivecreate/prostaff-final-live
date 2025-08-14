



<div class="card inquiry-form">
    <div class="card-header p-0 m-0"><h3>Inquire Now</h3></div>
    <div class="card-body">
      

        <form class="theme-form" action="{{ route('storeContactForm') }}" method="POST">
            @csrf
        
        <input type="hidden" name="page_url" value="{{ Request::url() }}">
        <div class="form-group">
          <label for="name">Full Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name"  id="name" placeholder="Enter your name"
            value="{{ old('name') }}" required>
            @error('name')
                <p class="text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="phone">Phone <span class="text-danger">*</span></label>
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number"
           value="{{ old('phone') }}" required>
          @error('phone')
              <p class="text text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
          value="{{ old('email') }}">
        </div>
        
          <div class="form-group">
            <label for="service">Service</label>
            <select class="form-control" name="service" required="">
                <option value="">Select Service</option>
                @foreach(getServices() as $service)
                    <option value="{{$service->title}}"  @if(old('service', optional($service->title)) == $service->title) selected @endif >{{$service->title}}</option>
                @endforeach
                <option value="Annual Maintenance Contract (AMC)">Annual Maintenance Contract (AMC)</option>
                <option value="Other">Other</option>


            </select>
        </div>
        

        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      
    </div>
  </div>

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
        
        @if(isset($service) && $service =='Farming Services')
          <div class="form-group">
            <label for="service">Service</label>
            <select class="form-control" name="service" required="">
                <option value="">Select Service</option>
                @foreach(getFarmingServiceList() as $service)
                    <option value="{{$service}}"  @if(old('service', optional($service)) == $service) selected @endif >{{$service}}</option>
                @endforeach

            </select>
        </div>
        @elseif(isset($service) && $service =='Individual Farming Service')

        <input type="hidden" name="service" value="{{$service}}">
        <h4>Select Induvidual Farming Service:</h4>
        <div class="row mb-4">
          

          <div class="col-sm-6 d-flex" style="flex-direction: column;">
          <p><input type="checkbox"  name="individualService[]" value="Drip irrigation for watering" @if(is_array(old('individualService')) && in_array('Drip irrigation for watering', old('individualService'))) checked @endif> Drip irrigation for watering</p>
          <p><input type="checkbox"  name="individualService[]" value="Fertilizers" @if(is_array(old('individualService')) && in_array('Fertilizers', old('individualService'))) checked @endif> Fertilizers</p>
          <p><input type="checkbox"  name="individualService[]" value="Equipment and labours for farming work" @if(is_array(old('individualService')) && in_array('Equipment and labours for farming work', old('individualService'))) checked @endif> Equipment and labours for farming work</p>
          <p><input type="checkbox"  name="individualService[]" value="Regular consulting" @if(is_array(old('individualService')) && in_array('Regular consulting', old('individualService'))) checked @endif> Regular consulting</p>
        </div>

        <div class="col-sm-6 d-flex" style="flex-direction: column;">
          <p><input type="checkbox"  name="individualService[]" value="Crop collecting" @if(is_array(old('individualService')) && in_array('Crop collecting', old('individualService'))) checked @endif> Crop collecting</p>
          <p><input type="checkbox"  name="individualService[]" value="Entire crop sale without grading (optional)" @if(is_array(old('individualService')) && in_array('Entire crop sale without grading (optional)', old('individualService'))) checked @endif> Entire crop sale without grading (optional)</p>
          <p><input type="checkbox"  name="individualService[]" value="Another needful stuff message and call" @if(is_array(old('individualService')) && in_array('Another needful stuff message and call', old('individualService'))) checked @endif> Another needful stuff message and call</p>
          <p><input type="checkbox"  name="individualService[]" value="Integrated waste management" @if(is_array(old('individualService')) && in_array('Integrated waste management', old('individualService'))) checked @endif> Integrated waste management</p>
        </div>
      </div>
      
      @elseif(isset($service) && $service =='Individual Hydroponic Farming Service')

        <input type="hidden" name="service" value="{{$service}}">
        <h4>Select Individual Hydroponic Farming Service:</h4>
        <div class="row mb-4">
          

          <div class="col-sm-6 d-flex" style="flex-direction: column;">
          <p><input type="checkbox"  name="individualService[]" value="Bordering" @if(is_array(old('individualService')) && in_array('Bordering', old('individualService'))) checked @endif> Bordering</p>
          <p><input type="checkbox"  name="individualService[]" value="Shade" @if(is_array(old('individualService')) && in_array('Shade', old('individualService'))) checked @endif> Shade</p>
          <p><input type="checkbox"  name="individualService[]" value="All pipes | Mugs | and Trays with fitting" @if(is_array(old('individualService')) && in_array('All pipes | Mugs | and Trays with fitting', old('individualService'))) checked @endif> All pipes, Mugs, and Trays with fitting</p>
          <p><input type="checkbox"  name="individualService[]" value="Water pump with fitting" @if(is_array(old('individualService')) && in_array('Water pump with fitting', old('individualService'))) checked @endif> Water pump with fitting</p>
          <p><input type="checkbox"  name="individualService[]" value="Water tank with fitting" @if(is_array(old('individualService')) && in_array('Water tank with fitting', old('individualService'))) checked @endif> Water tank with fitting</p>
        </div>


        <div class="col-sm-6 d-flex" style="flex-direction: column;">
          <p><input type="checkbox"  name="individualService[]" value="Seeds" @if(is_array(old('individualService')) && in_array('Seeds', old('individualService'))) checked @endif> Seeds</p>
          <p><input type="checkbox"  name="individualService[]" value="Nutritious" @if(is_array(old('individualService')) && in_array('Nutritious', old('individualService'))) checked @endif> Nutritious</p>
          <p><input type="checkbox"  name="individualService[]" value="Regular consulting" @if(is_array(old('individualService')) && in_array('Regular consulting', old('individualService'))) checked @endif> Regular consulting</p>
          <p><input type="checkbox"  name="individualService[]" value="Labour for work if needed" @if(is_array(old('individualService')) && in_array('Labour for work if needed', old('individualService'))) checked @endif> Labour for work if needed</p>
          <p><input type="checkbox"  name="individualService[]" value="Another needful stuff Message/Call" @if(is_array(old('individualService')) && in_array('Another needful stuff Message/Call', old('individualService'))) checked @endif> Another needful stuff Message/Call</p>
        </div>
      </div>
      
      
        @elseif(isset($service) && $service =='Contact Form')
          <div class="form-group">
            <label for="service">Service</label>
            <select class="form-control" name="service" required="">
                <option value="">Select Service</option>
                @foreach(getServiceList() as $service)
                    <option value="{{$service}}"  @if(old('service', optional($service)) == $service) selected @endif >{{$service}}</option>
                @endforeach
            </select>
        </div>
        @elseif(isset($service))
            <input type="hidden" name="service" value="{{$service}}">
        @else
            <div class="form-group">
                <label for="service">Service</label>
                <select class="form-control" name="service" required="">
                    <option value="">Select Service</option>
                    @foreach(getServiceList() as $service)
                        <option value="{{$service}}"  @if(old('service', optional($service)) == $service) selected @endif >{{$service}}</option>
                    @endforeach

                </select>
            </div>
        @endif

        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
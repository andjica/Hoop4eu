@include('components.header-banner')
@include('components.nav')
<div class="container contact">
<div class="row my-5 bg-form">

<div class="col-md-6">

		</div>
		<div class="col-md-5  p-3 rounded">
		@if(session('success'))
                <div class="alert border border-success">
                <img src="{{asset('/')}}img/success.jpg" class="img-fluid rounded-circle" width="45px">
				 {{session('success')}}
				 <i class="fas fa-check"></i>
                </div>
            @endif
			<div class="contact-form">
				<h4 class="text-left"><i class="fas fa-envelope text-info"></i> &nbsp;Contact Us,<br>We would love to hear from you !</h4>
            <form action="{{route('contact-email')}}" method="post"> 
            @csrf
    
				<div class="form-group">
				  <label class="control-label" for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="firstname" placeholder="Enter First Name" name="firstname">
					@if ($errors->has('firstname')) <p style="color:red;">{{ $errors->first('firstname') }}</p> @endif 
				</div>
				<div class="form-group">
				  <label class="control-label" for="lname">Last Name:</label> 
					<input type="text" class="form-control" id="lname" name="lastname" placeholder="Enter Last Name" name="lastname">
					@if ($errors->has('lastname')) <p style="color:red;">{{ $errors->first('lastname') }}</p> @endif 
				</div>
				<div class="form-group">
				  <label class="control-label" for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" name="email">
					@if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif 	
				</div>
				<div class="form-group">
				  <label class="control-label" for="comment">Comment:</label>
					<textarea class="form-control" rows="5" id="comment" name="message"></textarea>
					@if ($errors->has('message')) <p style="color:red;">{{ $errors->first('message') }}</p> @endif 	
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary float-right">Send email</button>
				  </div>
				</div>
                </form>
			</div>
		</div>
</div>
</div>

@include('components.footer')

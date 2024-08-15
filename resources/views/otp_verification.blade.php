
<x-guest-layout>
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Email Verification</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
    <div class="container ">
        <div class="row justify-content-center align-items-center otp_div">
            <div class="col-md-7">
                <img src="{{asset('assets')}}/images/business-laptop.png" alt="">
            </div>
            <div class="col-md-5 otp_sec bg-white p-4">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                @if(session()->has('invalid'))
                <div class="alert alert-success">
                    {{ session()->get('invalid') }}
                </div>
                @endif
                <br />
                @if(session()->has('incorrect'))
                <div class="alert alert-success">
                    {{ session()->get('incorrect') }}
                </div>
                @endif
                <!-- Modal -->
                <form action="{{ route('verifyotp')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Enter OTP</label>
                        <input type="hidden" name="user" value="{{ $user->id }}" class="form-control" placeholder="Entrez OTP">
                        <input type="number" name="token" class="form-control" placeholder="Enter OTP ">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 w-100 post_btn">Submit</button>
                    <a href="{{ route('resend-otp', $user->id) }}" class="btn btn-primary mt-3 w-100 post_btn">You have not received? Resend</a>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>

<x-guest-layout>
 <div id="page-content " class="mt-5">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Créer un compte</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                       <form  id="CustomerLoginForm"  class="contact-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                          <div class="row">
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="FirstName">Nom et prénom</label>
                                    <input type="text"  name="fullname" placeholder="Nom et prénom" id="FirstName" autofocus="">
                                </div>
                                   @error('fullname')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                               </div>
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="email" placeholder="Email" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                </div>
                                     @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Mot de passe</label>
                                    <input type="password" value="" name="password" placeholder="Mot de passe" id="CustomerPassword" class="">
                                </div>
                                     @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Créer">
                            </div>
                         </div>
                     </form>
                     <div class="social-login">
                            <a class="d-flex align-items-center justify-content-center btn mb-3 p-2"
                                href="{{ url('/login/google') }}" class="d-flex social-pd">
                                <span><i class="fa-brands fa-google"></i></span>
                                <span class="mx-3">Créer un compte avec Google</span>
                            </a>
                        </div>
                    </div>
               	</div>
            </div>
        </div>

    </div>
</x-guest-layout>

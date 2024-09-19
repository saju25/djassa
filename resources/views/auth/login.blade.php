<x-guest-layout>

    <div id="page-content" class="mt-5">
        <!--Page Title-->
        <div class="page section-header text-center ">
            <div class="page-title">
                <div class="wrapper">
                    <h1 class="page-width">Se connecter</h1>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row flex-column">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                    <div class="mb-4">
                        <form class="contact-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">Email</label>
                                        <input type="email" name="loginname" :value="old('loginname')" placeholder="Email" required>
                                    </div>
                                    <x-input-error class="text-danger" :messages="$errors->get('loginname')"
                                        class="mt-2" />
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword">Mot de passe</label>
                                        <input class="" id="password" type="password" name="password"
                                            placeholder="Mot de passe">
                                    </div>
                                    <x-input-error class="text-danger" :messages="$errors->get('password')"
                                        class="mt-2" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="submit" class="btn mb-3" value="Se connecter">
                                    <p class="mb-4">
                                        <a href="{{ route('password.request') }}" id="RecoverPassword">Mot de passe oublié ?</a> &nbsp; | &nbsp;
                                        <a href="{{ route('register') }}" id="customer_register_link">Créer un compte</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="social-login">
                        <a href="{{ url('/login/google') }}"
                            class="d-flex align-items-center justify-content-center btn mb-3 p-2">
                            <span><i class="fa-brands fa-google"></i></span>
                            <span class="mx-3">Connectez-vous avec Google</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>


</x-guest-layout>

<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6 recent_activities p-3 m-5">
                <div class="mb-2">
                   Forgot your password? No problem. Just provide us with your email address and we'll email you a password reset link so you can choose a new one.
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <div>
                            <x-input-label class="col-form-label" for="email" value="E-mail" />
                        </div>
                        <div class="">
                             <x-text-input id="email" class="form-control" placeholder="Enter Your Email..." type="email" name="email" :value="old('email')" required />
                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="mb-3 align-items-center">
                        <input class="form-control btn btn-success" type="submit" value="Password reset link via email">
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-guest-layout>

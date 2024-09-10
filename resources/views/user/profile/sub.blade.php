<x-app-layout>

    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Subscription Page</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="sub_f">
                    <h1 class="btn-success text-center p-3">Essential</h1>
                    <h3 > 2000F/month
                        Ideal for small businesses just starting out and wanting to test the platform.
                    </h3>
                    <ul class="mx-4">
                        <li>Online store creation</li>
                        <li>Inventory management</li>
                        <li>Access to a network of delivery services</li>
                        <li>Order tracking</li>
                        <li>Multiple payment options</li>
                    </ul>
                    <div class="btn btn-success w-100 p-3 mt-3 cursor-pointer" href="#" onclick='calltouchpay1()'>
                        subscription </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="sub_f">
 <h1 class="btn-success text-center p-3">Pro</h1>
                    <h3 class=""> 10,000F for 6 months
                        Perfect for growing businesses that need more stability, with an added bonus.
                    </h3>
                    <ul class="mx-4">
                        <li>All benefits of the Essential plan</li>
                        <li>+1 month free</li>
                        <br>
                        <br>
                    </ul>
                    <div class="btn btn-success w-100 p-3 mt-3 cursor-pointer" href="#" onclick='calltouchpay2()'>
                        subscription </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="sub_f">
 <h1 class="btn-success text-center p-3">Premium</h1>
                    <h3 class=""> 20,000F per year
                        The best value for established businesses looking to maximize their online presence, with
                        extra savings.
                    </h3>
                    <ul class="mx-4">
                        <li>All benefits of the Essential plan</li>
                        <li>+2 months free</li>
                        <br>
                        <br>
                    </ul>
                    <div class="btn btn-success w-100 p-3 mt-3 cursor-pointer" href="#" onclick='calltouchpay3()'>
                        subscription </div>

                </div>
            </div>
        </div>
    </div>

      @php
        $email = Auth::user()->email;
        $first = Auth::user()->name;
        $last = Auth::user()->fullname;
        $phone = Auth::user()->phone;
    @endphp


    <script src=https://touchpay.gutouch.net/touchpayv2/script/touchpaynr/prod_touchpay-0.0.1.js  type="text/javascript"></script>
          <script type="text/javascript">
            function calltouchpay1(){

                var email = {!! json_encode($email) !!};
                var first = {!! json_encode($first) !!};
                var last = {!! json_encode($last) !!};
                var phone = {!! json_encode($phone) !!};



                sendPaymentInfos(new Date().getTime(),
                                 'XCPNY11168','v4GE9BuvtAA9tuDS9xZsmPLVpAZ0wZFcZFAb9OBcauTQeS3Dw4',
                                 'xcompnay.com',  {!! json_encode(url('test-success')) !!},
            {!! json_encode(url('test-fail')) !!}, 2000,
                                 'Abidjan',email,first,last,phone);
            }
        </script>

        <script type="text/javascript">
            function calltouchpay2(){

                var email = {!! json_encode($email) !!};
                var first = {!! json_encode($first) !!};
                var last = {!! json_encode($last) !!};
                var phone = {!! json_encode($phone) !!};


                sendPaymentInfos(new Date().getTime(),
                                'XCPNY11168','v4GE9BuvtAA9tuDS9xZsmPLVpAZ0wZFcZFAb9OBcauTQeS3Dw4',
                                'xcompnay.com',  {!! json_encode(url('test-success')) !!},
                                {!! json_encode(url('test-fail')) !!}, 10000,
                                'Abidjan', email, first, last,  phone);
            }
        </script>

        <script type="text/javascript">
            function calltouchpay3(){

                var email = {!! json_encode($email) !!};
                var first = {!! json_encode($first) !!};
                var last = {!! json_encode($last) !!};
                var phone = {!! json_encode($phone) !!};


                sendPaymentInfos(new Date().getTime(),
                                'XCPNY11168','v4GE9BuvtAA9tuDS9xZsmPLVpAZ0wZFcZFAb9OBcauTQeS3Dw4',
                                'xcompnay.com',  {!! json_encode(url('test-success')) !!},
                                {!! json_encode(url('test-fail')) !!}, 20000,
                                'Abidjan', email, first, last,  phone);
            }
        </script>


</x-app-layout>

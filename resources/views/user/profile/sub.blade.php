<x-app-layout>

    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Page d'abonnement</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="sub_f">
                    <h1 class="btn-success text-center p-3">Essentiel</h1>
                    <h3 > 2000 F/mois : Idéal pour les petites entreprises qui débutent et souhaitent tester la plateforme.
                    </h3>
                    <ul class="mx-4">
                        <li>Création de boutique en ligne
</li>
                        <li>Gestion des stocks
</li>
                        <li>Accès à un réseau de services de livraison</li>
                        <li>Suivi des commandes
</li>
                        <li>Multiples options de paiement</li>
                    </ul>
                    <div class="btn btn-success w-100 p-3 mt-3 cursor-pointer" href="#" onclick='calltouchpay1()'>
                        Souscrire </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="sub_f">
 <h1 class="btn-success text-center p-3">Pro</h1>
                    <h3 class=""> 10 000 F pour 6 mois : Parfait pour les entreprises en croissance qui ont besoin de plus de stabilité, avec un bonus supplémentaire.
                    </h3>
                    <ul class="mx-4">
                        <li>Tous les avantages du plan Essentiel</li>
                        <li>+1 mois gratuit
</li>
                        <br>
                        <br>
                    </ul>
                    <div class="btn btn-success w-100 p-3 mt-3 cursor-pointer" href="#" onclick='calltouchpay2()'>
                        Souscrire </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="sub_f">
 <h1 class="btn-success text-center p-3">Premium</h1>
                    <h3 class=""> 20 000 F par an : La meilleure offre pour les entreprises établies cherchant à maximiser leur présence en ligne, avec des économies supplémentaires.
                    </h3>
                    <ul class="mx-4">
                        <li>Tous les avantages du plan Essentiel</li>
                        <li>+2 mois gratuits</li>
                        <br>
                        <br>
                    </ul>
                    <div class="btn btn-success w-100 p-3 mt-3 cursor-pointer" href="#" onclick='calltouchpay3()'>
                        Souscrire </div>

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

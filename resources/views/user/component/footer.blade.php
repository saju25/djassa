<footer id="footer">
    <div class="site-footer">
        <div class="container">
            <!--Footer Links-->
            <div class="footer-top">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        <h4 class="h4">Achat rapide
</h4>
                        <form id="myForm2" action="{{ route('all.product') }}" method="GET">
                            <div>
                                <div class="p-2">
                                    <div id="mb_btn2" class="category-btn" data-input-id="mb_ch2">
                                        <div>Mobiles</div>
                                        <input id="mb_ch2" type="checkbox" name="add_category" value="Mobiles" hidden>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div id="ele_btn2" class="category-btn" data-input-id="ele_ch2">
                                        <div>Electronics</div>
                                        <input id="ele_ch2" type="checkbox" name="add_category" value="Electronics"
                                            hidden>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div id="me_btn2" class="category-btn" data-input-id="me_ch2">
                                        <div>Men's Fashion & Grooming</div>
                                        <input id="me_ch2" type="checkbox" name="add_category"
                                            value="Men's Fashion & Grooming" hidden>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div id="wo_btn" class="category-btn" data-input-id="wo_ch2">
                                        <div>Women's Fashion & Beauty</div>
                                        <input id="wo_ch2" type="checkbox" name="add_category"
                                            value="Women's Fashion & Beauty" hidden>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        <h4 class="h4">Informations</h4>
                        <ul>
                            <li><a href="{{route('about.us')}}">A propos de nous</a></li>

                            <li><a href="{{route('policy-and-confidentiality')}}">Politique de Confidentialité </a></li>
                            <li><a href="{{route('all.product')}}">Boutiques</a></li>
                            <li><a href="{{ route('profile.detail') }}">Mon compte</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        <h4 class="h4">Service Client</h4>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                         </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        <h4 class="h4">Contactez-nous</h4>
                        <ul class="addressFooter">
                            @php
                    $webSocialLinks = \App\Models\WebSocialLink::first();
                    @endphp
                            <li><i class="icon anm anm-map-marker-al"></i>
                                <p>{{ $webSocialLinks->address }}</p>
                            </li>
                            <li class="phone"><i class="icon anm anm-phone-s"></i>
                                <p>{{ $webSocialLinks->number }}</p>
                            </li>
                            <li class="email"><i class="icon anm anm-envelope-l"></i>
                                <p>{{ $webSocialLinks->email }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Footer Links-->
            <hr>
        </div>
    </div>
</footer>
<!--End Footer-->
<!--Scoll Top-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<!--End Scoll Top-->

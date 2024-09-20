<!--Search Form Drawer-->
<div class="search">
    <div class="search__form">
        <form class="search-bar__form" action="#">
            <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
            <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
    </div>
</div>
<!--End Search Form Drawer-->
<!--Top Header-->
<div class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                <p class="phone-no">Djassa Market : Le marché qui vient à vous !</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                <div class="text-center">
                    <p class="top-header_middle-text"></p>
                </div>
            </div>
            <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                @guest
                <ul class="customer-links list-inline">
                    <li><a href="{{route('login')}}">Se connecter</a></li>
                    <li><a href="{{route('register')}}">Créer un compte</a></li>
                </ul>
                @endguest
                @auth
                <ul class="dropdown customer-links list-inline">
                    <li class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->fullname}}
                    </li>
                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">


                        <li class="dropdown-item">
                            <form  method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link class="dropdown-item  text-center" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                                                                                                                                                                                            this.closest('form').submit();">
                                    Se déconnecter
                                </x-dropdown-link>
                            </form>

                        </li>
                    </div>
                </ul>
                @endauth
            </div>
        </div>
    </div>
</div>
<!--End Top Header-->
<!--Header-->
<div class="header-wrap classicHeader animated d-flex">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!--Desktop Logo-->
            <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                <a href="{{route('home')}}">
                    <img src="{{asset('assets')}}/images/logo.png" alt="Belle Multipurpose Html Template"
                        title="Belle Multipurpose Html Template" />
                </a>
            </div>
            <!--End Desktop Logo-->
            <div class="col-2 col-sm-3 col-md-3 col-lg-10">
                <div class="d-block d-lg-none">
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                </div>
                <!--Desktop Menu-->
                <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                        <li class="lvl1 parent megamenu"><a href="{{route('home')}}">Accueil<i class="anm anm-angle-down-l"></i></a>
                        </li>
                         <li class="lvl1"><a href="{{route('profile.detail')}}"><b>lancez vous dans le e-commerce
!</b> <i class="anm anm-angle-down-l"></i></a>
                        </li>
                         <li class="lvl1"><a href="{{route('all.product')}}"><b>Achetez maintenant
!</b> <i class="anm anm-angle-down-l"></i></a>
                        </li>
                        <li class="lvl1"><a href="{{route('user.add.post')}}"><b>Postez une annonce!</b> <i class="anm anm-angle-down-l"></i></a>
                        </li>




                    </ul>
                </nav>
                <!--End Desktop Menu-->
            </div>
            <!--Mobile Logo-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/images/logo.png" alt="Belle Multipurpose Html Template"
                            title="Belle Multipurpose Html Template" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Header-->
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Fermer le menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="{{route('home')}}">Accueil <i class="anm anm-plus-l"></i></a>
        </li>
         <li class="lvl1"><a href="{{route('profile.detail')}}"><b>lancez vous dans le e-commerce
!</b></a>
        </li>
         <li class="lvl1"><a href="{{route('all.product')}}"><b>Achetez maintenant
!</b></a>
        </li>
       <li class="lvl1"><a href="{{route('user.add.post')}}"><b>Postez une annonce!</b></a>
        </li>
       </ul>
</div>
<!--End Mobile Menu-->

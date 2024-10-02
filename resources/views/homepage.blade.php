<x-guest-layout>
    <div id="page-content">
        <!--Home slider-->
        <div class="slideshow slideshow-wrapper pb-section sliderFull">
            <div class="home-slideshow">

                @forelse ($banners as $banner)
                <div class="slide">
                    <div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" src="{{asset('banners')}}/{{ $banner->photo }}"
                            title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">{{$banner->title}}</h2>
                                    <span class="mega-subtitle slideshow__subtitle">{{$banner->sub_title}}</span>
                                    <a href="{{$banner->link}}"> <span class="btn">Achetez maintenant</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <!-- Display this if the $items collection is empty -->
                <p>No items found.</p>
                @endforelse

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Collection de catégories</h2>
                        <p>Notre catégorie la plus populaire en fonction des ventes</p>
                    </div>
                </div>
            </div>
            <form id="myForm" action="{{ route('all.product') }}" method="GET">
                <div class="row">
                    <div class="col-md-3 p-3">
                        <div id="mb_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <div>Mobiles</div>
                            <br>
                            <input id="mb_ch" type="checkbox" name="add_category" value="Mobiles" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ele_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-shop"></i>
                            <div>Électronique</div>
                            <br>
                            <input id="ele_ch" type="checkbox" name="add_category" value="Électronique" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ve_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-car"></i>
                            <div>Véhicules</div>
                            <br>
                            <input id="ve_ch" type="checkbox" name="add_category" value="Véhicules" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="pr_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-house-laptop"></i>
                            <div>Immobilier</div>
                            <br>
                            <input id="pr_ch" type="checkbox" name="add_category" value="Immobilier" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ho_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-people-pulling"></i>
                            <div>Maison & Vie</div>
                            <br>
                            <input id="ho_ch" type="checkbox" name="add_category" value="Maison & Vie" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="pe_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-dog"></i>
                            <div>Mode et Soins pour Hommes</div>
                            <br>
                            <input id="pe_ch" type="checkbox" name="add_category" value="Mode et Soins pour Hommes"
                                hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="me_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-person-half-dress"></i>
                            <div>Mode et Beauté pour Femmes</div>
                            <br>
                            <input id="me_ch" type="checkbox" name="add_category" value="Mode et Beauté pour Femmes"
                                hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="wo_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-person-drowning"></i>
                            <div>Animaux & Animaux de Compagnie</div>
                            <input id="wo_ch" type="checkbox" name="add_category" value="Animaux & Animaux de Compagnie"
                                hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="hob_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-person-skiing"></i>
                            <div>Loisirs, Sports & Enfants</div>
                            <br>
                            <input id="hob_ch" type="checkbox" name="add_category" value="Loisirs, Sports & Enfants"
                                hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="bus_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-briefcase"></i>
                            <div>Affaires & Industrie</div>
                            <br>
                            <input id="bus_ch" type="checkbox" name="add_category" value="Affaires & Industrie" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="es_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-arrows-rotate"></i>
                            <div>Éducation</div>
                            <br>
                            <input id="es_ch" type="checkbox" name="add_category" value="Éducation" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ed_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-book-open"></i>
                            <div>Essentiels</div>
                            <br>
                            <input id="ed_ch" type="checkbox" name="add_category" value="Essentiels" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ser_btn" class="text-center home_cat p-2">
                             <i class="fa-solid fa-tractor"></i>

                            <div>Agriculture</div>
                            <br>
                            <input id="ser_ch" type="checkbox" name="add_category" value="Agriculture" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ag_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-gears"></i>
                            <div>Services</div>
                            <br>
                            <input id="ag_ch" type="checkbox" name="add_category" value="Services" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="otr_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-binoculars"></i>
                            <div>Autres</div>
                            <br>
                            <input id="otr_ch" type="checkbox" name="add_category" value="Autres" hidden>
                        </div>
                    </div>
                    <div class="col-md-3 p-3">
                        <a href="{{route('all.product')}}" class="text-decoration-none">
                            <div id="otr_btn" class="text-center home_cat p-2">
                                <i class="fa-solid fa-caret-up"></i>
                                <div>Toutes les catégories</div>
                                <br>
                            </div>
                        </a>
                    </div>
                </div>

            </form>
        </div>
        <!--End Home slider-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Collection en vedette</h2>
                        <p>Nos produits les plus populaires en fonction des ventes</p>
                    </div>
                </div>
            </div>
            <div class="grid-products">
                <div class="row">
                    @foreach($latestAdd as $latestAdd)



                    <div class="col-md-3 col-sm-6">
                        <div class="item home_page_product">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a
                                    href="{{ route('add.details', ['id' => $latestAdd->id,'slug' => $latestAdd->slug]) }}">
                                    @php
                                    // This is already an array
                                    $imgs = $latestAdd->img_path;
                                    // Decode JSON string to PHP array
                                    $array = json_decode( $imgs, true);
                                    @endphp
                                    @if ( $array )
                                    <!-- image -->

                                    <img class="primary blur-up lazyload" src="{{asset('product')}}/{{$array[0]}}" alt="image"
                                        title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" src="{{asset('product')}}/{{$array[1]}}" alt="image"
                                        title="product">
                                    <!-- End hover image -->
                                    @endif

                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"
                                    method="post">
                                    <a
                                        href="{{ route('add.details', ['id' => $latestAdd->id,'slug' => $latestAdd->slug]) }}">
                                        <button class="btn btn-success" type="button" tabindex="0">Acheter
                                            maintenant</button>
                                    </a>
                                </form>

                                <!-- end product button -->
                            </div>
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a
                                        href="{{ route('add.details', ['id' => $latestAdd->id,'slug' => $latestAdd->slug]) }}">
                                        {{ ucwords(Str:: limit($latestAdd -> name, 25, '...')) }}
                                    </a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price"><i class="fa-solid fa-franc-sign px-2"></i>{{ $latestAdd->
                                        best_price}}</span>
                                    <span class="price"><i class="fa-solid fa-franc-sign px-2"></i>{{ $latestAdd->
                                        discounted_price
                                        }}</span>
                                </div>
                                <!-- End product price -->



                                @php
                                $review = \App\Models\Comment::where('post_id', $latestAdd->id)->get();
                                $rationvalue = round($review->avg('rating'));
                                @endphp
                                @if ($rationvalue)
                                <div class="product-review">
                                    <a class="reviewLink" href="#tab2">
                                        @for ($i = 0; $i < $rationvalue ; $i++) <i class="fa fa-star"></i>
                                            @endfor
                                    </a>
                                </div>
                                @else
                                <div class="product-review">
                                    <a class="reviewLink" href="#tab2">
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>

                                    </a>
                                </div>
                                @endif

                            </div>
                            <!-- End product details -->
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>

    </div>

</x-guest-layout>

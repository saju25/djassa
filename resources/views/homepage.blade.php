<x-guest-layout>
    <div id="page-content">
        <!--Home slider-->
        <div class="slideshow slideshow-wrapper pb-section sliderFull">
            <div class="home-slideshow">
                <div class="slide">
                    <div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img"
                            data-src="assets/images/slideshow-banners/belle-banner1.jpg"
                            src="assets/images/slideshow-banners/belle-banner1.jpg" alt="Shop Our New Collection"
                            title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Shop Our New Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or
                                        modern. We have you covered</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img"
                            data-src="assets/images/slideshow-banners/belle-banner2.jpg"
                            src="assets/images/slideshow-banners/belle-banner2.jpg" alt="Summer Bikini Collection"
                            title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Summer Bikini Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend
                                        only</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Category collection</h2>
                        <p>Our most popular Category based on sales</p>
                    </div>
                </div>
            </div>
            <form id="myForm" action="{{ route('all.product') }}" method="GET">
                <div class="row">
                    <div class="col-md-3 p-3">
                        <div id="mb_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <div>Mobiles</div>
                            <input id="mb_ch" type="checkbox" name="add_category" value="Mobiles" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ele_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-shop"></i>
                            <div>Electronics</div>
                            <input id="ele_ch" type="checkbox" name="add_category" value="Electronics" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ve_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-car"></i>
                            <div>Vehicles</div>
                            <input id="ve_ch" type="checkbox" name="add_category" value="Vehicles" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="pr_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-house-laptop"></i>
                            <div>Property</div>
                            <input id="pr_ch" type="checkbox" name="add_category" value="Property" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ho_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-people-pulling"></i>
                            <div>Home & Living</div>
                            <input id="ho_ch" type="checkbox" name="add_category" value="Home & Living" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="pe_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-dog"></i>
                            <div>Pets & Animals</div>
                            <input id="pe_ch" type="checkbox" name="add_category" value="Pets & Animals" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="me_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-person-half-dress"></i>
                            <div>Men's Fashion & Grooming</div>
                            <input id="me_ch" type="checkbox" name="add_category" value="Men's Fashion & Grooming"
                                hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="wo_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-person-drowning"></i>
                            <div>Women's Fashion & Beauty</div>
                            <input id="wo_ch" type="checkbox" name="add_category" value="Women's Fashion & Beauty"
                                hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="hob_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-person-skiing"></i>
                            <div>Hobbies, Sports & Kids</div>
                            <input id="hob_ch" type="checkbox" name="add_category" value="Hobbies, Sports & Kids"
                                hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="bus_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-briefcase"></i>
                            <div>Business & Industry</div>
                            <input id="bus_ch" type="checkbox" name="add_category" value="Business & Industry" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="es_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-arrows-rotate"></i>
                            <div>Essentials</div>
                            <input id="es_ch" type="checkbox" name="add_category" value="Essentials" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ed_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-book-open"></i>
                            <div>Education</div>
                            <input id="ed_ch" type="checkbox" name="add_category" value="Education" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ag_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-tractor"></i>
                            <div>Agriculture</div>
                            <input id="ag_ch" type="checkbox" name="add_category" value="Agriculture" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="ser_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-gears"></i>
                            <div>Services</div>
                            <input id="ser_ch" type="checkbox" name="add_category" value="Services" hidden>
                        </div>
                    </div>

                    <div class="col-md-3 p-3">
                        <div id="otr_btn" class="text-center home_cat p-2">
                            <i class="fa-solid fa-binoculars"></i>
                            <div>Other</div>
                            <input id="otr_ch" type="checkbox" name="add_category" value="Other" hidden>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!--End Home slider-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Featured collection</h2>
                        <p>Our most popular products based on sales</p>
                    </div>
                </div>
            </div>
            <div class="grid-products">
                <div class="row">
                    @foreach($latestAdd as $latestAdd)

                    <div class="col-md-3 col-sm-6">
                        <div class="item ">
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

                                    <img class="primary blur-up lazyload" src=" {{$array[0]}}" alt="image"
                                        title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" src=" {{$array[1]}}" alt="image"
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
                                        <button class="btn btn-success" type="button" tabindex="0">Buy
                                            Now</button>
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
                                        {{ ucwords(Str::limit($latestAdd->name, 25, '...')) }}
                                    </a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price"><i
                                            class="fa-solid fa-dollar-sign px-2"></i>{{$latestAdd->best_price}}</span>
                                    <span class="price"><i
                                            class="fa-solid fa-dollar-sign px-2"></i>{{$latestAdd->discounted_price
                                        }}</span>
                                </div>
                                <!-- End product price -->

                                <div class="product-review mb-3">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
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
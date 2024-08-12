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

                    <div class="col-md-3">
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
                                    <a href="{{ route('add.details', ['id' => $latestAdd->id,'slug' => $latestAdd->slug]) }}">
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
        <!--Collection Box slider-->
        <div class="collection-box section">
            <div class="container-fluid">
                <div class="collection-grid">
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="assets/images/collection/fashion.jpg"
                                src="assets/images/collection/fashion.jpg" alt="Fashion" class="blur-up lazyload" />
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Fashion</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img class="blur-up lazyload" data-src="assets/images/collection/cosmetic.jpg"
                                src="assets/images/collection/cosmetic.jpg" alt="Cosmetic" />
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Cosmetic</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item blur-up lazyloaded">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="assets/images/collection/bag.jpg" src="assets/images/collection/bag.jpg"
                                alt="Bag" class="blur-up lazyload" />
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Bag</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="assets/images/collection/accessories.jpg"
                                src="assets/images/collection/accessories.jpg" alt="Accessories"
                                class="blur-up lazyload" />
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="assets/images/collection/shoes.jpg" src="assets/images/collection/shoes.jpg"
                                alt="Shoes" class="blur-up lazyload" />
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="assets/images/collection/jewellry.jpg"
                                src="assets/images/collection/jewellry.jpg" alt="Jewellry" class="blur-up lazyload" />
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Jewellry</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Collection Box slider-->



    </div>



</x-guest-layout>

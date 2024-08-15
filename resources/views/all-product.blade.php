<x-guest-layout>
    <div id="page-content">
        <!--Collection Banner-->
        <form action="{{ route('all.product') }}" method="GET">
            <div class="row justify-content-center text-center pt-5 pb-5 page section-header ">
                <h1 class="find_banner_title w-100">Shop</h1>
                <div class="col-md-8 ">
                    <div class="row mt-3 search_div  justify-content-around">
                        <div class="d-flex justify-content-center align-items-center col-md-5">
                            <i class="fa-solid fa-magnifying-glass find_banner_form_icon"></i>
                            <input name="keyword" class="form-control me-2" type="search"
                                value="{{ request('keyword') }}" placeholder="Product Name">
                        </div>
                        <div class="d-flex justify-content-center align-items-center col-md-4">
                            <i class="fa-solid fa-location-crosshairs find_banner_form_icon"></i>
                            <input name="location" value="{{ request('location') }}" class="form-control me-2"
                                type="search" placeholder="Location">
                        </div>

                        <div class="d-flex justify-content-center align-items-center col-md-3">
                            <button class="btn btn-outline-success w-100" onclick="click()">Search</button>
                        </div>
                    </div>
                </div>
            </div>


            <!--End Collection Banner-->

            <div class="container mt-5">
                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                        <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i>
                        </div>
                        <div class="sidebar_tags">
                            <!--Categories-->
                            <div class="sidebar_widget categories filter-widget">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="sidebar_categories">
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">Clothing</a>
                                            <ul class="sublinks">
                                                <li class="level2"><a href="#;" class="site-nav">Men</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Women</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Child</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">View All Clothing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">Jewellery</a>
                                            <ul class="sublinks">
                                                <li class="level2"><a href="#;" class="site-nav">Ring</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Neckalses</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">Eaarings</a></li>
                                                <li class="level2"><a href="#;" class="site-nav">View All Jewellery</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Shoes</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Accessories</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Collections</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Sale</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Page</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Categories-->
                            <!--Popular Products-->
                            <div class="sidebar_widget">
                                <div class="widget-title">
                                    <h2>Popular Products</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="list list-sidebar-products">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#">
                                                            <img class="grid-view-item__image"
                                                                src="assets/images/product-images/mini-product-img.jpg"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Cena
                                                            Skirt</a>
                                                        <div class="grid-view-item__meta"><span
                                                                class="product-price__price"><span
                                                                    class="money">$173.60</span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image"> <a class="grid-view-item__link"
                                                            href="#"><img class="grid-view-item__image"
                                                                src="assets/images/product-images/mini-product-img1.jpg"
                                                                alt="" /></a> </div>
                                                    <div class="details"> <a class="grid-view-item__title"
                                                            href="#">Block
                                                            Button Up</a>
                                                        <div class="grid-view-item__meta"><span
                                                                class="product-price__price"><span
                                                                    class="money">$378.00</span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image"> <a class="grid-view-item__link"
                                                            href="#"><img class="grid-view-item__image"
                                                                src="assets/images/product-images/mini-product-img2.jpg"
                                                                alt="" /></a> </div>
                                                    <div class="details"> <a class="grid-view-item__title"
                                                            href="#">Balda
                                                            Button Pant</a>
                                                        <div class="grid-view-item__meta"><span
                                                                class="product-price__price"><span
                                                                    class="money">$278.60</span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image"> <a class="grid-view-item__link"
                                                            href="#"><img class="grid-view-item__image"
                                                                src="assets/images/product-images/mini-product-img3.jpg"
                                                                alt="" /></a> </div>
                                                    <div class="details"> <a class="grid-view-item__title"
                                                            href="#">Border
                                                            Dress in Black/Silver</a>
                                                        <div class="grid-view-item__meta"><span
                                                                class="product-price__price"><span
                                                                    class="money">$228.00</span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Popular Products-->
                            <!--Banner-->
                            <div class="sidebar_widget static-banner">
                                <img src="assets/images/side-banner-2.jpg" alt="" />
                            </div>
                            <!--Banner-->
                            <!--Information-->
                            <div class="sidebar_widget">
                                <div class="widget-title">
                                    <h2>Information</h2>
                                </div>
                                <div class="widget-content">
                                    <p>Use this text to share information about your brand with your customers. Describe
                                        a
                                        product, share announcements, or welcome customers to your store.</p>
                                </div>
                            </div>
                            <!--end Information-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                        <div class="productList">
                            <div class="grid-products grid--view-items">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a
                                                href="{{ route('add.details', ['id' => $product->id,'slug' => $product->slug]) }}">
                                                @php
                                                // This is already an array
                                                $imgs = $product->img_path;
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
                                            <div class="variants add">
                                                <a
                                                    href="{{ route('add.details', ['id' => $product->id,'slug' => $product->slug]) }}">
                                                    <button class="btn btn-success" type="button" tabindex="0">Buy
                                                        Now</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a
                                                    href="{{ route('add.details', ['id' => $product->id,'slug' => $product->slug]) }}">
                                                    {{ ucwords(Str::limit($product->name, 18, '...')) }}
                                                </a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price"><i
                                                        class="fa-solid fa-dollar-sign px-2"></i>{{$product->best_price}}</span>
                                                <span class="price"><i
                                                        class="fa-solid fa-dollar-sign px-2"></i>{{$product->discounted_price
                                                    }}</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End Main Content-->
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-xl-12">
                {!! $products->appends(Request::all())->links() !!}
            </div>
        </div>
    </div>


    @push('script')

    @endpush
</x-guest-layout>
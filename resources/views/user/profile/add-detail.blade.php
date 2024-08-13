<x-app-layout>


        <!--Body Content-->
        <div id="page-content">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="{{route('home')}}" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Product</span>
                    </div>
                </div>
                <!--End Breadcrumb-->

                <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                    <!--product-single-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="product-thumb">
                                        <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                 @php
                                     // This is already an array
                                    $imgs = $product->img_path;
                                    // Decode JSON string to PHP array
                                    $array = json_decode( $imgs, true);
                                @endphp
                                @foreach($array  as $image)
                                            <a data-image="{{ $image}}" data-zoom-image="{{ $image}}" class="slick-slide slick-cloned" >
                                                <img class="blur-up lazyload" src="{{ $image}}" alt="" />
                                            </a>
                                @endforeach
                                        </div>
                                    </div>
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" data-zoom-image="{{ $array[0]}}" alt="" src="{{ $array[0]}}" />
                                        </div>
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                    </div>
                                    <div class="lightboximages">
                                        @foreach($array  as $image)
                                            <a href="{{ $image}}" data-size="1462x2048"></a>
                                            @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title">{{$product->name}}</h1>
                                        <div class="product-nav clearfix">
                                            <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="prInfoRow">
                                            <div class="product-stock">
                                            @php
                                                $sku = trim($product->sku); // Clean up whitespace
                                            @endphp

                                            @if (empty($sku))
                                                <span class="outstock">Unavailable</span>
                                            @else
                                            <span class="instock">In Stock</span>
                                            @endif
                                            </div>
                                            <div class="product-sku">SKU: <span class="variant-sku">{{$product->sku}}</span></div>
                                            <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                        </div>
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money">${{$product->best_price }}</span></s>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">${{$product->discounted_price  }}</span></span>
                                            </span>
                                              @php
                                               $save= $product->best_price - $product->discounted_price;
                                               $percentage = ($save * 100) / $product->best_price;

                                                @endphp
                                            <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                                <span>You Save</span>
                                                <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money">${{ $save}}</span>
                                                </span>

                                               <span class="off">(<span>{{ number_format($percentage, 2) }}</span>%)</span>
                                            </span>
                                        </p>

                                    <div class="product-single__description rte">
                                      @php
    $description = strip_tags($product->description);
    $limitedDescription = Str::limit($description, 150, '...');
@endphp

{{ ucwords($limitedDescription) }}
                                    </div>
                                    <div id="quantity_message">Hurry! Only  <span class="items">{{$product->sku}}</span>  left in stock.</div>
                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                          @php
                                            // Assuming $product->color is a JSON-encoded string
                                            $colorsArray = json_decode($product->color, true);
                                        @endphp
                                        @if ( $colorsArray)
                                          <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                          <label class="header">Color:</label>
                                          @foreach($colorsArray as $index => $colorArray)
                                            @php
                                                $colorValue = $colorArray['value'];
                                                // Generate a unique ID for each swatch
                                                $swatchId = "swatch-{$index}-" . strtolower($colorValue);
                                            @endphp
                                            <div data-value="{{ $colorValue }}" class="swatch-element color {{ strtolower($colorValue) }} available">
                                                <input class="swatchInput" id="{{ $swatchId }}" type="radio" name="option-0" value="{{ $colorValue }}">
                                                <label class="swatchLbl color small" for="{{ $swatchId }}" style="background-color:{{ $colorValue }};" title="{{ ucfirst($colorValue) }}"></label>
                                            </div>
                                        @endforeach

                                        </div>
                                        </div>
                                        @endif
                                         @php
                                            // Assuming $product->color is a JSON-encoded string
                                            $weightsArray = json_decode($product->weight, true);
                                        @endphp
                                        @if ( $weightsArray)
                                          @foreach($weightsArray as $index => $weightArray)
                                            @php
                                                $weightValue = $weightArray['value'];
                                                // Generate a unique ID for each swatch
                                                $swatchId = "swatch-{$index}-" . strtolower($weightValue);
                                            @endphp
                                            <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                              <label class="header">Weight:</label>
                                              <div data-value="XS" class="swatch-element xs available">
                                                <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="{{ $weightValue}}">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">{{ $weightValue}}</label>
                                              </div>
                                             </div>
                                        </div>
                                        @endforeach

                                        @endif
                                         @php
                                            // Assuming $product->color is a JSON-encoded string
                                            $sizesArray = json_decode($product->size, true);
                                        @endphp
                                        @if ( $sizesArray)
                                           @foreach($sizesArray as $index => $sizetArray)
                                            @php
                                                $sizetArray = $sizetArray['value'];
                                                // Generate a unique ID for each swatch
                                                $swatchId = "swatch-{$index}-" . strtolower($sizetArray);
                                            @endphp
                                            <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                              <label class="header">Size:</label>
                                              <div data-value="XS" class="swatch-element xs available">
                                                <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="{{ $sizetArray}}">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">{{ $sizetArray}}</label>
                                              </div>
                                             </div>
                                        </div>
                                        @endforeach

                                        @endif

                                        <p class="infolinks"><a href="#sizechart" class="sizelink btn"> Size Guide</a> <a href="#productInquiry" class="emaillink btn"> Ask About this Product</a></p>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa-solid fa-circle-minus"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa-solid fa-circle-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Contact Us</span>
                                                </button>
                                            </div>
                                            <div class="shopify-payment-button" data-shopify="payment-button">
                                                 @if (empty($sku))
                                                <h3 style="cursor: none;" class="btn btn-success w-100 mt-2"> Out Of Stock</h3>
                                            @else
                                            <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button>
                                            @endif

                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <p class="shippingMsg"><i class="fa fa-truck" aria-hidden="true"></i>  ESTIMATED DELIVERY WITHIN <b id="fromDate">7 DAY</b>.</p>
                                    <div class="userViewMsg" data-user="20" data-time="11000"><i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> PEOPLE ARE LOOKING FOR THIS PRODUCT</div>
                                </div>
                        </div>
                    </div>
                    <!--End-product-single-->
                    <!--Product Tabs-->
                    <div class="tabs-listing mt-5">
                        <ul class="product-tabs">
                            <li rel="tab1"><a class="tablink">Product Details</a></li>
                         </ul>
                        <div class="tab-container">
                            <div id="tab1" class="tab-content">
                                <div class="product-description rte">
                                    @php
                                        $description = strip_tags($product->description);
                                    @endphp

                                    {{ ucwords($description) }}
                                </div>
                            </div>

                            <div id="tab2" class="tab-content">
                                <div id="shopify-product-reviews">
                                    <div class="spr-container">
                                        <div class="spr-header clearfix">
                                            <div class="spr-summary">
                                                <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                                <span class="spr-summary-actions">
                                                    <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class="spr-form clearfix">
                                                <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                    <h3 class="spr-form-title">Write a review</h3>
                                                    <fieldset class="spr-form-contact">
                                                        <div class="spr-form-contact-name">
                                                          <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                          <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                        </div>
                                                        <div class="spr-form-contact-email">
                                                          <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                          <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-review">
                                                      <div class="spr-form-review-rating">
                                                        <label class="spr-form-label">Rating</label>
                                                        <div class="spr-form-input spr-starrating">
                                                          <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                        </div>
                                                      </div>

                                                      <div class="spr-form-review-title">
                                                        <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                        <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                      </div>

                                                      <div class="spr-form-review-body">
                                                        <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                        <div class="spr-form-input">
                                                          <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                        </div>
                                                      </div>
                                                    </fieldset>
                                                    <fieldset class="spr-form-actions">
                                                        <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="spr-reviews">
                                                <div class="spr-review">
                                                    <div class="spr-review-header">
                                                        <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                        <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                        <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                                    </div>
                                                    <div class="spr-review-content">
                                                        <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                </div>
                                                <div class="spr-review">
                                                  <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                    <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                                  </div>

                                                  <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                    </p>
                                                  </div>
                                                </div>
                                                <div class="spr-review">
                                                  <div class="spr-review-header">
                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                    <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                    <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                                  </div>

                                                  <div class="spr-review-content">
                                                    <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                    <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!--End Product Tabs-->

                    <!--Related Product Slider-->
                    <div class="related-product grid-products">
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                            <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                        </header>
                        <div class="productPageSlider">
                                @if($related_c_P->isEmpty())
        <p>No related posts found.</p>
    @else
        <ul>
            @foreach($related_c_P as $rdlated_add)
                 <div class="col-12">
                        <div class="item ">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a
                                    href="{{ route('add.details', ['id' => $rdlated_add->id,'slug' => $rdlated_add->slug]) }}">
                                    @php
                                    // This is already an array
                                    $imgs = $rdlated_add->img_path;
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
                                        href="{{ route('add.details', ['id' => $rdlated_add->id,'slug' => $rdlated_add->slug]) }}">
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
                                    <a href="{{ route('add.details', ['id' => $rdlated_add->id,'slug' => $rdlated_add->slug]) }}">
                                        {{ ucwords(Str::limit($rdlated_add->name, 25, '...')) }}
                                    </a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price"><i
                                            class="fa-solid fa-dollar-sign px-2"></i>{{$rdlated_add->best_price}}</span>
                                    <span class="price"><i
                                            class="fa-solid fa-dollar-sign px-2"></i>{{$rdlated_add->discounted_price
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
        </ul>
    @endif

                        </div>
                        </div>
                    <!--End Related Product Slider-->

                    </div>
                <!--#ProductSection-product-template-->
            </div>
            <!--MainContent-->
        </div>
    	<!--End Body Content-->


    @push('script')

      <!-- Photoswipe Gallery -->
     <script src="{{ asset('assets') }}/js/vendor/photoswipe.min.js"></script>
     <script src="{{ asset('assets') }}/js/vendor/photoswipe-ui-default.min.js"></script>

    <script>
              $(function(){
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            item = {
                                src : $href,
                                w: $size[0],
                                h: $size[1]
                            }
                            items.push(item);
                    });
                    return items;
                }
            var items = getItems();

            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();

                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index-1;

                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
    </script>

    @endpush
</x-app-layout>

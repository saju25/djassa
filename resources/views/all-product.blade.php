<x-guest-layout>
    <div id="page-content">
        <!--Collection Banner-->
        <form id="myForm" action="{{ route('all.product') }}" method="GET">

            <div class=" page section-header ">
                <div class="container row flex-column justify-content-center align-items-center text-center pt-5 pb-5">
                    <div class="col-md-4">
                        <h1 class="find_banner_title w-100">Shop</h1>
                    </div>
                    <div class="col-md-8 ">
                        <div class="row mt-3 search_div  justify-content-around m-3">
                            <div class="d-flex justify-content-center align-items-center col-md-5">
                                <i class="fa-solid fa-magnifying-glass find_banner_form_icon"></i>
                                <input name="keyword" class="form-control me-2" type="search"
                                    value="{{ request('keyword') }}" placeholder="Product Name">
                            </div>
                            <div class="d-flex justify-content-center align-items-center col-md-4 ">
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
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Mobiles"><span
                                                    class="px-3">Mobiles</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Mobile Phones"><span class="px-3">Mobile
                                                            Phones</span>
                                                    </a>
                                                </li>

                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="add_category"
                                                            value="Mobile Phone Accessories"><span class="px-3">Mobile
                                                            Phone Accessories</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Mobiles"><span
                                                            class="px-3">Mobiles</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Wearables"><span
                                                            class="px-3">Wearables</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="SIM Cards"><span
                                                            class="px-3">SIM Cards</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Mobile Phone Services"><span class="px-3">Mobile
                                                            Phone Services</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Electronics"><span
                                                    class="px-3">Electronics</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Desktop Computers"><span class="px-3">Desktop
                                                            Computers</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Laptop & Computer Accessories"><span
                                                            class="px-3">Laptop & Computer Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Tablets & Accessories"><span class="px-3">Tablets &
                                                            Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="TVs"><span
                                                            class="px-3">TVs</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="TV & Video Accessories"><span class="px-3">TV & Video
                                                            Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Home Appliances"><span class="px-3">Home
                                                            Appliances</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Cameras, Camcorders & Accessories"><span
                                                            class="px-3">Cameras, Camcorders & Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="ACs & Home Electronics"><span class="px-3">ACs & Home
                                                            Electronics</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Audio & Sound Systems"><span class="px-3">Audio &
                                                            Sound Systems</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Computers"><span
                                                            class="px-3">Computers</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Video Game Consoles & Accessories"><span
                                                            class="px-3">Video Game Consoles & Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Photocopiers"><span class="px-3">Photocopiers</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Other Electronics"><span class="px-3">Other
                                                            Electronics</span>
                                                </li>
















                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Vehicles"><span
                                                    class="px-3">Vehicles</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Cars"><span
                                                            class="px-3">Cars</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Motorbikes"><span
                                                            class="px-3">Motorbikes</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Bicycles"><span
                                                            class="px-3">Bicycles</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Three Wheelers"><span class="px-3">Three
                                                            Wheelers</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Trucks"><span
                                                            class="px-3">Trucks</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Vans"><span
                                                            class="px-3">Vans</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Buses"><span
                                                            class="px-3">Buses</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Heavy Duty"><span
                                                            class="px-3">Heavy Dut</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Auto Parts & Accessories"><span class="px-3">Auto
                                                            Parts &
                                                            Accessorie</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Maintenance and Repair"><span
                                                            class="px-3">Maintenance and
                                                            Repai</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Water Transport"><span class="px-3">Water
                                                            Transport</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Auto Services"><span class="px-3">Auto
                                                            Services</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Rentals"><span
                                                            class="px-3">Rentals</span>
                                                </li>


                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Property"><span
                                                    class="px-3">Property</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Land For Sale"><span class="px-3">Land For
                                                            Sale</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Apartments For Sale"><span class="px-3">Apartments
                                                            For Sale</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Houses For Sale"><span class="px-3">Houses For
                                                            Sale</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Houses For Sale"><span class="px-3">Houses For
                                                            Sale</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Commercial Properties For Sale"><span
                                                            class="px-3">Commercial Properties For Sale</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Home & Living"><span
                                                    class="px-3">Home & Living</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Office & Shop Furniture"><span class="px-3">Office &
                                                            Shop Furniture</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Children's Furniture"><span class="px-3">Children's
                                                            Furniture</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Household Items"><span class="px-3">Household
                                                            Items</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Bathroom Products"><span class="px-3">Bathroom
                                                            Products</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Doors"><span
                                                            class="px-3">Doors</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Home Textiles & Decoration"><span class="px-3">Home
                                                            Textiles & Decoration</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Men's Fashion & Grooming"><span class="px-3">Men's Fashion &
                                                    Grooming</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Jacket & Coat"><span class="px-3">Jacket &
                                                            Coat</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Shirts & T-Shirts"><span class="px-3">Shirts &
                                                            T-Shirts</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Pants"><span
                                                            class="px-3">Pants</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Traditional Clothing"><span class="px-3">Traditional
                                                            Clothing</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Grooming & Bodycare"><span class="px-3">Grooming &
                                                            Bodycare</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Optical & Sunglasses"><span class="px-3">Optical &
                                                            Sunglasses</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Baby Boy's Fashion"><span class="px-3">Baby Boy's
                                                            Fashion</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Bags & Accessories"><span class="px-3">Bags &
                                                            Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Footwear"><span
                                                            class="px-3">Footwear</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Watches"><span
                                                            class="px-3">Watches</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Wholesale - Bulk"><span class="px-3">Wholesale -
                                                            Bulk</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Cars"><span
                                                            class="px-3">Cars</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Women's Fashion & Beauty"><span class="px-3">Women's Fashion
                                                    & Beauty</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Traditional Wear"><span class="px-3">Traditional
                                                            Wear</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Winter Wear"><span
                                                            class="px-3">Winter Wear</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Bags & Accessories"><span class="px-3">Bags &
                                                            Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Lingerie & Sleepwear"><span class="px-3">Lingerie &
                                                            Sleepwear</span>
                                                </li>

                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Footwear"><span
                                                            class="px-3">Footwear</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Jewellery & Watches"><span class="px-3">Jewellery &
                                                            Watches</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Beauty & Personal Care"><span class="px-3">Beauty &
                                                            Personal Care</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Optical & Sunglasses"><span class="px-3">Optical &
                                                            Sunglasses</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Wholesale - Bulk"><span class="px-3">Wholesale -
                                                            Bulk</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Baby Girl's Fashion"><span class="px-3">Baby Girl's
                                                            Fashion</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Pets & Animals"><span
                                                    class="px-3">Pets & Animals</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Pets"><span
                                                            class="px-3">Pets</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Farm Animals"><span class="px-3">Farm Animals</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Pet & Animal Accessories"><span class="px-3">Pet &
                                                            Animal Accessories</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Pet & Animal food"><span class="px-3">Pet & Animal
                                                            food</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Other Pets & Animals"><span class="px-3">Other Pets &
                                                            Animals</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Hobbies, Sports & Kids"><span class="px-3">Hobbies, Sports &
                                                    Kids</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Musical Instruments"><span class="px-3">Musical
                                                            Instruments</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Sports"><span
                                                            class="px-3">Sports</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Fitness & Gym"><span class="px-3">Fitness &
                                                            Gym</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Music, Books & Movies"><span class="px-3">Music,
                                                            Books & Movies</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Children's Items"><span class="px-3">Children's
                                                            Items</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Other Hobby, Sport & Kids items"><span
                                                            class="px-3">Other Hobby, Sport & Kids items</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Business & Industry"><span class="px-3">Business &
                                                    Industry</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Office Supplies & Stationary"><span
                                                            class="px-3">Office Supplies & Stationary</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Safety & Security"><span class="px-3">Safety &
                                                            Security</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Industry Machinery & Tools"><span
                                                            class="px-3">Industry Machinery & Tools</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Raw Materials & Industrial Supplies"><span
                                                            class="px-3">Raw Materials & Industrial Supplies</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Licences, Titles & Tenders"><span
                                                            class="px-3">Licences, Titles & Tenders</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Medical Equipment & Supplies"><span
                                                            class="px-3">Medical Equipment & Supplies</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Other Business & Industry Items"><span
                                                            class="px-3">Other Business & Industry Items</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Education"><span
                                                    class="px-3">Education</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Textbooks"><span
                                                            class="px-3">Textbooks</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Tuition"><span
                                                            class="px-3">Tuition</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Courses"><span
                                                            class="px-3">Courses</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Study Abroad"><span class="px-3">Study Abroad</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Other Education"><span class="px-3">Other
                                                            Education</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Essentials"><span
                                                    class="px-3">Essentials</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Baby Products"><span class="px-3">Baby
                                                            Products</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Healthcare"><span
                                                            class="px-3">Healthcare</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Household"><span
                                                            class="px-3">Household</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Other Essentials"><span class="px-3">Other
                                                            Essentials</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Services"><span
                                                    class="px-3">Services</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Building maintenance"><span class="px-3">Building
                                                            maintenance</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Domestic & Daycare Services"><span
                                                            class="px-3">Domestic & Daycare Services</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Fitness & Beauty Services"><span class="px-3">Fitness
                                                            & Beauty Services</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="IT Services"><span
                                                            class="px-3">IT Services</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Matrimonials"><span class="px-3">Matrimonials</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Media & Event Management Services"><span
                                                            class="px-3">Media & Event Management Services</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Professional Services"><span
                                                            class="px-3">Professional Services</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Servicing & Repair"><span class="px-3">Servicing &
                                                            Repair</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Tours & Travels"><span class="px-3">Tours &
                                                            Travels</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Agriculture"><span
                                                    class="px-3">Agriculture</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Crops, Seeds & Plants"><span class="px-3">Crops,
                                                            Seeds & Plants</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Farming Tools & Machinery"><span class="px-3">Farming
                                                            Tools & Machinery</span>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Other Agriculture"><span class="px-3">Other
                                                            Agriculture</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Other"><span
                                                    class="px-3">Other</span>
                                            </a>
                                          </li>

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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myForm');
            const checkboxes = form.querySelectorAll('input[type="checkbox"]');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    if (checkbox.checked) {
                        form.submit();
                    }
                });
            });
        });
    </script>
    @endpush
</x-guest-layout>

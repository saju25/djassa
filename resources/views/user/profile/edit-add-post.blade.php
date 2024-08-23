<x-app-layout>
    <!--Page Title-->
    <div class="page section-header text-center ">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Add Product
                </h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container mb-3 ">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                <form id="productForm" action="{{ route('product.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST') <!-- Ensure you're using POST method for form submission -->

    <div class="row">
        <div class="col-md-6">
            <div>
                <label class="col-form-label">Name</label>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $product->name) }}">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <div>
                <label class="col-form-label">SKU</label>
            </div>
            <input type="number" name="sku" class="form-control" placeholder="SKU" value="{{ old('sku', $product->sku) }}">
            @error('sku')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div>
                <label class="col-form-label">Description</label>
            </div>
            <textarea id="editor" class="col-form-label w-100 p-3" name="description" placeholder="Description">{{ old('description', $product->description) }}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div>
                <label class="col-form-label">Best Price</label>
            </div>
            <input type="number" name="best_price" class="form-control" placeholder="Best Price" value="{{ old('best_price', $product->best_price) }}">
            @error('best_price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <div>
                <label class="col-form-label">Discounted Price</label>
            </div>
            <input type="number" name="discounted_price" class="form-control" placeholder="Discounted Price" value="{{ old('discounted_price', $product->discounted_price) }}">
            @error('discounted_price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div>
                <label class="col-form-label">Variants</label>
            </div>
            <!-- Color -->
            <div class="row mt-2 justify-content-center align-items-center">
                <div class="col-md-4 mt-2 d-flex">
                    <div class="col-6">
                        <span class="p-2">Color</span>
                    </div>
                    <div class="col-6">
                        <label class="switch">
                            <input id="color" type="checkbox" {{ $product->color ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-8 color-col">
                    <input class="colorIn" id="colorIn" name="color" value="{{ old('color', $product->color) }}">
                </div>
            </div>
            <!-- Weight -->
            <div class="row mt-2 justify-content-center align-items-center">
                <div class="col-md-4 mt-2 d-flex">
                    <div class="col-6">
                        <span class="p-2">Weight</span>
                    </div>
                    <div class="col-6">
                        <label class="switch">
                            <input id="weight" type="checkbox" {{ $product->weight ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-8">
                    <input class="weightIn" id="weightIn" name="weight" value="{{ old('weight', $product->weight) }}">
                </div>
            </div>
            <!-- Size -->
            <div class="row mt-2 justify-content-center align-items-center">
                <div class="col-md-4 mt-2 d-flex">
                    <div class="col-6">
                        <span class="p-2">Size</span>
                    </div>
                    <div class="col-6">
                        <label class="switch">
                            <input id="size" type="checkbox" {{ $product->size ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-8">
                    <input class="sizeIn" id="sizeIn" name="size" value="{{ old('size', $product->size) }}">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <label class="col-form-label">Product Photo</label>
            </div>
            <div class="dropify_div">
                <input type="file" id="input-file-now" name="product_img[]" class="dropify" multiple />
                <div id="file-preview">
                    <!-- Display current images if needed -->
                    @if($product->img_path)
                        @foreach(json_decode($product->img_path) as $imgPath)
                            <img src="{{ Storage::url($imgPath) }}" alt="Product Image" width="100" height="100">
                        @endforeach
                    @endif
                </div>
            </div>
            @error('product_img')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div>
                <label class="col-form-label">Category</label>
            </div>
              <select id="category" class="form-select w-100" name="add_cate">
                                    <option id="1" selected disabled>Select one</option>
                                    <option id="2" value="Mobiles">Mobiles</option>
                                    <option id="3" value="Electronics">Electronics</option>
                                    <option id="4" value="Vehicles">Vehicles</option>
                                    <option id="5" value="Property">Property</option>
                                    <option id="6" value="Home & Living">Home & Living</option>
                                    <option id="7" value="Men's Fashion & Grooming">Men's Fashion & Grooming</option>
                                    <option id="8" value="Women's Fashion & Beauty">Women's Fashion & Beauty</option>
                                    <option id="9" value="Pets & Animals">Pets & Animals</option>
                                    <option id="10" value="Hobbies, Sports & Kids">Hobbies, Sports & Kids</option>
                                    <option id="11" value="Business & Industry">Business & Industry</option>
                                    <option id="12" value="Education">Education</option>
                                    <option id="13" value="Essentials">Essentials</option>
                                    <option id="14" value="Services">Services</option>
                                    <option id="15" value="Agriculture">Agriculture</option>
                                    <option id="16" value="Other">Other</option>
                                </select>
            @error('add_cate')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 meth mt-2">

                                @error('sub_cate')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <div>
                <label class="col-form-label">City</label>
            </div>
            <select class="form-select w-100" name="city">
                                    <option selected disabled>Select one</option>
                                    <option value="Abidjan">Abidjan</option>
                                    <option value="Aboisso">Aboisso</option>
                                    <option value="Adiaké">Adiaké</option>
                                    <option value="Adzopé">Adzopé</option>
                                    <option value="Agboville">Agboville</option>
                                    <option value="Agnibilékrou">Agnibilékrou</option>
                                    <option value="Akoupé">Akoupé</option>
                                    <option value="Alépé">Alépé</option>
                                    <option value="Ananda">Ananda</option>
                                    <option value="Anyama">Anyama</option>
                                    <option value="Anoumaba">Anoumaba</option>
                                    <option value="Arrah">Arrah</option>
                                    <option value="Ayamé">Ayamé</option>
                                    <option value="Ayamé 1">Ayamé 1</option>
                                    <option value="Ayamé 2">Ayamé 2</option>
                                    <option value="Bangolo">Bangolo</option>
                                    <option value="Bassam (Grand-Bassam)">Bassam (Grand-Bassam)</option>
                                    <option value="Bettié">Bettié</option>
                                    <option value="Biankouma">Biankouma</option>
                                    <option value="Bocanda">Bocanda</option>
                                    <option value="Bondoukou">Bondoukou</option>
                                    <option value="Bongouanou">Bongouanou</option>
                                    <option value="Bouaflé">Bouaflé</option>
                                    <option value="Bouaké">Bouaké</option>
                                    <option value="Bouna">Bouna</option>
                                    <option value="Boundiali">Boundiali</option>
                                    <option value="Brobo">Brobo</option>
                                    <option value="Dabakala">Dabakala</option>
                                    <option value="Dabou">Dabou</option>
                                    <option value="Daoukro">Daoukro</option>
                                    <option value="Dianra">Dianra</option>
                                    <option value="Diawala">Diawala</option>
                                    <option value="Didiévi">Didiévi</option>
                                    <option value="Dimbokro">Dimbokro</option>
                                    <option value="Divo">Divo</option>
                                    <option value="Djébonoua">Djébonoua</option>
                                    <option value="Duékoué">Duékoué</option>
                                    <option value="Ferkessédougou">Ferkessédougou</option>
                                    <option value="Fresco">Fresco</option>
                                    <option value="Gagnoa">Gagnoa</option>
                                    <option value="Gbon">Gbon</option>
                                    <option value="Gohitafla">Gohitafla</option>
                                    <option value="Grand-Lahou">Grand-Lahou</option>
                                    <option value="Guéyo">Guéyo</option>
                                    <option value="Guiglo">Guiglo</option>
                                    <option value="Issia">Issia</option>
                                    <option value="Jacqueville">Jacqueville</option>
                                    <option value="Kani">Kani</option>
                                    <option value="Katiola">Katiola</option>
                                    <option value="Kong">Kong</option>
                                    <option value="Kombolokoura">Kombolokoura</option>
                                    <option value="Korhogo">Korhogo</option>
                                    <option value="Lakota">Lakota</option>
                                    <option value="Logoualé">Logoualé</option>
                                    <option value="Man">Man</option>
                                    <option value="Mankono">Mankono</option>
                                    <option value="Nassian">Nassian</option>
                                    <option value="Niakara">Niakara</option>
                                    <option value="Odienné">Odienné</option>
                                    <option value="Oumé">Oumé</option>
                                    <option value="Sakassou">Sakassou</option>
                                    <option value="San Pedro">San Pedro</option>
                                    <option value="Sassandra">Sassandra</option>
                                    <option value="Séguéla">Séguéla</option>
                                    <option value="Sinématiali">Sinématiali</option>
                                    <option value="Soubré">Soubré</option>
                                    <option value="Tabou">Tabou</option>
                                    <option value="Taabo">Taabo</option>
                                    <option value="Tanda">Tanda</option>
                                    <option value="Tingréla">Tingréla</option>
                                    <option value="Tiassalé">Tiassalé</option>
                                    <option value="Tortiya">Tortiya</option>
                                    <option value="Touba">Touba</option>
                                    <option value="Toulepleu">Toulepleu</option>
                                    <option value="Toumodi">Toumodi</option>
                                    <option value="Vavoua">Vavoua</option>
                                    <option value="Yamoussoukro">Yamoussoukro</option>
                                    <option value="Zouan-Hounien">Zouan-Hounien</option>
                                    <option value="Zuénoula">Zuénoula</option>
                                </select>
            @error('city')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <div>
                <label class="col-form-label">Phone Number</label>
            </div>
            <input type="number" name="number" class="form-control" placeholder="8865...." value="{{ old('number', $product->number) }}">
            @error('number')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <input class="w-100 btn btn-success" type="submit" value="Update Product">
        </div>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
    </div>

    @push('styles')
    <!-- Dropify CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dropify.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/tagify.css">
    @endpush
    @push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script src="{{ asset('assets') }}/js/dropify.js"></script>
    <script src="{{ asset('assets') }}/js/tagify.js"></script>


    <script>
        $(document).ready(function () {
            let value = 0;

            $("#color").on("change", function () {
                value += 1;
                const variantValue = $("#colorIn");
                if (value % 2 === 0) {
                    variantValue.attr("name", "");
                } else {
                    variantValue.attr("name", "color");
                }
            });
        });
        $(document).ready(function () {
            let value = 0;

            $("#weight").on("change", function () {
                value += 1;
                const variantValue = $("#weightIn");
                if (value % 2 === 0) {
                    variantValue.attr("name", "");
                } else {
                    variantValue.attr("name", "weight");
                }
            });
        });
        $(document).ready(function () {
            let value = 0;

            $("#size").on("change", function () {
                value += 1;
                const variantValue = $("#sizeIn");
                if (value % 2 === 0) {
                    variantValue.attr("name", "");
                } else {
                    variantValue.attr("name", "size");
                }
            });
        });


        $(document).ready(function () {
            $('#category').on('change', function () {
                var val = $('#category').val();
                var html = ''; // Declare the html variable

                $('.meth').empty(); // Clear the .meth element0

                if (val == 'Mobiles') {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                        <option value="Mobile Phones">Mobile Phones</option>
                        <option value="Mobile Phone Accessories">Mobile Phone Accessories</option>
                        <option value="Wearables">Wearables</option>
                        <option value="SIM Cards">SIM Cards</option>
                        <option value="Mobile Phone Services">Mobile Phone Services</option>
                    </select>`;

                }
                if (val == 'Electronics') {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                        <option value="Desktop Computers">Desktop Computers</option>
                        <option value="Laptops">Laptops</option>
                        <option value="Laptop & Computer Accessories">Laptop & Computer Accessories</option>
                        <option value="Tablets & Accessories">Tablets & Accessories</option>
                        <option value="TVs">TVs</option>
                        <option value="TV & Video Accessories">TV & Video Accessories</option>
                        <option value="Home Appliances">Home Appliances</option>
                        <option value="Cameras, Camcorders & Accessories">Cameras, Camcorders & Accessories</option>
                        <option value="ACs & Home Electronics">ACs & Home Electronics</option>
                        <option value="Audio & Sound Systems">Audio & Sound Systems</option>
                        <option value="Video Game Consoles & Accessories">Video Game Consoles & Accessories</option>
                        <option value="Photocopiers">Photocopiers</option>
                        <option value="Other Electronics">Other Electronics</option>
                     </select>`;

                }
                if (val == 'Vehicles') {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                        <option value="Cars">Cars</option>
                        <option value="Motorbikes">Motorbikes</option>
                        <option value="Bicycles">Bicycles</option>
                        <option value="Three Wheelers">Three Wheelers</option>
                        <option value="Trucks">Trucks</option>
                        <option value="Vans">Vans</option>
                        <option value="Buses">Buses</option>
                        <option value="Heavy Duty">Heavy Duty</option>
                        <option value="Auto Parts & Accessories">Auto Parts & Accessories</option>
                        <option value="Maintenance and Repair">Maintenance and Repair</option>
                        <option value="Water Transport">Water Transport</option>
                        <option value="Auto Services">Auto Services</option>
                        <option value="Rentals">Rentals</option>
                     </select>`;

                }
                if (val == 'Property') {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                        <option value="Land For Sale">Land For Sale</option>
                        <option value="Apartments For Sale">Apartments For Sale</option>
                        <option value="Houses For Sale">Houses For Sale</option>
                        <option value="Houses For Sale">Houses For Sale</option>
                        <option value="Commercial Properties For Sale">Commercial Properties For Sale</option>
                    </select>`;

                }
                if (val == 'Home & Living') {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                        <option value="Office & Shop Furniture">Office & Shop Furniture</option>
                        <option value="Children's Furniture">Children's Furniture</option>
                        <option value="Household Items">Household Items</option>
                        <option value="Bathroom Products">Bathroom Products</option>
                        <option value="Doors">Doors</option>
                        <option value="Home Textiles & Decoration">Home Textiles & Decoration</option>
                     </select>`;

                }
                if (val == "Men's Fashion & Grooming") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                        <option value="Jacket & Coat">Jacket & Coat</option>
                        <option value="Shirts & T-Shirts">Shirts & T-Shirts</option>
                        <option value="Pants">Pants</option>
                        <option value="Traditional Clothing">Traditional Clothing</option>
                        <option value="Grooming & Bodycare">Grooming & Bodycare</option>
                        <option value="Optical & Sunglasses">Optical & Sunglasses</option>
                        <option value="Baby Boy's Fashion">Baby Boy's Fashion</option>
                        <option value="Bags & Accessories">Bags & Accessories</option>
                        <option value="Footwear">Footwear</option>
                        <option value="Watches">Watches</option>
                        <option value="Wholesale - Bulk">Wholesale - Bulk</option>
                        <option value="Cars">Cars</option>
                     </select>`;

                }
                if (val == "Women's Fashion & Beauty") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                        <option value="Traditional Wear">Traditional Wear</option>
                        <option value="Winter Wear">Winter Wear</option>
                        <option value="Bags & Accessories">Bags & Accessories</option>
                        <option value="Footwear">Footwear</option>
                        <option value="Lingerie & Sleepwear">Lingerie & Sleepwear</option>
                        <option value="Jewellery & Watches">Jewellery & Watches</option>
                        <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                        <option value="Optical & Sunglasses">Optical & Sunglasses</option>
                        <option value="Wholesale - Bulk">Wholesale - Bulk</option>
                        <option value="Baby Girl's Fashion">Baby Girl's Fashion</option>
                     </select>`;

                }
                if (val == "Pets & Animals") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='client_type' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                        <option value="Pets">Pets</option>
                        <option value="Farm Animals">Farm Animals</option>
                        <option value="Pet & Animal Accessories">Pet & Animal Accessories</option>
                        <option value="Pet & Animal food">Pet & Animal food</option>
                        <option value="Other Pets & Animals">Other Pets & Animals</option>
                        <option value="Cars">Cars</option>
                     </select>`;

                }
                if (val == "Hobbies, Sports & Kids") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                       <option value="Musical Instruments">Musical Instruments</option>
                       <option value="Sports">Sports</option>
                       <option value="Fitness & Gym">Fitness & Gym</option>
                       <option value="Music, Books & Movies">Music, Books & Movies</option>
                       <option value="Children's Items">Children's Items</option>
                       <option value="Other Hobby, Sport & Kids items">Other Hobby, Sport & Kids items</option>
                      </select>`;

                }
                if (val == "Business & Industry") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                      <option value="Office Supplies & Stationary">Office Supplies & Stationary</option>
                      <option value="Safety & Security">Safety & Security</option>
                      <option value="Industry Machinery & Tools">Industry Machinery & Tools</option>
                      <option value="Raw Materials & Industrial Supplies">Raw Materials & Industrial Supplies</option>
                      <option value="Licences, Titles & Tenders">Licences, Titles & Tenders</option>
                      <option value="Medical Equipment & Supplies">Medical Equipment & Supplies</option>
                      <option value="Other Business & Industry Items">Other Business & Industry Items</option>
                    </select>`;

                }
                if (val == "Education") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                      <option value="Textbooks">Textbooks</option>
                      <option value="Tuition">Tuition</option>
                      <option value="Courses">Courses</option>
                      <option value="Study Abroad">Study Abroad</option>
                      <option value="Other Education">Other Education</option>
                     </select>`;

                }
                if (val == "Essentials") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='client_type' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                     <option value="Baby Products">Baby Products</option>
                     <option value="Healthcare">Healthcare</option>
                     <option value="Household">Household</option>
                     <option value="Other Essentials">Other Essentials</option>
                     </select>`;

                }
                if (val == "Services") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                     <option value="Building maintenance">Building maintenance</option>
                     <option value="Domestic & Daycare Services">Domestic & Daycare Services</option>
                     <option value="Fitness & Beauty Services">Fitness & Beauty Services</option>
                     <option value="IT Services">IT Services</option>
                     <option value="Matrimonials">Matrimonials</option>
                     <option value="Media & Event Management Services">Media & Event Management Services</option>
                     <option value="Professional Services">Professional Services</option>
                     <option value="Servicing & Repair">Servicing & Repair</option>
                     <option value="Tours & Travels">Tours & Travels</option>
                     </select>`;

                }
                if (val == "Agriculture") {
                    html = `
                    <label>Select a subcategory</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Select one</option>
                    <option value="Crops, Seeds & Plants">Crops, Seeds & Plants</option>
                    <option value="Farming Tools & Machinery">Farming Tools & Machinery</option>
                    <option value="Other Agriculture">Other Agriculture</option>
                    </select>`;

                }

                $('.meth').html(html); // Add the HTML to the .meth element
            });
        });
    </script>

    @endpush

</x-app-layout>

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
                <div class="p-3">
                    <form id="productForm" action="{{ route('store.add') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="m-3 row">
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Name</label>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Name">

                                @error('job_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">SKU</label>
                                </div>
                                <input type="number" name="sku" class="form-control" placeholder="SKU">

                                @error('sku')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="row m-3 ">
                            <div class="col-md-12">
                                <div>
                                    <label class="col-form-label">Description</label>
                                </div>
                                <div>
                                    <textarea id="editor" class="col-form-label w-100 p-3" name="description"
                                        placeholder="Description">{{ old('job_description') }}</textarea>

                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="m-3 row">
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Best Price</label>
                                </div>
                                <input type="number" name="best_price" class="form-control" placeholder="Best Price">

                                @error('best_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Discounted Price</label>
                                </div>
                                <input type="number" name="discounted_price" class="form-control"
                                    placeholder="Discounted Price">

                                @error('discounted_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="m-3 row">

                            <div class="col-md-6 ">
                                <div>
                                    <label class="col-form-label">Variants</label>
                                </div>
                                <div class="meth">

                                    <div class="row mt-2 justify-content-center align-items-center">
                                        <div class="col-md-3 mt-2">
                                            <span class="p-2">Color</span>
                                            <label class="switch">
                                                <input id="color" type="checkbox">
                                                <span class="slider round"></span>
                                            </label>

                                        </div>
                                        <div class="col-md-9 color-col">
                                            <input class="colorIn" id="colorIn" name="" value="Red">
                                        </div>
                                    </div>
                                </div>
                                <div class="meth">

                                    <div class="row mt-2 justify-content-center align-items-center">
                                        <div class="col-md-3 mt-2">
                                            <span class="p-2">Weight</span>
                                            <label class="switch">
                                                <input id="weight" type="checkbox">
                                                <span class="slider round"></span>
                                            </label>

                                        </div>
                                        <div class="col-md-9">
                                            <input class="weightIn" id="weightIn" name="" value="20 kg">
                                        </div>
                                    </div>
                                </div>
                                <div class="meth">

                                    <div class="row mt-2 justify-content-center align-items-center">
                                        <div class="col-md-3 mt-2">
                                            <span class="p-2">Size</span>
                                            <label class="switch">
                                                <input id="size" type="checkbox">
                                                <span class="slider round"></span>
                                            </label>

                                        </div>
                                        <div class="col-md-9">
                                            <input class="sizeIn" id="sizeIn" name="" value="XL">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Product Photo</label>
                                </div>
                                <div class="dropify_div">
                                    <input type="file" id="input-file-now" name="product_img[]" class="dropify"
                                        multiple />
                                    <div id="file-preview">

                                    </div>
                                </div>

                                @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="m-3 row">

                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Category</label>
                                </div>
                                <select class="form-select w-100" name="add_category">
                                    <option selected disabled selected>Select one</option>
                                    <option value="Household">Household</option>
                                    <option value="Management">Management</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="LED TV">LED TV</option>
                                </select>

                                @error('job_category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row m-3">
                            <div class="col-12">
                                <input class="w-100 btn btn-success" type="submit" value="Publish Your Add">
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
    </script>

    @endpush

</x-app-layout>

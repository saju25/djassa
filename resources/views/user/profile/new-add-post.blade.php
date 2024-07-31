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
                    <form action="{{ route('store.job') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="m-3 row">
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Name</label>
                                </div>
                                <input type="text" name="job_title" class="form-control" placeholder="Name">

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
                                <div class="meth">
                                    <div>
                                        <label class="col-form-label">Variants</label>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <select class="form-select w-100" name="career_level">
                                                <option selected disabled selected>Option</option>
                                                <option value="Débutant">Size</option>
                                                <option value="Débutant">Color</option>
                                                <option value="Débutant">Weight</option>
                                                <option value="Débutant">Smell</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="variant_value" class="form-control"
                                                placeholder="Value">
                                        </div>
                                    </div>



                                    @error('career_level')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <div class="w-100 btn btn-success variant_add"><i class="fa-solid fa-plus">
                                        </i>Add another option</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Product Photo</label>
                                </div>
                                <div class="dropify_div">
                                    <input type="file" id="input-file-now" class="dropify" multiple />
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
                                <select class="form-select w-100" name="job_category">
                                    <option selected disabled selected>Select Category</option>
                                    <option value="Household">Household</option>
                                    <option value="Household">Management</option>
                                    <option value="Household">Electronics</option>
                                </select>

                                @error('job_category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="m-3 row">
                            <div class=" mt-3">
                                <input class="w-100 btn btn-success" type="submit" value="Publier le travail">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    @push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>


        // Dropify add functionality
        $(document).ready(function () {
            // Initialize Dropify
            var drEvent = $('#input-file-now').dropify();
        });


        // Dropify data show


        // $(document).ready(function () {


        //     // Initialize Dropify
        //     var drEvent = $('#input-file-now').dropify();

        //     // Handle multiple file uploads
        //     $('#input-file-now').on('change', function () {
        //         $('#remove-file').css("display", "block");

        //         var files = this.files;
        //         var fileList = [];

        //         $('#file-preview').empty(); // Clear previous previews

        //         for (var i = 0; i < files.length; i++) {
        //             fileList.push(files[i].name);

        //             var reader = new FileReader();

        //             reader.onload = function (e) {
        //                 var img = $('<img>').attr('src', e.target.result).css({
        //                     'width': '100px',
        //                     'height': '100px',
        //                     'margin': '10px'
        //                 });
        //                 var html = `
        //     <button type="button" class="dropify-clear">Remove</button>
        // `;

        //                 $('#file-preview').append(img);
        //                 $('#file-preview').append(html);


        //             };

        //             reader.readAsDataURL(files[i]);
        //         }

        //         console.log('Selected files:', fileList);
        //     });
        // });

        // ClassicEditor add functionality
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

        // Variant add functionality
        $(document).ready(function () {
            $('.variant_add').on('click', function () {
                var html = `
             <div class="row mt-2">
                                    <div class="col-md-6">
                                        <select class="form-select w-100" name="career_level">
                                            <option selected disabled selected>Option</option>
                                            <option value="Débutant">Size</option>
                                            <option value="Débutant">Color</option>
                                            <option value="Débutant">Weight</option>
                                            <option value="Débutant">Smell</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="variant_value" class="form-control"
                                            placeholder="Value">
                                    </div>
                                </div>
        `;

                $('.meth').append(html); // Append the new HTML to the .meth element
            });
        });
    </script>
    @endpush

</x-app-layout>
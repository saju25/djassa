<x-admin-app-layout>
    <div class="row">
        <div class="col-md-3 shadow-lg">
            @include('admin.component.sidebar')
        </div>
        <div class="col-md-9">
            <div id="layoutSidenav">
                <div id="layoutSidenav_content">
                    <main class="mt-3">
                        <div class="container mb-3">
                            <div class="recent_activities card p-3">
                                <h3 class="d-flex align-content-center "><i class="fa-regular fa-file bc mx-2"></i>Edit
                                    Banner Information</h3>

                                <form action="{{ route('admin.submit.edit.banner',$banner->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="m-3 row">
                                        <div>
                                            <div>
                                                <label class="col-form-label">Banner Title</label>
                                            </div>
                                            <input type="text" name="title" class="form-control" value="{{$banner->title}}"
                                                placeholder="Banner Title">

                                            @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">Sub Title</label>
                                            </div>
                                            <input type="text" name="sub_title" class="form-control"
                                            value="{{$banner->sub_title}}"    placeholder="Sub Title">

                                            @error('sub_title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="m-3 row">
                                        <div>
                                            <div>
                                                <label class="col-form-label">Banner Photo</label>
                                            </div>
                                            <input type="file" name="photo" class="form-control" >

                                            @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">Button Link</label>
                                            </div>
                                            <input type="text" name="link" class="form-control" placeholder="Button Link" value="{{$banner->link}}">

                                            @error('link')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="m-3 row">
                                        <div class=" mt-3">
                                            <input class="w-100 btn btn-success" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                </div>
                </main>

            </div>
        </div>
    </div>
    </div>


</x-admin-app-layout>

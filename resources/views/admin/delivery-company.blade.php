<x-admin-app-layout>
<div class="row">
        <div class="col-md-3 shadow-lg ">
            @include('admin.component.sidebar')
        </div>
        <div class="col-md-9">
          <div id="layoutSidenav">
              <div id="layoutSidenav_content">
                 <main class="mt-3">
                   <div class="container mb-3">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="recent_activities p-3">

                                <h3 class="d-flex align-content-center "><i
                                        class="fa-regular fa-file bc mx-2"></i>Delivery Company contact</h3>

                                <form action="{{ route('admin.delivery-company-store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="m-3 row">
                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">Name</label>
                                            </div>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Company Name">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">Phone Number</label>
                                            </div>
                                            <input type="number" name="phone" class="form-control"
                                                placeholder="Company Phone Number">

                                            @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="m-3 row">
                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">E-mail</label>
                                            </div>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Company E-mail">

                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">Location</label>
                                            </div>
                                            <input type="text" name="location" class="form-control"
                                                placeholder="Company Location">

                                            @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="m-3 row">
                                        <div class="col-md-12">
                                            <div>
                                                <label class="col-form-label">Compay Logo</label>
                                            </div>
                                            <input type="file" name="photo" class="form-control"
                                                placeholder="Company E-mail">

                                            @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="m-3 row">
                                        <div class="mx-2 mt-3">
                                            <input class="w-100 btn btn-success" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>

    </div>
    </div>
        </div>
    </div>


</x-admin-app-layout>

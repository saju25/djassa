<x-admin-app-layout>

    <div id="layoutSidenav">
        @include('admin.component.sidebar')
        <div id="layoutSidenav_content">
            <main class="mt-3">
                <div class="container mb-3">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="recent_activities p-3">

                                <h3 class="d-flex align-content-center "><i
                                        class="fa-regular fa-file bc mx-2"></i>Company contact</h3>

                                <form action="{{ route('admin.update.social.links', $webSocialLinks->id) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="m-3 row">
                                        <div class="col-md-12">
                                            <div>
                                                <label class="col-form-label">Address</label>
                                            </div>
                                           <textarea name="address" class="form-control" placeholder="Office Address..">{{ $webSocialLinks->address }}</textarea>


                                            @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    </div>


                                    <div class="m-3 row">
                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">Phone Number</label>
                                            </div>
                                            <input type="number" name="number"
                                                value="{{ $webSocialLinks->number }}" class="form-control"
                                                placeholder="Company Phone Number">

                                            @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div>
                                                <label class="col-form-label">E-mail</label>
                                            </div>
                                            <input type="email" name="email" value="{{ $webSocialLinks->email }}"
                                                class="form-control" placeholder="Company E-mail">

                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="m-3 row">
                                        <div class=" mt-3">
                                            <input class="w-100 btn btn-success" type="submit" value="Update">
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
</x-admin-app-layout>

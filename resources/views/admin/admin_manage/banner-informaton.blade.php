<x-admin-app-layout>
    <div class="row">
        <div class="col-md-3 shadow-lg">
            @include('admin.component.sidebar')
        </div>
        <div class="col-md-9">
            <div id="layoutSidenav">
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            <div class="row">
                                <div class="col-md-7">
                                </div>
                                <div class="col-md-5 d-flex justify-content-end">
                                    <a href="{{ route('admin.banner-in-view') }}" class="btn btn-success mt-4">Add Banner Information+</a>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                   Banner Information
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Photo</th>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @forelse ($banners as $banner)
                                         <tr>
                                                <td>{{ $banner->id }}</td>
                                                <td>
                                                    <img height="50" width="50" class="img-fluid" src="{{asset('banners')}}/{{ $banner->photo }}" alt="">
                                                </td>



                                                <td>{{ucwords(Str:: limit($banner->title , 25, '...')) }}</td>
                                                <td >{{ucwords(Str:: limit($banner->sub_title, 25, '...'))}} </td>
                                                <td >{{ucwords(Str:: limit($banner->link, 25, '...'))}} </td>
                                                <td ><a href="{{route('admin.edit.banner',$banner->id)}}" class="btn btn-danger text-light">Edit</a></td>
                                                <td ><a href="{{route('admin.detel.banner',$banner->id)}}" class="btn btn-danger text-light">Delete</a></td>
                                            </tr>
                                           @empty
                                            <p>No items found.</p>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </div>


</x-admin-app-layout>

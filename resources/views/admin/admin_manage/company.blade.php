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
                                    <a href="{{ route('admin.company.form') }}" class="btn btn-success mt-4">Add Company Information+</a>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                   Banner Information
                                </div>
                                <div class="card-body">
                                    <table id="#myTable1" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email Title</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th>About</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @forelse ($comIns as $comIn)
                                         <tr>
                                                <td>{{ $comIn->id }}</td>
                                                <td>
                                                    <img height="50" width="50" class="img-fluid" src="{{asset('storage')}}/{{ $comIn->photo }}" alt="">
                                                </td>



                                                <td>{{ucwords(Str:: limit($comIn->name , 10, '...')) }}</td>
                                                <td >{{ucwords(Str:: limit($comIn->email , 10, '...'))}} </td>
                                                <td >{{ucwords(Str:: limit($comIn->phone, 10, '...'))}} </td>
                                                <td >{{ucwords(Str:: limit($comIn->location, 10, '...'))}} </td>
                                                <td >{{ucwords(Str:: limit($comIn->details, 10, '...'))}} </td>
                                                <td ><a href="{{route('admin.comIn.update',$comIn->id)}}" class="btn btn-danger text-light">Edit</a></td>
                                                <td ><a href="{{route('admin.comIn.delete',$comIn->id)}}" class="btn btn-danger text-light">Delete</a></td>
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

 @push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    @endpush
    @push('script')
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable1').DataTable({

            });
        });
        $.fn.dataTable.ext.errMode = 'throw';

    </script>

    @endpush
</x-admin-app-layout>

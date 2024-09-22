<x-admin-app-layout>
    <div class="row">
        <div class="col-md-3 shadow-lg">
            @include('admin.component.sidebar')
        </div>
        <div class="col-md-9">
            <div id="layoutSidenav">
                <div id="layoutSidenav_content ">
                    <main>
                        <div class="container-fluid px-4">
                            <div class="d-flex justify-content-between">
                                <h1 class="mt-4">Djassa User</h1>
                                <div class="col-md-5 d-flex justify-content-end">
                                    <a href="{{ route('admin.delivery-company') }}" class="btn btn-success mt-4">Add
                                        Delivery Company Information+</a>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    User Manage
                                </div>
                                <div class="card-body">
                                    <table id="myTable" class="display">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @forelse ($dcompays as $dcompay)
                                            <tr>
                                                <td>{{ $dcompay->id }}</td>
                                                <td>
                                                    <img height="50" width="50" class="img-fluid"
                                                        src="{{asset('storage')}}/{{ $dcompay->photo }}" alt="">
                                                </td>
                                                <td>{{ $dcompay->name }}</td>
                                                <td>{{ $dcompay->email }}</td>
                                                <td>{{ $dcompay->phone }}</td>
                                                <td>{{ $dcompay->location }}</td>
                                                <td><a class="btn btn-success"
                                                        href="{{route('admin.delivery-company-delete',$dcompay->id)}}">Delete</a>
                                                </td>
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
    <!-- Dropify CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    @endpush
    @push('script')
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
        $.fn.dataTable.ext.errMode = 'throw';

    </script>

    @endpush
</x-admin-app-layout>
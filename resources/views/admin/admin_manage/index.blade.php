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
                                    <h1 class="mt-4">Admin Manage</h1>
                                </div>
                                <div class="col-md-5 d-flex justify-content-end">
                                    <a href="{{ route('admin.create.admin') }}" class="btn btn-success mt-4">Create
                                        Admin+</a>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Admin Manage
                                </div>
                                <div class="card-body">
                                    <table id="myTable" class="display">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Admin Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($admins as $key => $user)
                                            <tr>
                                                <td>{{ ++$key }}</td>

                                                <td>{{ $user->email }}</td>
                                                <td colspan="2">
                                                    <a href="{{ route('admin.delete.admin', $user->id) }}"
                                                        class="btn btn-danger">Delete </a>
                                                </td>
                                            </tr>
                                            @endforeach
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

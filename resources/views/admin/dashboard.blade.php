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
                            <h1 class="mt-4">Djassa User</h1>
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
                                                <th>User name</th>
                                                <th>User Email</th>
                                                <th>User Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                            $users = \App\Models\User::latest()->get();
                                            @endphp
                                            @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    {{ $user->fullname }}
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->sub_id == 1)
                                                    Essential Subscriber
                                                    @endif
                                                    @if ($user->sub_id == 2)
                                                    Pro Subscriber
                                                    @endif
                                                    @if ($user->sub_id == 3)
                                                    Premium Subscriber
                                                    @endif
                                                    @if (empty($user->sub_id))
                                                    Guest
                                                    @endif
                                                </td>
                                                <td colspan="2">
                                                    <a href="{{ route('admin.user.delete', $user->id) }}"
                                                        class="btn btn-danger">Delete </a>
                                                    {{-- <a href="#" class="btn btn-warning">Deactive </a> --}}
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

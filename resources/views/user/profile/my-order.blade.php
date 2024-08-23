<x-guest-layout>
    @include('user.profile.component.header')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-2 side_div">

                <div class="sizebar">
                    <ul>
                        <li><a class="diactive" href="{{ route('profile.detail') }}">My Profile</a></li>
                        <li><a class="diactive" href="{{route('profile.add')}}">My Add</a></li>
                        <li><a class="active" href="{{route('profile.order')}}">MY Order</a></li>
                        <li><a class="diactive" href="{{route('profile.add')}}">Contact</a></li>
                        <li><a class="diactive" href="{{route('profile.add')}}">About</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-10">
                <h1>Order List</h1>
                <div>
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Weight</th>
                                <th>Total Amount</th>
                                <th>City</th>
                                <th>Number</th>
                                <th>Zip Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                @if (isset($postsById[$order->add_id]))
                                <td>
                                    <a
                                        href="{{ route('add.details', ['id' => $postsById[$order->add_id]->id,'slug' => $postsById[$order->add_id]->slug]) }}">
                                        @php
                                        // This is already an array
                                        $imgs = $postsById[$order->add_id]->img_path;
                                        // Decode JSON string to PHP array
                                        $array = json_decode( $imgs, true);
                                        @endphp
                                        <img class="data_table_img" src="{{  $array[0] }}" alt="">
                                        {{ ucwords(Str::limit($postsById[$order->add_id]->name, 15, '...')) }}
                                    </a>


                                </td>
                                @else
                                <td>This Product Deleted</td>
                                @endif
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->color }}</td>

                                <td>{{ $order->size }}</td>
                                <td>{{ $order->weight }}</td>
                                <td>{{ $order->total_amount }}</td>
                                <td>{{ $order->city }}</td>
                                <td>{{ $order->number }}</td>
                                <td>{{ $order->zip_code }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9">Not Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
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
</x-guest-layout>
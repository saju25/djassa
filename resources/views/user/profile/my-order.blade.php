<x-guest-layout>
    @include('user.profile.component.header')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-2 side_div">
                <div>
                    <div class="profile_img_div mt-2">
                        <div class="candidate_pic " onmousemove="hiIcon()" onmouseout="viIcon()">
                            <img class="img-fluid " src="{{asset($user->photo)}}" alt="Profile Picture">
                            <i class="fa-solid fa-circle-plus in_fo_add"
                                onclick="document.getElementById('getFile').click()">
                            </i>
                        </div>

                        <div class="up_date_div" style="display:none">
                            <form method="post" action="{{ route('user.update.info') }}" enctype="multipart/form-data">
                                @csrf
                                <input id="getFile" type="file" onchange="form.submit()" name="photo" />
                            </form>
                        </div>

                    </div>
                </div>
                <div class="sizebar">
                    <ul>
                        <li><a class="diactive" href="{{ route('profile.detail') }}">My Profile</a></li>
                        <li><a class="diactive" href="{{route('profile.add')}}">My Add</a></li>
                        <li><a class="active" href="{{route('profile.order')}}">MY Order</a></li>
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
                                                                   @forelse ($orders as $order)
                                    @php
                                    $user = auth()->user();
                                    @endphp
                                    @if ($user->id == $order->user_id )
                                    <th>Quantity</th>
                                    @else

                                    @endif
                                    @empty
                                    @endforelse
                                <th>Total Amount</th>

                                <th>Status</th>
                                    @forelse ($orders as $order)
                                    @php
                                    $user = auth()->user();
                                    @endphp
                                    @if ($user->id == $order->user_id )

                                    @else
                                    <th>Action</th>
                                    @endif
                                    @empty
                                    @endforelse
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
                                        {{ ucwords(Str::limit($postsById[$order->add_id]->name, 45, '...')) }}
                                    </a>


                                </td>
                                @else
                                <td>This Product Deleted</td>

                                @endif
                                                         @php
                          $user = auth()->user();
                         @endphp
                         @if ($user->id == $order->user_id )
                          <td>{{$order->quantity }}  </td>
                         @else
                         @endif
                                <td>{{ $order->total_amount }}</td>
                          @php
                          $user = auth()->user();
                         @endphp

                         @if ($user->id == $order->user_id )
                          <td> <span class="s_pain">{{$order->status}}</span> </td>
                         @else
                                 <td>
                                  <button type="button" class="btn btn-primary">
                                        <span data-toggle="modal" data-target="#exampleModal">{{ $order->status }}</span>
                                  </button>
                                </td>
                         @endif


                         <!-- @php
                          $user = auth()->user();
                         @endphp
                         @if ($user->id == $order->user_id )

                         @else

                         @endif -->

                         @php
                          $user = auth()->user();
                         @endphp
                         @if ($user->id == $order->user_id )

                         @else
                            <td>
                                    <a class="btn btn-success"
                                        href="{{ route('order.print', ['id' => $order->id,'s_id' => $order->post_by_user,'c_id' => $order->user_id]) }}">Print</a>

                                </td>
                         @endif


                            </tr>


                      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Order Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="productForm" action="{{ route('order.update', ['id' => $order->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="status" required>
                                <option value="" disabled selected>Choose...</option>
                                <option value="Pending">Pending</option>
                                <option value="Order Accept">Order Accept</option>
                                <option value="On The Way">On The Way</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
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

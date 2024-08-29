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
                        <li><a class="active" href="{{route('profile.add')}}">My Add</a></li>
                        <li><a class="diactive" href="{{route('profile.order')}}">MY Order</a></li>
                     </ul>
                </div>

            </div>
            <div class="col-md-10">
                <h1>Add List</h1>
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
                                <th>Best Price</th>
                                <th>Discounted Price</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <a href="{{ route('add.details', ['id' => $post->id,'slug' => $post->slug]) }}">
                                        @php
                                        $imgs = $post->img_path;
                                        $array = json_decode( $imgs, true);
                                        @endphp
                                        <img class="data_table_img" src="{{  $array[0] }}" alt="">
                                        {{ ucwords(Str::limit($post->name, 15, '...')) }}
                                    </a>


                                </td>
<td>
    {{$post->sku}}
</td>
                                <td>
                                    @php
                                    $colorsArray = json_decode($post->color, true);
                                    @endphp
                                    @if ( $colorsArray)
                                    @foreach($colorsArray as $index => $colorArray)
                                    @php
                                    $colorValue = $colorArray['value'];
                                    // Generate a unique ID for each swatch
                                    $swatchId = "swatch-{$index}-" . strtolower($colorValue);
                                    @endphp
                                    {{ $colorValue }}

                                    @endforeach
                                    @endif

                                </td>
                                <td>
                                    @php
                                    $sizesArray = json_decode($post->size, true);
                                    @endphp
                                    @if ( $sizesArray)
                                    @foreach($sizesArray as $index => $sizeArray)
                                    @php
                                    $sizeValue = $sizeArray['value'];
                                    // Generate a unique ID for each swatch
                                    $swatchId = "swatch-{$index}-" . strtolower($sizeValue);
                                    @endphp
                                    {{ $sizeValue }}

                                    @endforeach
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $weightsArray = json_decode($post->weight, true);
                                    @endphp
                                    @if ( $weightsArray)
                                    @foreach($weightsArray as $index => $weightArray)
                                    @php
                                    $weightValue = $weightArray['value'];
                                    // Generate a unique ID for each swatch
                                    $swatchId = "swatch-{$index}-" . strtolower($weightValue);
                                    @endphp
                                    {{ $weightValue }}

                                    @endforeach
                                    @endif
                                </td>
                                <td>{{ $post->best_price }}</td>
                                <td>{{ $post->discounted_price }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('show.update', ['id' => $post->id]) }}">Edit</a>

                                </td>
                                <td>
                                  <form action="{{ route('product.delete', ['id' => $post->id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
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

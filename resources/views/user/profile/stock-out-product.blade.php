<x-guest-layout>
     <div class="page section-header text-center ">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Produits en rupture de stock</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
             <div class="col-md-12">
                <h1>Liste des produits en rupture de stock</h1>
                <div>
                  <table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID du produit</th>
            <th>Produit</th>
            <th>Quantité</th> <!-- I assume this was meant for the SKU -->
            <th>Couleur</th>
            <th>Taille</th>
            <th>Poids</th>
            <th>Prix</th>
            <th>Dernier prix</th>
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
                    $array = json_decode($imgs, true);
                    @endphp
                    <img class="data_table_img" src="{{asset('product')}}/{{$array[0]}}" alt="">
                    {{ ucwords(Str::limit($post->name, 15, '...')) }}
                </a>
            </td>

            <!-- Display SKU under Quantity Column -->
            <td>{{ $post->sku }}</td>

            <!-- Display Colors -->
            <td>
                @php
                $colorsArray = json_decode($post->color, true);
                @endphp
                @if ($colorsArray)
                @foreach($colorsArray as $index => $colorArray)
                {{ $colorArray['value'] }}
                @endforeach
                @endif
            </td>

            <!-- Display Sizes -->
            <td>
                @php
                $sizesArray = json_decode($post->size, true);
                @endphp
                @if ($sizesArray)
                @foreach($sizesArray as $index => $sizeArray)
                {{ $sizeArray['value'] }}
                @endforeach
                @endif
            </td>

            <!-- Display Weights -->
            <td>
                @php
                $weightsArray = json_decode($post->weight, true);
                @endphp
                @if ($weightsArray)
                @foreach($weightsArray as $index => $weightArray)
                {{ $weightArray['value'] }}
                @endforeach
                @endif
            </td>

            <!-- Prices -->
            <td>{{ $post->best_price }}</td>
            <td>{{ $post->discounted_price }}</td>

            <!-- Action buttons -->
            <td>
                <a class="btn btn-success" href="{{ route('show.update', ['id' => $post->id]) }}">Modifier</a>
                <form action="{{ route('product.delete', ['id' => $post->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9">Non trouvé</td>
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
            $('#myTable').DataTable({
                  "language": {
                             "search": "Rechercher:",
                            "lengthMenu": " _MENU_ Entrées par page",
                             "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées"  // Customize the text here
                        }
            });
        });
        $.fn.dataTable.ext.errMode = 'throw';

    </script>

    @endpush
</x-guest-layout>

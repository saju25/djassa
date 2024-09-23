<x-guest-layout>
    <div class="page section-header text-center ">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Buying Product</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <h1>Liste des produits à acheter</h1>
                <div>
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID de commande</th>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Montant total</th>
            <th>Statut</th>
         </tr>
    </thead>
    <tbody>
        @forelse ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>

            <!-- Product Information -->
            @if (isset($postsById[$order->add_id]))
            <td>
                <a href="{{ route('add.details', ['id' => $postsById[$order->add_id]->id, 'slug' => $postsById[$order->add_id]->slug]) }}">
                    @php
                    $imgs = $postsById[$order->add_id]->img_path;
                    $array = json_decode($imgs, true);
                    @endphp
                    <img class="data_table_img" src="{{ $array[0] }}" alt="">
                    {{ ucwords(Str::limit($postsById[$order->add_id]->name, 45, '...')) }}
                </a>
            </td>
            @else
            <td>Ce produit a été supprimé</td>
            @endif

            <!-- Quantity and Total Amount -->
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->total_amount }}</td>

            <!-- Status Column -->
            @if ($user->id == $order->user_id)
            <td><span class="s_pain">{{ $order->status }}</span></td>
            @else
            <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    {{ $order->status }}
                </button>
            </td>
            @endif
        </tr>


        @empty
        <tr>
            <td colspan="6">Aucune commande trouvée</td> <!-- Adjusted colspan for consistency -->
        </tr>
        @endforelse
    </tbody>
</table>


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

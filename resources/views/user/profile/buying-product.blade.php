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
            <th>Action</th> <!-- Action column for printing orders -->
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

            <!-- Action Column (Only for users who are not the owner) -->
            <td>
                @if ($user->id != $order->user_id)
                <a class="btn btn-success" href="{{ route('order.print', ['id' => $order->id, 's_id' => $order->post_by_user, 'c_id' => $order->user_id]) }}">
                    Imprimer
                </a>
                @endif
            </td>
        </tr>

        <!-- Modal for Status Update -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mettre à jour le statut de la commande</h5>
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
                                        <option value="" disabled selected>Choisir...</option>
                                        <option value="Pending">En attente</option>
                                        <option value="Order Accept">Commande acceptée</option>
                                        <option value="On The Way">En route</option>
                                        <option value="Delivered">Livré</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
            $('#myTable').DataTable();
        });
        $.fn.dataTable.ext.errMode = 'throw';

    </script>

    @endpush
</x-guest-layout>

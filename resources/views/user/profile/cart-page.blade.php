<x-app-layout>
    <!--Body Content-->
    <div id="page-content">
        <form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--Page Title-->
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Votre panier</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->




            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">

                        <table class="cart_product_table">
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            @if ($product)
                            <tbody>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    @php
                                    // This is already an array
                                    $imgs = $product->img_path;
                                    // Decode JSON string to PHP array
                                    $array = json_decode( $imgs, true);
                                    @endphp
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="{{$array[0]}}"
                                                alt="Elastic Waist Dress - Navy / Small"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">
                                                {{ ucwords(Str::limit($product->name, 25, '...')) }}
                                            </a>
                                        </div>

                                        <div class="cart__meta-text">
                                            <span class="">couleur:</span> {{ $postData['color'] ?? 'Any' }}
                                            <br>
                                            <span class="header">taille:</span> {{ $postData['size'] ?? 'Any' }}
                                            <br>
                                            <span class="header">poids:</span> {{ $postData['weight'] ?? 'Any' }}
                                            <br>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">{{$product->discounted_price }}</span>
                                    </td>
                                    <td class=" cart-flex-item ">
                                        <div class="cart__qty">
                                            <div class="qtyField">

                                                <input class="cart__qty-input qty" type="text" name="quantity" id="qty"
                                                    value="{{$postData['quantity'] }}" pattern="[0-9]*">

                                            </div>
                                        </div>
                                    </td>
                                    <td class=" small--hide cart-price">
                                        <div><span class="money">{{$product->discounted_price*$postData['quantity']
                                                }}.00</span></div>
                                    </td>

                                </tr>
                            </tbody>
                            @endif


                        </table>
                        <div class="mobile_cart">
                            <div class="cart__image-wrapper cart-flex-item">
                                <img class="cart__image" src="{{$array[0]}}" alt="Elastic Waist Dress - Navy / Small">
                            </div>
                            <div>
                                <a href="#">
                                    {{ ucwords(Str::limit($product->name, 25, '...')) }}
                                </a>
                            </div>
                            <div class="d-flex">
                                <span class="font-weight-bold mx-2 col-4">Price</span>
                                <span class="col-8">{{$product->discounted_price
                                    }}</span>
                            </div>
                            <div class="d-flex">
                                <span class="font-weight-bold mx-2 col-4">Quantity</span>
                                <span class="col-8">{{$postData['quantity']
                                    }}</span>
                            </div>
                            <div class="d-flex">
                                <span class="font-weight-bold mx-2 col-4">Total</span>
                                <span class="col-8">{{$product->discounted_price*$postData['quantity']
                                    }}.00</span>
                            </div>
                            <div class="d-flex">
                                <span class="font-weight-bold mx-2 col-4">Color:</span><span class="col-8">{{
                                    $postData['color'] ??
                                    'Any'
                                    }}</span>
                            </div>
                            <div class="d-flex">
                                <span class="font-weight-bold mx-2 col-4">Size:</span><span class="col-8">{{
                                    $postData['size'] ??
                                    'Any'
                                    }}</span>
                            </div>
                            <div class="d-flex">
                                <span class="font-weight-bold mx-2 col-4">Weight :</span><span class="col-8">{{
                                    $postData['weight'] ??
                                    'Any'
                                    }}</span>
                            </div>
                        </div>

                        <hr>
                        <div id="shipping-calculator" class="mb-4">
                            <h5 class="small--text-center">Obtenir des estimations d'expédition</h5>
                            <div class="row">

                                <input type="hidden" name="add_id" value="{{ $product->id }}">
                                <input type="hidden" name="post_by_user" value="{{ $product->user_id }}">
                                <input type="hidden" name="color" value="{{ $postData['color'] ?? 'Any' }}">
                                <input type="hidden" name="size" value="{{ $postData['size'] ?? 'Any' }}">
                                <input type="hidden" name="weight" value="{{ $postData['weight'] ?? 'Any' }}">
                                <input type="hidden" name="status" value="Painding">
                                <input type="hidden" name="total_amount" value="{{$product->discounted_price*$postData['quantity']
                                                }}">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="address_country">Ville</label>
                                        <select id="address_country" name="city" required>
                                            <option selected disabled>Sélectionnez-en un</option>
                                            <option value="Abidjan">Abidjan</option>
                                            <option value="Aboisso">Aboisso</option>
                                            <option value="Adiaké">Adiaké</option>
                                            <option value="Adzopé">Adzopé</option>
                                            <option value="Agboville">Agboville</option>
                                            <option value="Agnibilékrou">Agnibilékrou</option>
                                            <option value="Akoupé">Akoupé</option>
                                            <option value="Alépé">Alépé</option>
                                            <option value="Ananda">Ananda</option>
                                            <option value="Anyama">Anyama</option>
                                            <option value="Anoumaba">Anoumaba</option>
                                            <option value="Arrah">Arrah</option>
                                            <option value="Ayamé">Ayamé</option>
                                            <option value="Ayamé 1">Ayamé 1</option>
                                            <option value="Ayamé 2">Ayamé 2</option>
                                            <option value="Bangolo">Bangolo</option>
                                            <option value="Bassam (Grand-Bassam)">Bassam (Grand-Bassam)</option>
                                            <option value="Bettié">Bettié</option>
                                            <option value="Biankouma">Biankouma</option>
                                            <option value="Bocanda">Bocanda</option>
                                            <option value="Bondoukou">Bondoukou</option>
                                            <option value="Bongouanou">Bongouanou</option>
                                            <option value="Bouaflé">Bouaflé</option>
                                            <option value="Bouaké">Bouaké</option>
                                            <option value="Bouna">Bouna</option>
                                            <option value="Boundiali">Boundiali</option>
                                            <option value="Brobo">Brobo</option>
                                            <option value="Dabakala">Dabakala</option>
                                            <option value="Dabou">Dabou</option>
                                            <option value="Daoukro">Daoukro</option>
                                            <option value="Dianra">Dianra</option>
                                            <option value="Diawala">Diawala</option>
                                            <option value="Didiévi">Didiévi</option>
                                            <option value="Dimbokro">Dimbokro</option>
                                            <option value="Divo">Divo</option>
                                            <option value="Djébonoua">Djébonoua</option>
                                            <option value="Duékoué">Duékoué</option>
                                            <option value="Ferkessédougou">Ferkessédougou</option>
                                            <option value="Fresco">Fresco</option>
                                            <option value="Gagnoa">Gagnoa</option>
                                            <option value="Gbon">Gbon</option>
                                            <option value="Gohitafla">Gohitafla</option>
                                            <option value="Grand-Lahou">Grand-Lahou</option>
                                            <option value="Guéyo">Guéyo</option>
                                            <option value="Guiglo">Guiglo</option>
                                            <option value="Issia">Issia</option>
                                            <option value="Jacqueville">Jacqueville</option>
                                            <option value="Kani">Kani</option>
                                            <option value="Katiola">Katiola</option>
                                            <option value="Kong">Kong</option>
                                            <option value="Kombolokoura">Kombolokoura</option>
                                            <option value="Korhogo">Korhogo</option>
                                            <option value="Lakota">Lakota</option>
                                            <option value="Logoualé">Logoualé</option>
                                            <option value="Man">Man</option>
                                            <option value="Mankono">Mankono</option>
                                            <option value="Nassian">Nassian</option>
                                            <option value="Niakara">Niakara</option>
                                            <option value="Odienné">Odienné</option>
                                            <option value="Oumé">Oumé</option>
                                            <option value="Sakassou">Sakassou</option>
                                            <option value="San Pedro">San Pedro</option>
                                            <option value="Sassandra">Sassandra</option>
                                            <option value="Séguéla">Séguéla</option>
                                            <option value="Sinématiali">Sinématiali</option>
                                            <option value="Soubré">Soubré</option>
                                            <option value="Tabou">Tabou</option>
                                            <option value="Taabo">Taabo</option>
                                            <option value="Tanda">Tanda</option>
                                            <option value="Tingréla">Tingréla</option>
                                            <option value="Tiassalé">Tiassalé</option>
                                            <option value="Tortiya">Tortiya</option>
                                            <option value="Touba">Touba</option>
                                            <option value="Toulepleu">Toulepleu</option>
                                            <option value="Toumodi">Toumodi</option>
                                            <option value="Vavoua">Vavoua</option>
                                            <option value="Yamoussoukro">Yamoussoukro</option>
                                            <option value="Zouan-Hounien">Zouan-Hounien</option>
                                            <option value="Zuénoula">Zuénoula</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Numéro de téléphone</label>
                                        <input type="number" name="number" placeholder="8855..." required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="address_zip">Code postal</label>
                                        <input type="text" id="zip_code" name="zip_code" placeholder="Code postal"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 actionRow text-center">
                                    <div>
                                        <input type="submit" class="btn btn-success get-rates"
                                            value="Procéder à la commande">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </form>


    </div>
    <!--End Body Content-->
</x-app-layout>
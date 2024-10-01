<x-app-layout>
    <!--Page Title-->
    <div class="page section-header text-center ">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Poster une annonce
                </h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container mb-3 ">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <form id="productForm" action="{{ route('store.add') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Nom</label>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Nom">

                                @error('job_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Quantité</label>
                                </div>
                                <input type="number" name="sku" class="form-control" placeholder="Quantité">

                                @error('sku')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div>
                                    <label class="col-form-label">Description du produit</label>
                                </div>
                                <div>
                                    <textarea id="editor" class="col-form-label w-100 p-3" name="description"
                                        placeholder="paragraphe">{{ old('job_description') }}</textarea>

                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class=" row mt-3">
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Prix</label>
                                </div>
                                <input type="number" name="best_price" class="form-control" placeholder="Prix">

                                @error('best_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Dernier prix
                                    </label>
                                </div>
                                <input type="number" name="discounted_price" class="form-control"
                                    placeholder="Denier prix">

                                @error('discounted_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class=" row mt-3">

                            <div class="col-md-6 ">
                                <div>
                                    <label class="col-form-label">variantes</label>
                                </div>
                                <div class="">

                                    <div class="row mt-2 justify-content-center align-items-center">
                                        <div class="col-md-4 mt-2 d-flex">
                                            <div class="col-6">
                                                <span class="p-2">couleur</span></label>
                                            </div>
                                            <div class="col-6">
                                                <label class="switch">
                                                    <input id="color" type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-md-8 color-col">
                                            <input class="colorIn" id="colorIn" name="" value="Red">
                                        </div>
                                    </div>
                                </div>
                                <div class="">

                                    <div class="row mt-2 justify-content-center align-items-center">
                                        <div class="col-md-4 mt-2 d-flex">
                                            <div class="col-6">
                                                <span class="p-2">poids</span>
                                            </div>
                                            <div class="col-6">
                                                <label class="switch">
                                                    <input id="weight" type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <input class="weightIn" id="weightIn" name="" value="20 kg">
                                        </div>
                                    </div>
                                </div>
                                <div class="">

                                    <div class="row mt-2 justify-content-center align-items-center">
                                        <div class="col-md-4 mt-2 d-flex">
                                            <div class="col-6">
                                                <span class="p-2">Taille</span>
                                            </div>
                                            <div class="col-6">
                                                <label class="switch">
                                                    <input id="size" type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-md-8">
                                            <input class="sizeIn" id="sizeIn" name="" value="XL">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Photo du produit(Ajoutez plus d’une image)</label>
                                </div>
                                <div class="dropify_div">
                                    <input type="file" id="input-file-now" name="product_img[]" class="dropify"
                                        multiple />
                                    <div id="file-preview">

                                    </div>
                                </div>

                                @error('product_img')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Catégorie</label>
                                </div>
                                <select id="category" class="form-select w-100" name="add_cate">
                                    <option id="1" selected disabled>Choisissez en une</option>
                                    <option id="2" value="Mobiles">Mobiles</option>
                                    <option id="3" value="Électronique">Électronique</option>
                                    <option id="4" value="Véhicules">Véhicules</option>
                                    <option id="5" value="Immobilier">Immobilier</option>
                                    <option id="6" value="Maison & Vie">Maison & Vie</option>
                                    <option id="7" value="Mode et Soins pour Hommes">Mode et Soins pour Hommes</option>
                                    <option id="8" value="Mode et Beauté pour Femmes">Mode et Beauté pour Femmes
                                    </option>
                                    <option id="9" value="Animaux & Animaux de Compagnie">Animaux & Animaux de Compagnie
                                    </option>
                                    <option id="10" value="Loisirs, Sports & Enfants">Loisirs, Sports & Enfants</option>
                                    <option id="11" value="Affaires & Industrie">Affaires & Industrie</option>
                                    <option id="12" value="Éducation">Éducation</option>
                                    <option id="13" value="Essentiels">Essentiels</option>
                                    <option id="14" value="Services">Services</option>
                                    <option id="15" value="Agriculture">Agriculture</option>
                                    <option id="16" value="Autres">Autres</option>
                                </select>

                                @error('add_cate')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 meth mt-2">

                                @error('sub_cate')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class=" row mb-3 mt-3">

                            <div class="col-md-6">
                                <div>
                                    <label class="col-form-label">Ville</label>
                                </div>
                                <select class="form-select w-100" name="city">
                                    <option selected disabled>Choisissez en une
                                    </option>
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

                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">

                                <div>
                                    <label class="col-form-label">Numéro de telephone </label>
                                </div>
                                <input type="number" name="number" class="form-control" placeholder="078865....">

                                @error('location')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <input class="w-100 btn btn-success" type="submit" value="Publier">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    @push('styles')
    <!-- Dropify CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dropify.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/tagify.css">
    @endpush
    @push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/heic2any@0.1.4/dist/heic2any.min.js"></script>

    <script src="{{ asset('assets') }}/js/dropify.js"></script>
    <script src="{{ asset('assets') }}/js/tagify.js"></script>


    <script>
        $(document).ready(function () {
            let value = 0;

            $("#color").on("change", function () {
                value += 1;
                const variantValue = $("#colorIn");
                if (value % 2 === 0) {
                    variantValue.attr("name", "");
                } else {
                    variantValue.attr("name", "color");
                }
            });
        });
        $(document).ready(function () {
            let value = 0;

            $("#weight").on("change", function () {
                value += 1;
                const variantValue = $("#weightIn");
                if (value % 2 === 0) {
                    variantValue.attr("name", "");
                } else {
                    variantValue.attr("name", "weight");
                }
            });
        });
        $(document).ready(function () {
            let value = 0;

            $("#size").on("change", function () {
                value += 1;
                const variantValue = $("#sizeIn");
                if (value % 2 === 0) {
                    variantValue.attr("name", "");
                } else {
                    variantValue.attr("name", "size");
                }
            });
        });


        $(document).ready(function () {
            $('#category').on('change', function () {
                var val = $('#category').val();
                var html = ''; // Declare the html variable

                $('.meth').empty(); // Clear the .meth element0

                if (val == 'Mobiles') {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                        <option value="Téléphones portables">Téléphones portables</option>
                        <option value="Accessoires pour téléphones portables">Accessoires pour téléphones portables</option>
                        <option value="Mobiles">Mobiles</option>
                        <option value="Objets connectés">Objets connectés</option>
                        <option value="Cartes SIM">Cartes SIM</option>
                        <option value="Services pour téléphones portables">Services pour téléphones portables</option>
                        <option value="Autres">Autres</option>
                    </select>`;

                }
                if (val == 'Électronique') {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                        <option value="Ordinateurs de bureau">Ordinateurs de bureau</option>
                        <option value="Ordinateurs portables & accessoires">Ordinateurs portables & accessoires</option>
                        <option value="Tablettes & accessoires">Tablettes & accessoires</option>
                        <option value="Téléviseurs">Téléviseurs</option>
                        <option value="Accessoires TV & Vidéo">Accessoires TV & Vidéo</option>
                        <option value="Électroménagers">Électroménagers</option>
                        <option value="Appareils photo, caméscopes & accessoires">Appareils photo, caméscopes & accessoires</option>
                        <option value="Climatiseurs & Électronique domestique">Climatiseurs & Électronique domestique</option>
                        <option value="Systèmes audio & son">Systèmes audio & son</option>
                        <option value="Ordinateurs">Ordinateurs</option>
                        <option value="Consoles de jeux vidéo & accessoires">Consoles de jeux vidéo & accessoires</option>
                        <option value="Photocopieurs">Photocopieurs</option>
                        <option value="Autres articles électroniques">Autres articles électroniques</option>
                     </select>`;

                }
                if (val == 'Véhicules') {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                        <option value="Voitures">Voitures</option>
                        <option value="Motos">Motos</option>
                        <option value="Vélos">Vélos</option>
                        <option value="Tricycles">Tricycles</option>
                        <option value="Camions">Camions</option>
                        <option value="Vans">Vans</option>
                        <option value="Autobus">Autobus</option>
                        <option value="Véhicules lourds">Véhicules lourds</option>
                        <option value="Pièces détachées & accessoires automobiles">Pièces détachées & accessoires automobiles</option>
                        <option value="Entretien et réparation">Entretien et réparation</option>
                        <option value="Transport maritime">Transport maritime</option>
                        <option value="Services automobiles">Services automobiles</option>
                        <option value="Locations">Locations</option>
                        </select>`;

                }
                if (val == 'Immobilier') {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                        <option value="Terrains à vendre">Terrains à vendre</option>
                        <option value="Appartements à vendre">Appartements à vendre</option>
                        <option value="Maisons à vendre">Maisons à vendre</option>
                        <option value="Propriétés commerciales à vendre">Propriétés commerciales à vendre</option>
                       </select>`;

                }
                if (val == 'Maison & Vie') {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                        <option value="Meubles de bureau & de magasin">Meubles de bureau & de magasin</option>
                        <option value="Meubles pour enfants"> Meubles pour enfants</option>
                        <option value="Articles ménagers">Articles ménagers</option>
                        <option value="Produits pour salle de bain">Produits pour salle de bain</option>
                        <option value="Portes">Portes</option>
                        <option value="Textiles et décoration pour la maison">Textiles et décoration pour la maison</option>
                         </select>`;

                }
                if (val == "Mode et Soins pour Hommes") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                          <option id="1" selected disabled>Choosissez en un</option>
                         <option value="Vestes & Manteaux">Vestes & Manteaux</option>
                         <option value="Chemises & T-Shirts">Chemises & T-Shirts</option>
                         <option value="Pantalons">Pantalons</option>
                         <option value="Vêtements traditionnels">Vêtements traditionnels</option>
                         <option value="Soins de beauté & du corps">Soins de beauté & du corps</option>
                         <option value="Lunettes de vue & de soleil">Lunettes de vue & de soleil</option>
                         <option value="Mode pour garçon">Mode pour garçon</option>
                         <option value="Sacs & Accessoires">Sacs & Accessoires</option>
                         <option value="Chaussures">Chaussures</option>
                         <option value="Montres">Montres</option>
                         <option value="Vente en gros - En vrac">Vente en gros - En vrac</option>
                         <option value="Voitures">Voitures</option>
                       </select>`;

                }
                if (val == "Mode et Beauté pour Femmes") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                        <option id="1" selected disabled>Choosissez en un</option>
                        <option value="Vêtements traditionnels">Vêtements traditionnels</option>
                        <option value="Vêtements d'hiver">Vêtements d'hiver</option>
                        <option value="Sacs & Accessoires">Sacs & Accessoires</option>
                        <option value="Lingerie & Vêtements de nuit">Lingerie & Vêtements de nuit</option>
                        <option value="Chaussures">Chaussures</option>
                        <option value="Bijoux & Montres">Bijoux & Montres</option>
                        <option value="Beauté & Soins personnels">Beauté & Soins personnels</option>
                        <option value="Lunettes de vue & de soleil">Lunettes de vue & de soleil</option>
                        <option value="Vente en gros - En vrac">Vente en gros - En vrac</option>
                        <option value="Mode pour fille">Mode pour fille</option>
                     </select>`;

                }
                if (val == "Animaux & Animaux de Compagnie") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='client_type' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                        <option value="Animaux de compagnie">Animaux de compagnie</option>
                        <option value="Animaux de ferme">Animaux de ferme</option>
                        <option value="Accessoires pour animaux">Accessoires pour animaux</option>
                        <option value="Nourriture pour animaux">Nourriture pour animaux</option>
                        <option value="Autres animaux & animaux de compagnie">Autres animaux & animaux de compagnie</option>
                      </select>`;

                }
                if (val == "Loisirs, Sports & Enfants") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                       <option value="Instruments de musique">Instruments de musique</option>
                       <option value="Sports">Sports</option>
                       <option value="Fitness & Gym">Fitness & Gym</option>
                       <option value="Musique, Livres & Films">Musique, Livres & Films</option>
                       <option value="Articles pour enfants">Articles pour enfants</option>
                       <option value="Autres loisirs, sports & articles pour enfants">Autres loisirs, sports & articles pour enfants</option>
                       </select>`;

                }
                if (val == "Affaires & Industrie") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                      <option id="1" selected disabled>Choosissez en un</option>
                      <option value="Fournitures de bureau & papeterie">Fournitures de bureau & papeterie</option>
                      <option value="Sécurité">Sécurité</option>
                      <option value="Machines & outils industriels">Machines & outils industriels</option>
                      <option value="Matières premières & fournitures industrielles">Matières premières & fournitures industrielles</option>
                      <option value="Licences, titres & appels d'offres">Licences, titres & appels d'offres</option>
                      <option value="Équipements médicaux & fournitures">Équipements médicaux & fournitures</option>
                      <option value="Autres articles d'affaires & industriel">Autres articles d'affaires & industriel</option>
                   </select>`;

                }
                if (val == "Éducation") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                      <option value="Manuels scolaires">Manuels scolaires</option>
                      <option value="Cours particuliers">Cours particuliers</option>
                      <option value="Cours">Cours</option>
                      <option value="Étudier à l'étranger">Étudier à l'étranger</option>
                      <option value="Autres services éducatifs">Autres services éducatifs</option>
                       </select>`;

                }
                if (val == "Essentiels") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='client_type' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                     <option value="Produits pour bébés">Produits pour bébés</option>
                     <option value="Soins de santé">Soins de santé</option>
                     <option value="Articles ménagers">Articles ménagers</option>
                     <option value="Autres essentiels">Autres essentiels</option>
                     </select>`;

                }
                if (val == "Services") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                         <option value="Entretien de bâtiments">Entretien de bâtiments</option>
                         <option value="Services domestiques & de garde d'enfants">Services domestiques & de garde d'enfants</option>
                         <option value="Services de fitness & de beauté">Services de fitness & de beauté</option>
                         <option value="Services informatiques">Services informatiques</option>
                         <option value="Rencontres matrimoniales">Rencontres matrimoniales</option>
                         <option value="Services de gestion des médias & événements">Services de gestion des médias & événements</option>
                         <option value="Services professionnels">Services professionnels</option>
                         <option value="Entretien & réparation">Entretien & réparation</option>
                         <option value="Tours & voyages">Tours & voyages</option>
                     </select>`;

                }
                if (val == "Agriculture") {
                    html = `
                    <label>Sélectionnez une sous-catégorie</label>
                    <select name='sub_cate' class='form-control'>
                         <option id="1" selected disabled>Choosissez en un</option>
                         <option value="Cultures, semences & plantes">Cultures, semences & plantes</option>
                         <option value="Outils & machines agricoles">Outils & machines agricoles</option>
                         <option value="Autres articles agricoles">Autres articles agricoles</option>
                    </select>`;

                }

                $('.meth').html(html); // Add the HTML to the .meth element
            });
        });

    </script>

    @endpush

</x-app-layout>
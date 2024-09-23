<x-guest-layout>
    <div id="page-content">
        <!--Collection Banner-->
        <form id="myForm" action="{{ route('all.product') }}" method="GET">

            <div class=" page section-header ">
                <div class="container row flex-column justify-content-center align-items-center text-center pt-5 pb-5">
                    <div class="col-md-4">
                        <h1 class="find_banner_title w-100">Djassa</h1>
                    </div>
                    <div class="col-md-8 ">
                        <div class="row mt-3 search_div  justify-content-around m-3">
                            <div class="d-flex justify-content-center align-items-center col-md-5">
                                <i class="fa-solid fa-magnifying-glass find_banner_form_icon mx-2"></i>
                                <input name="keyword" class="form-control me-2" type="search"
                                    value="{{ request('keyword') }}" placeholder="Nom du produit">
                            </div>
                            <div class="d-flex justify-content-center align-items-center col-md-4 ">
                                <i class="fa-solid fa-location-crosshairs find_banner_form_icon mx-2"></i>
                                <input id="cityInput" name="location" value="{{ request('location') }}"
                                    class="form-control me-2" type="search" placeholder="Adresse" style="display: none;"
                                    oninput="syncInputToSelect()">
                                <select id="citySelect" class="form-select w-100" onchange="handleSelectChange()">
                                    <option selected disabled>Choosissez en un
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
                            </div>

                            <div class="d-flex justify-content-center align-items-center col-md-3">
                                <button class="btn btn-outline-success w-100" onclick="click()">Rechercher</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--End Collection Banner-->

            <div class="container mt-5">
                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                        <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i>
                        </div>
                        <div class="sidebar_tags">
                            <!--Categories-->
                            <div class="sidebar_widget categories filter-widget">
                                <div class="widget-title">
                                    <h2>Catégories</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="sidebar_categories">
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Mobiles"><span
                                                    class="px-3">Mobiles</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Téléphones portables"><span class="px-3">Téléphones
                                                            portables</span>
                                                    </a>
                                                </li>

                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="add_category"
                                                            value="Accessoires pour téléphones portables"><span
                                                            class="px-3">Accessoires pour téléphones portables</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Mobiles"><span
                                                            class="px-3">Mobiles</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Objets connectés"><span class="px-3">Objets
                                                            connectés</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Cartes SIM"><span
                                                            class="px-3">Cartes SIM</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Services pour téléphones portables"><span
                                                            class="px-3">Services pour téléphones portables</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Électronique"><span
                                                    class="px-3">Électronique</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Ordinateurs de bureau"><span class="px-3">Ordinateurs
                                                            de bureau</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Ordinateurs portables & accessoires"><span
                                                            class="px-3">Ordinateurs portables & accessoires</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Tablettes & accessoires"><span class="px-3">Tablettes
                                                            & accessoires</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Téléviseurs"><span
                                                            class="px-3">Téléviseurs</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Accessoires TV & Vidéo"><span
                                                            class="px-3">Accessoires TV & Vidéo</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Électroménagers"><span
                                                            class="px-3">Électroménagers</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Appareils photo, caméscopes & accessoires"><span
                                                            class="px-3">Appareils photo, caméscopes &
                                                            accessoires</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Climatiseurs & Électronique domestique"><span
                                                            class="px-3">Climatiseurs & Électronique domestique</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Systèmes audio & son"><span class="px-3">Systèmes
                                                            audio & son</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Consoles de jeux vidéo & accessoires"><span
                                                            class="px-3">Consoles de jeux vidéo & accessoires</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Ordinateurs"><span
                                                            class="px-3">Ordinateurs</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Photocopieurs"><span
                                                            class="px-3">Photocopieurs</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Autres articles électroniques"><span
                                                            class="px-3">Autres articles électroniques</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Vehicles"><span
                                                    class="px-3">Véhicules</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Voitures"><span
                                                            class="px-3">Voitures</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Motos"><span
                                                            class="px-3">Motos</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Vélos"><span
                                                            class="px-3">Vélos</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Tricycles"><span
                                                            class="px-3">Tricycles</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Camions"><span
                                                            class="px-3">Camions</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Vans"><span
                                                            class="px-3">Vans</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Autobus"><span
                                                            class="px-3">Autobus</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Véhicules lourds"><span class="px-3">Véhicules
                                                            lourds</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Pièces détachées & accessoires automobiles"><span
                                                            class="px-3">Pièces détachées & accessoires
                                                            automobiles</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Entretien et réparation"><span class="px-3">Entretien
                                                            et réparation</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Transport maritime"><span class="px-3">Transport
                                                            maritime</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Services automobiles"><span class="px-3">Services
                                                            automobiles</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Locations"><span
                                                            class="px-3">Locations</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Immobilier"><span
                                                    class="px-3">Immobilier</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Terrains à vendre"><span class="px-3">Terrains à
                                                            vendre</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Appartements à vendre"><span
                                                            class="px-3">Appartements à vendre</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Maisons à vendre"><span class="px-3">Maisons à
                                                            vendre</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Propriétés commerciales à vendre"><span
                                                            class="px-3">Propriétés commerciales à vendre</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Maison & Vie"><span
                                                    class="px-3">Maison & Vie</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Meubles de bureau & de magasin"><span
                                                            class="px-3">Meubles de bureau & de magasin</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Meubles pour enfants"><span class="px-3">Meubles pour
                                                            enfants</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Articles ménagers"><span class="px-3">Articles
                                                            ménagers</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Produits pour salle de bain"><span
                                                            class="px-3">Produits pour salle de bain</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Portes"><span
                                                            class="px-3">Portes</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Textiles et décoration pour la maison"><span
                                                            class="px-3">Textiles et décoration pour la maison</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Mode et Soins pour Hommes"><span class="px-3">Mode et Soins
                                                    pour Hommes</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Vestes & Manteaux"><span class="px-3">Vestes &
                                                            Manteaux</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Chemises & T-Shirts"><span class="px-3">Chemises &
                                                            T-Shirts</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Pantalons"><span
                                                            class="px-3">Pantalons</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Vêtements traditionnels"><span class="px-3">Vêtements
                                                            traditionnels</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Soins de beauté & du corps"><span class="px-3">Soins
                                                            de beauté & du corps</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Lunettes de vue & de soleil"><span
                                                            class="px-3">Lunettes de vue & de soleil</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Mode pour garçon"><span class="px-3">Mode pour
                                                            garçon</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Sacs & Accessoires"><span class="px-3">Sacs &
                                                            Accessoires</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Chaussures"><span
                                                            class="px-3">Chaussures</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Montres"><span
                                                            class="px-3">Montres</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Vente en gros - En vrac"><span class="px-3">Vente en
                                                            gros - En vrac</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Voitures"><span
                                                            class="px-3">Voitures</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Mode et Beauté pour Femmes"><span class="px-3">Mode et Beauté
                                                    pour Femmes</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Vêtements traditionnels"><span class="px-3">Vêtements
                                                            traditionnels</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Vêtements d'hiver"><span class="px-3">Vêtements
                                                            d'hiver</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Sacs & Accessoires"><span class="px-3">Sacs &
                                                            Accessoires</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Lingerie & Vêtements de nuit"><span
                                                            class="px-3">Lingerie & Vêtements de nuit</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Chaussures"><span
                                                            class="px-3">Chaussures</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Bijoux & Montres"><span class="px-3">Bijoux &
                                                            Montres</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Beauté & Soins personnels"><span class="px-3">Beauté
                                                            & Soins personnels</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Lunettes de vue & de soleil"><span
                                                            class="px-3">Lunettes de vue & de soleil</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Vente en gros - En vrac"><span class="px-3">Vente en
                                                            gros - En vrac</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Mode pour fille"><span class="px-3">Mode pour
                                                            fille</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Animaux & Animaux de Compagnie"><span class="px-3">Animaux &
                                                    Animaux de Compagnie</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Animaux de compagnie"><span class="px-3">Animaux de
                                                            compagnie</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Animaux de ferme"><span class="px-3">Animaux de
                                                            ferme</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Accessoires pour animaux"><span
                                                            class="px-3">Accessoires pour animaux</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Nourriture pour animaux"><span
                                                            class="px-3">Nourriture pour animaux</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Autres animaux & animaux de compagnie"><span
                                                            class="px-3">Autres animaux & animaux de compagnie</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Loisirs, Sports & Enfants"><span class="px-3">Loisirs, Sports
                                                    & Enfants</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Instruments de musique"><span
                                                            class="px-3">Instruments de musique</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Fitness & Gym"><span class="px-3">Fitness &
                                                            Gym</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Musique, Livres & Films"><span class="px-3">Musique,
                                                            Livres & Films</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Music"><span
                                                            class="px-3">Music</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Articles pour enfants"><span class="px-3">Articles
                                                            pour enfants</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Autres loisirs, sports & articles pour enfants"><span
                                                            class="px-3">Autres loisirs, sports & articles pour
                                                            enfants</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category"
                                                    value="Affaires & Industrie"><span class="px-3">Affaires &
                                                    Industrie</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Fournitures de bureau & papeterie"><span
                                                            class="px-3">Fournitures de bureau & papeterie</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Sécurité"><span
                                                            class="px-3">Sécurité</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Machines & outils industriels"><span
                                                            class="px-3">Machines & outils industriels</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Matières premières & fournitures industrielles"><span
                                                            class="px-3">Matières premières & fournitures
                                                            industrielles</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Licences, titres & appels d'offres"><span
                                                            class="px-3">Licences, titres & appels d'offres</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Équipements médicaux & fournitures"><span
                                                            class="px-3">Équipements médicaux & fournitures</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Autres articles d'affaires & industriel"><span
                                                            class="px-3">Autres articles d'affaires & industriel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Éducation"><span
                                                    class="px-3">Éducation</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Manuels scolaires"><span class="px-3">Manuels
                                                            scolaires</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Cours particuliers"><span class="px-3">Cours
                                                            particuliers</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate" value="Cours"><span
                                                            class="px-3">Cours</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Étudier à l'étranger"><span class="px-3">Étudier à
                                                            l'étranger</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Autres services éducatifs"><span class="px-3">Autres
                                                            services éducatifs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Essentiels"><span
                                                    class="px-3">Essentiels</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Produits pour bébés"><span class="px-3">Produits pour
                                                            bébés</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Soins de santé"><span class="px-3">Soins de
                                                            santé</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Articles ménagers"><span class="px-3">Articles
                                                            ménagers</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Autres essentiels"><span class="px-3">Autres
                                                            essentiels</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Services"><span
                                                    class="px-3">Services</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Entretien de bâtiments"><span class="px-3">Entretien
                                                            de bâtiments</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Services domestiques & de garde d'enfants"><span
                                                            class="px-3">Services domestiques & de garde
                                                            d'enfants</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Services de fitness & de beauté"><span
                                                            class="px-3">Services de fitness & de beauté</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Services informatiques"><span class="px-3">Services
                                                            informatiques</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Rencontres matrimoniales"><span
                                                            class="px-3">Rencontres matrimoniales</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Services de gestion des médias & événements"><span
                                                            class="px-3">Services de gestion des médias &
                                                            événements</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Services professionnels"><span class="px-3">Services
                                                            professionnels</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Entretien & réparation"><span class="px-3">Entretien
                                                            & réparation</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Tours & voyages"><span class="px-3">Tours &
                                                            voyages</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level">
                                            <a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Agriculture"><span
                                                    class="px-3">Agriculture</span>
                                            </a>
                                            <ul class="sublinks">
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Cultures, semences & plantes"><span
                                                            class="px-3">Cultures, semences & plantes</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Outils & machines agricoles"><span
                                                            class="px-3">Outils & machines agricoles</span>
                                                    </a>
                                                </li>
                                                <li class="level2">
                                                    <a href="#;" class="site-nav">
                                                        <input type="checkbox" name="sub_cate"
                                                            value="Autres articles agricoles"><span class="px-3">Autres
                                                            articles agricoles</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 sub-level"><a href="#;" class="site-nav">
                                                <input type="checkbox" name="add_category" value="Other"><span
                                                    class="px-3">Other</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!--Categories-->

                        </div>
                    </div>
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                        <div class="productList">
                            <div class="grid-products grid--view-items">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a
                                                href="{{ route('add.details', ['id' => $product->id,'slug' => $product->slug]) }}">
                                                @php
                                                // This is already an array
                                                $imgs = $product->img_path;
                                                // Decode JSON string to PHP array
                                                $array = json_decode( $imgs, true);
                                                @endphp
                                                @if ( $array )
                                                <!-- image -->

                                                <img class="primary blur-up lazyload" src=" {{$array[0]}}" alt="image"
                                                    title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" src=" {{$array[1]}}" alt="image"
                                                    title="product">
                                                <!-- End hover image -->
                                                @endif
                                            </a>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="variants add">
                                                <a
                                                    href="{{ route('add.details', ['id' => $product->id,'slug' => $product->slug]) }}">
                                                    <button class="btn btn-success" type="button" tabindex="0">Acheter
                                                        maintenant</button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a
                                                    href="{{ route('add.details', ['id' => $product->id,'slug' => $product->slug]) }}">
                                                    {{ ucwords(Str::limit($product->name, 18, '...')) }}
                                                </a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">
                                                    <i
                                                        class="fa-solid fa-franc-sign px-2"></i>{{$product->best_price}}</span>
                                                <span class="price"><i
                                                        class="fa-solid fa-franc-sign px-2"></i>{{$product->discounted_price
                                                    }}</span>
                                            </div>
                                            <!-- End product price -->
                                            @php
                                            $review = \App\Models\Comment::where('post_id', $product->id)->get();
                                            $rationvalue = round($review->avg('rating'));
                                            @endphp


                                            @if ($rationvalue)
                                            <div class="product-review">
                                                <a class="reviewLink" href="#tab2">
                                                    @for ($i = 0; $i < $rationvalue ; $i++) <i class="fa fa-star"></i>
                                                        @endfor
                                                </a>
                                            </div>
                                            @else
                                            <div class="product-review">
                                                <a class="reviewLink" href="#tab2">
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>

                                                </a>
                                            </div>
                                            @endif

                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End Main Content-->
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-xl-12">
                {!! $products->appends(Request::all())->links() !!}
            </div>
        </div>
    </div>


    @push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myForm');
            const checkboxes = form.querySelectorAll('input[type="checkbox"]');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    if (checkbox.checked) {
                        form.submit();
                    }
                });
            });
        });
    </script>
    <script>
        // Handle the event when a user selects a city from the dropdown
        function handleSelectChange() {
            var selectValue = document.getElementById('citySelect').value;
            var inputField = document.getElementById('cityInput');

            // Set the selected value in the input field
            inputField.value = selectValue;

            // Hide the select field and show the input field
            document.getElementById('citySelect').style.display = 'none';
            inputField.style.display = 'block';
        }

        // Sync the input field to clear the select field when typing
        function syncInputToSelect() {
            var inputValue = document.getElementById('cityInput').value;
            var select = document.getElementById('citySelect');

            // Clear selection if typing manually
            select.value = "";
        }
    </script>
    @endpush
</x-guest-layout>
<x-guest-layout>
    <div class="page section-header text-center ">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Profile Page</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="pro_img_name_div  p-4 row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="candidate_pic " onmousemove="hiIcon()" onmouseout="viIcon()">
                            <img class="img-fluid " src="{{asset($user->photo)}}" alt="Profile Picture">

                        </div>
                        <h2 class="px-2">{{$user->fullname}}</h2>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <i class="fa-solid fa-circle-plus in_fo_add" data-toggle="modal" data-target="#exampleModalpro">
                        </i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">

            <div class="col-md-4">
                <div class="pro_img_name_div p-4 ">
                    <h1>A propos de ma boutique</h1>
                    <div class="mx-4 mt-2">
                        <ul class="pro_na">
                            <li class="lvl1 parent">
                                <i class="fa-solid fa-signature px-2"></i>
                                <span class="sub_tex">{{$user->fullname}}</span>
                            </li> <br>
                            <li class="lvl1 parent megamenu">
                                <a href="mailto:{{$user->email}}">
                                    <i class="fa-regular fa-envelope px-2"></i>
                                    <span class="sub_tex">{{$user->email}}</span>
                                </a>
                            </li><br>
                            <li class="lvl1 parent megamenu">
                                <a href="tel:{{$user->phone}}">
                                    <i class="fa-solid fa-phone px-2"></i>
                                    <span class="sub_tex">{{$user->phone}}</span>
                                </a>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pro_img_name_div p-4 ">
                    <h1 class="mt-3">Abonnement</h1>
                    <div class="mx-4 mt-2">
                        <div class="">
                            @php

                            // Get the user's created date
                            $createdDate = Auth::user()->sub_date;

                            // Parse the created date
                            $start = \Carbon\Carbon::parse($createdDate);

                            // Calculate the end date by adding 30 days to the start date
                            $endDate = $start->copy()->addDays(30);
                            $endDatep = $start->copy()->addDays(60);

                            // Calculate the remaining days from today to the end date
                            $remainingDays = \Carbon\Carbon::now()->diffInDays($endDate, false);
                            // Calculate the remaining days from today to the end date
                            $remainingDaysp = \Carbon\Carbon::now()->diffInDays($endDatep, false);
                            @endphp

                            @if (Auth::user()->sub_id == null)
                            <ul class="pro_na">
                                <br>
                                <br>
                                <br>
                                <li class="lvl1 parent megamenu">
                                    <a href="{{Route('user.sub')}}">

                                         Veuillez vous <span class="sub_tex">abonner</span>  au vendeur de permis.

                                    </a>
                                </li>
                            </ul>

                            @elseif(Auth::user()->sub_id == 1)

                            <ul class="pro_na">
                                <br>
                                <br>
                                <br>
                                <li class="lvl1 parent megamenu">
                                    <a href="{{Route('user.sub')}}">
                                        <span class="sub_tex">Votre abonnement essentiel({{ $remainingDays }}jours restants !)</span>
                                    </a>
                                </li>
                            </ul>
                            <span></span>
                            @elseif(Auth::user()->sub_id == 2)

                            <ul class="pro_na">
                                <br>
                                <br>
                                <br>
                                <li class="lvl1 parent megamenu">
                                    <a href="{{Route('user.sub')}}">
                                        <span class="sub_tex">Votre abonnement Pro ({{ $remainingDays }} jours restants !)</span>

                                    </a>
                                </li>
                            </ul>
                            <span></span>
                            @elseif(Auth::user()->sub_id == 3)

                            <ul class="pro_na">
                                <br>
                                <br>
                                <li class="lvl1 parent megamenu">
                                    <a href="{{Route('user.sub')}}">
                                        <span class="sub_tex">Votre abonnement Premium ({{ $remainingDaysp }}jours restants !)</span>

                                    </a>
                                </li>
                            </ul>
                            <span></span>
                            @endif



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pro_img_name_div p-4 ">
                    <h1 class="mt-3"> Mes annonces voir</h1>
                    <div class="mx-4 mt-2">
                        <br>
                        <br>
                        <br>
                        <li class="lvl1 parent list-unstyled">
                            <i class="fa-solid fa-arrow-right"></i>
                            <span class="sub_tex"><a class="sub_tex" href="{{route('profile.add')}}">voir</a></span>
                        </li> <br>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-4">
 <div class="col-md-4 ">
                <div class="pro_img_name_div p-4 ">
                    <h1 class="mt-3">Commandez Recevoir</h1>
                     <div class="mx-4 mt-2">
                        <li class="lvl1 parent list-unstyled">
                            <i class="fa-solid fa-arrow-right"></i>
                            <span class="sub_tex"><a class="sub_tex" href="{{route('profile.order')}}">voir</a></span>
                        </li> <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pro_img_name_div p-4 ">
                    <h1 class="mt-3">Achat de produit</h1>
                     <div class="mx-4 mt-2">
                        <li class="lvl1 parent list-unstyled">
                            <i class="fa-solid fa-arrow-right"></i>
                            <span class="sub_tex"><a class="sub_tex" href="{{route('profile.buying')}}">voir</a></span>
                        </li> <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pro_img_name_div p-4 ">
                    <h1 class="mt-3">Produit en rupture de stock</h1>
                      <div class="mx-4 mt-2">
                        <li class="lvl1 parent list-unstyled">
                            <i class="fa-solid fa-arrow-right"></i>
                            <span class="sub_tex"><a class="sub_tex" href="{{route('stock.add')}}">voir</a></span>
                        </li> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalpro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mes infos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="productForm" action="{{ route('user.update.info') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div>
                                <label class="col-form-label">Photo de profil</label>
                            </div>
                            <input class="w-100 h-100" type="file" name="photo" />
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="col-form-label">modifier nom de la boutique</label>
                            </div>
                            <input  type="text" name="fullname" />
                        </div>
                        <div class="col-md-12">
                            <div>
                                <label class="col-form-label">Numéro de téléphone</label>
                            </div>
                            <input id="getFile" type="text" name="phone" placeholder="Numéro de téléphone" />
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




</x-guest-layout>

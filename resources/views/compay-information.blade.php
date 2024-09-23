<x-guest-layout>
    <div id="page-content">
        <!--Collection Banner-->
        <form id="myForm" action="{{ route('about.compay') }}" method="GET">

            <div class=" page section-header ">
                <div class="container row flex-column justify-content-center align-items-center text-center pt-5 pb-5">
                    <div class="col-md-4">
                        <h1 class="find_banner_title w-100">Djassa</h1>
                    </div>
                    <div class="col-md-8 ">
                        <div class="row mt-3 search_div m-3">
                            <div class="d-flex justify-content-center align-items-center col-md-8">
                                <i class="fa-solid fa-magnifying-glass find_banner_form_icon mx-2"></i>
                                <input name="keyword" class="form-control me-2" type="search"
                                    value="{{ request('keyword') }}" placeholder="Nom de l'entreprise">
                            </div>
                            <div class="d-flex justify-content-center align-items-center col-md-4">
                                <button class="btn btn-outline-success w-100" onclick="click()">Rechercher</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--End Collection Banner-->

            <div class="container mt-5">
                <div class="row">
                    @forelse ($comIns as $comIn)
                    <!--Main Content-->
                    <div class="col-3">
                        <div class="productList">

                            <div class="grid-products grid--view-items">
                                <div class="card" style="width: 18rem;">
                                    <img height="150" class="card-img-top"
                                        src="{{asset('storage')}}/{{ $comIn->photo }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$comIn->name}}</h5>
                                        <ul class="pro_na">
                                            <li class="lvl1 mt-2">
                                                <a href="mailto:{{$comIn->email}}">
                                                    <i class="fa-regular fa-envelope px-2"></i>
                                                    <span class="sub_tex">{{$comIn->email}}</span>
                                                </a>
                                            </li>
                                            <li class="lvl1 mt-2">
                                                <a href="tel:{{$comIn->phone}}">
                                                    <i class="fa-solid fa-phone px-2"></i>
                                                    <span class="sub_tex">{{$comIn->phone}}</span>
                                                </a>
                                            </li>
                                            <li class="lvl1 mt-2">
                                                <p>
                                                    <i class="fa-solid fa-location-dot px-2"></i>
                                                    <span class="sub_tex">{{$comIn->location}}</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    @empty
                    <div>Not Found</div>
                    @endforelse
                    <!--End Main Content-->
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-xl-12">
                {!! $comIns->appends(Request::all())->links() !!}
            </div>
        </div>
    </div>



</x-guest-layout>
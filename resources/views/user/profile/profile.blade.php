<x-guest-layout>
    @include('user.profile.component.header')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-3 side_div">
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
                        <li><a class="active" href="{{ route('profile.detail') }}">My Profile</a></li>
                        <li><a class="diactive" href="{{route('profile.add')}}">My Add</a></li>
                        <li><a class="diactive" href="{{route('profile.order')}}">MY Order</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 mt-3">
                <h1>About Me</h1>
                <div class="mx-4 mt-2">
                      <ul class="pro_na">
                            <li class="lvl1 parent">
                                <i class="fa-solid fa-signature px-2"></i>
                              <span class="sub_tex">{{$user->fullname}}</span>
                            </li> <br>
                             <li class="lvl1 parent megamenu">
                                <a href="mailto:{{$user->email}}">
                                    <i class="fa-regular fa-envelope  px-2"></i>
                                    <span class="sub_tex">{{$user->email}}</span>
                                </a>
                            </li>
                        </ul>
                   </div>
                <h1 class="mt-3">Subscription Model</h1>
                <div class="mx-4 mt-2">
                    <div class="">
                        @php

                        // Get the user's created date
                        $createdDate = Auth::user()->sub_date;

                        // Parse the created date
                        $start = \Carbon\Carbon::parse($createdDate);

                        // Calculate the end date by adding 30 days to the start date
                        $endDate = $start->copy()->addDays(30);

                        // Calculate the remaining days from today to the end date
                        $remainingDays = \Carbon\Carbon::now()->diffInDays($endDate, false);
                        @endphp

                        @if (Auth::user()->sub_id == null)
                        <ul class="pro_na">
                            <li class="lvl1 parent megamenu">
                                <a href="{{Route('user.sub')}}">
                                    please <span class="sub_tex">subscribe</span> to post your add

                                </a>
                            </li>
                        </ul>

                        @elseif(Auth::user()->sub_id == 1)

                        <ul  class="pro_na">
                            <li class="lvl1 parent megamenu">
                                <a href="{{Route('user.sub')}}">
                                 <span class="sub_tex">({{ $remainingDays }} days left!)</span>

                                </a>
                            </li>
                        </ul>
                        <span></span>
                       @endif



                    </div>
                </div>
            </div>
        </div>

    </div>


</x-guest-layout>

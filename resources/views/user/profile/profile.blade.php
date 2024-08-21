<x-guest-layout>
@include('user.profile.component.header')
<div class="container">
   <div class="row mt-3">
     <div class="col-md-3 side_div">
    <div class="sizebar">
                <ul >
                    <li ><a class="active" href="{{ route('profile.detail') }}">My Profile</a></li>
                    <li ><a class="diactive" href="{{route('profile.add')}}">My Add</a></li>
                    <li><a class="diactive" href="{{route('profile.order')}}">MY Order</a></li>
                    <li><a class="diactive" href="{{route('profile.add')}}">Contact</a></li>
                    <li><a class="diactive" href="{{route('profile.add')}}">About</a></li>
                </ul>
    </div>
    </div>
    <div class="col-md-9">
<h1>Profile Page</h1>
    </div>
   </div>

</div>


</x-guest-layout>

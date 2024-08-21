
    <div class="page section-header text-center ">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Profile Page</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="profile_imgs">
            <div class="cover_img_div">
                <img class="cover_img w-100" height="300" src="assets/images/slideshow-banners/belle-banner1.jpg"
                    alt="">

            </div>
            <div class="profile_img_div ">

                                    <div class="candidate_pic" onmousemove="hiIcon()" onmouseout="viIcon()">
                                        <img class="img-fluid " src="{{asset($user->photo)}}" alt="">
                                             <i class="fa-solid fa-circle-plus in_fo_add "
                                            onclick="document.getElementById('getFile').click()"> </i>
                                    </div>
                                    @if(Request::url() === route('profile.detail'))
                                    <div class="up_date_div">
                                        <form method="post" action="{{ route('user.update.info') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input id="getFile" style="display:none" type="file"
                                                onchange="form.submit()" name="photo" />
                                            <input type="hidden" name="old_photo" value="{{$user->photo}}" />
                                            <input type="hidden" name="fullname" value="{{$user->fullname}}" />
                                        </form>
                                    </div>
                         @else
                    @endif
            </div>
        </div>
    </div>

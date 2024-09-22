<nav class="admin_nav navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('assets')}}/images/logo.png" alt="Belle Multipurpose Html Template"
            title="Belle Multipurpose Html Template" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-between">

       </ul>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <form method="post" action="{{ route('admin.logout') }}">
                    @csrf

                    <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">Logout</a>
                </form>
            </div>
        </div>
    </div>
</nav>

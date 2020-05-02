<nav class="navbar  navbar-expand-lg navbar-light bg-light">
    {{--  Brand  --}}
    <a class="navbar-brand" href="{{route('welcome')}}">
        <img src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg"
             width="30"
             height="30"
             class="d-inline-block align-top"
             alt="bootstrap-logo-solid">
        Bootstrap
    </a>

    {{--  Mobile Menu Hamburger  --}}
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{--  List Menu  --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('welcome')}}">
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="{{route('contacts.index')}}">
                    Contacts
                </a>
            </li>
        </ul>
    </div>
</nav>
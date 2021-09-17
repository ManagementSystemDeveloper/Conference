<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">FITNESS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.html" class="nav-link font-20">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link font-20">About</a></li>
                <li class="nav-item"><a href="tour.html" class="nav-link font-20">Tour</a></li>
                <li class="nav-item"><a href="hotel.html" class="nav-link font-20">Hotels</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link font-20">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link font-20">Contact</a></li>
                <li class="nav-item cta">
                    <a href="contact.html" class="nav-link font-20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ 'My account' }}</span>
                    </a>
                    <div class="btn-group">
                        <div class="dropdown-menu">
                            <h5 class="dropdown-header">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h5>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Profile</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a  class="dropdown-item" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
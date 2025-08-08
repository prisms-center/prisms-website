<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top nav_wrap">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/assets/img/prisms-logo.png" alt="PRISMS" style="height:40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#prismsNavbar" aria-controls="prismsNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="prismsNavbar">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('science') ? 'active' : '' }}" href="{{ route('science') }}">Science</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('tools') ? 'active' : '' }}" href="{{ route('tools') }}">Tools</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('repository') ? 'active' : '' }}" href="{{ route('repository') }}">Repository</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('people') ? 'active' : '' }}" href="{{ route('people') }}">People</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('publications') ? 'active' : '' }}" href="{{ route('publications') }}">Publications</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('community') ? 'active' : '' }}" href="{{ route('community') }}">Community</a></li>
            </ul>
        </div>
    </div>
</nav>
<div style="height:64px"></div>

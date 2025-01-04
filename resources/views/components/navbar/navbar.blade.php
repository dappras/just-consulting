<nav class="navbar navbar-expand-lg bg-primary-custom text-light-custom py-3">
    <div class="container">
        <a class="navbar-brand text-light-custom" href="#">
            <div class="d-flex gap-2 align-items-center">
                <img src="{{ asset('images/logo.jpg') }}" alt=""
                    style="width: 48px; height: 48px; border-radius: 56px;">
                <div>JustConsulting</div>
            </div>
        </a>
        <button class="navbar-toggler bg-secondary-custom" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'text-secondary-custom' : 'text-light-custom' }}"
                        aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'text-secondary-custom' : 'text-light-custom' }}"
                        href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('contact') ? 'text-secondary-custom' : 'text-light-custom' }}"
                        href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="bg-info bg-gradient">
    <nav class="container navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link  {{ Request::is('/') ? 'active' : '' }} " href="/">Home</a>
                    <a class="nav-link  {{ Request::is('/about') ? 'active' : '' }} " href="/about">About</a>
                    <a class="nav-link  {{ Request::is('/contact') ? 'active' : '' }} " href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</section>

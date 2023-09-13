<section class="bg-info bg-gradient">
    <nav class="container navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'home' ? 'active' : '' }} " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'about' ? 'active' : '' }}  " href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'post' ? 'active' : '' }}  " href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'categories' ? 'active' : '' }}  "
                            href="/categories">Categories</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a href="/login" class="nav-link btn btn-primary  px-3 text-light">
                            <i class="bi bi-box-arrow-in-right"></i>
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

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
                    @auth
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Welcome Back, {{ auth()->user()->username }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dashboard">
                                        <i class="bi bi-box-fill"></i>
                                        Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit " class="dropdown-item">
                                            <i class="bi bi-arrow-right-square"></i>
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li class="nav-item ">
                            <a href="/login" class="nav-link btn btn-primary  px-3 text-light">
                                <i class="bi bi-arrow-right-square"></i>
                                Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</section>

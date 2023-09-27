<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Rykara Blog</a>
    <button class="navbar-toggker position-absolute d-md-none collapse" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button class="nav-link px-3 bg-dark border-0" type="submit">Logout</button>
            </form>
        </div>
    </div>
</header>
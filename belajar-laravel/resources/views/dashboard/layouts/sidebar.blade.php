<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <svg class="bi"><use xlink:href="#house-fill"/></svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                    My Post
                </a>
            </li>
        </ul>

        @can('admin')
        <hr class="my-3">
        <h6 class="sidabar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="dashboard/categories">
                    <span><i class="bi bi-grid"></i> Post Categories</span>
                </a>
            </li>
        </ul>
        @endcan

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="nav-link d-flex align-items-center gap-2" type="submit"><svg class="bi"><use xlink:href="#door-closed"/></svg> Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
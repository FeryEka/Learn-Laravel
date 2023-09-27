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
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('posts') ? 'active' : '' }}" href="/dashboard/posts">
                    <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                    My Post
                </a>
            </li>
        </ul>

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
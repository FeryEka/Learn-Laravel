<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="/">Rykara</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "blog") ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
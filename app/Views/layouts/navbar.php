<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Blog App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?>" href="/">Home</a>
            <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?>" href="/about">About</a>
            <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'posts' ? 'active' : '' ?>" href="/posts">Posts</a>
        </div>
        </div>
    </div>
</nav>
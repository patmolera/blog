<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>

      {{-- @if (Auth::guest())
        <a class="nav-link" href="/login">Sign In</a>
        <a class="nav-link" href="/register">Register</a>
      @endif


      @if (Auth::check())
        <a class="nav-link" href="/posts/create/">Publish Post</a>
        <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
      @endif --}}
      @if (Auth::guest())
        <a class="nav-link" href="/login">Sign In</a>
        <a class="nav-link" href="/register">Register</a>
      @elseif (Auth::check())
        <a class="nav-link" href="/posts/create/">Publish Post</a>
        {{-- <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a> --}}
        <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">Log Out</a>
                </div>
        </li>
      @endif
    </nav>
  </div>
</div>

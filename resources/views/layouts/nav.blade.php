<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>

      @if (Auth::guest())
        <a class="nav-link" href="/login">Sign In</a>
        <a class="nav-link" href="/register">Register</a>
      @endif


      @if (Auth::check())
        <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
      @endif
    </nav>
  </div>
</div>

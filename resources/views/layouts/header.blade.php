<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">EduFun</a>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ route('category.index') }}">Category</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('writers.index') }}">Writers</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about.index') }}">About Us</a></li>
      </ul>
  </div>
</nav>
@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero" style="min-height:250px;">
  <div class="container">
    <h1>Our Blog</h1>
    <p>Discover insights, stories, and updates from the world of talent, business, and creativity.</p>
  </div>
</section>

<!-- BLOG LIST -->
<section>
  <div class="container">
    <div class="row g-4">

      <!-- BLOG POSTS GRID -->
      <div class="col-lg-8">
        <div class="row g-4">

          <!-- Dummy Blog Card -->
          <div class="col-md-6">
            <div class="card bg-dark text-light hover-scale border-0">
              <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 1">
              <div class="card-body">
                <h5 class="card-title">Blog Post Title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                <a href="#" class="btn btn-primary btn-sm mt-2">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card bg-dark text-light hover-scale border-0">
              <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 2">
              <div class="card-body">
                <h5 class="card-title">Blog Post Title 2</h5>
                <p class="card-text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#" class="btn btn-primary btn-sm mt-2">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card bg-dark text-light hover-scale border-0">
              <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 3">
              <div class="card-body">
                <h5 class="card-title">Blog Post Title 3</h5>
                <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a href="#" class="btn btn-primary btn-sm mt-2">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card bg-dark text-light hover-scale border-0">
              <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Blog 4">
              <div class="card-body">
                <h5 class="card-title">Blog Post Title 4</h5>
                <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="btn btn-primary btn-sm mt-2">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <!-- PAGINATION (Dummy) -->
        <div class="mt-5 text-center">
          <nav>
            <ul class="pagination justify-content-center">
              <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>

      </div>

      <!-- SIDEBAR -->
      <div class="col-lg-4">
        <div class="p-4 bg-dark rounded">
          <h5>Categories</h5>
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Business</a></li>
            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Talent</a></li>
            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Creativity</a></li>
            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Technology</a></li>
          </ul>

          <h5 class="mt-4">Recent Posts</h5>
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Latest Trends in Talent Discovery</a></li>
            <li class="mb-2"><a href="#" class="text-light text-decoration-none">How to Connect Across Oceans</a></li>
            <li class="mb-2"><a href="#" class="text-light text-decoration-none">Boosting Creativity in Business</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection
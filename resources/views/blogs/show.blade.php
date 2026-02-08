@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero" style="min-height:250px;">
  <div class="container text-center">
    <h1>Blog Post Title</h1>
    <p>Insights, stories, and updates from the world of talent, business, and creativity.</p>
  </div>
</section>

<!-- BLOG POST -->
<section>
  <div class="container">
    <div class="row g-4">

      <!-- MAIN CONTENT -->
      <div class="col-lg-8">

        <article class="bg-dark text-light p-4 rounded">
          <img src="https://via.placeholder.com/900x400" class="img-fluid rounded mb-4" alt="Blog Image">

          <h2 class="mb-3">The Journey of Connecting Talent Across Oceans</h2>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan, nisl ac sollicitudin volutpat, augue nunc facilisis orci, sed laoreet enim mi in urna.</p>

          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

          <h4 class="mt-4">Key Insights</h4>
          <ul class="ps-3">
            <li>Understanding global talent trends.</li>
            <li>How to network effectively across countries.</li>
            <li>Best practices for talent growth and retention.</li>
          </ul>

          <p class="mt-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

          <a href="#" class="btn btn-primary mt-3">Back to Blog List</a>
        </article>

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
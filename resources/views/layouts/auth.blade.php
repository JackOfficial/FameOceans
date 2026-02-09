<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>FameOceans</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
<link href="{{ asset('images/FameOceans Logo.png') }}" rel="icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    :root {
        --ocean-blue: #0d6efd;
        --deep-ocean: #0a3d62;
        --glass-bg: rgba(255, 255, 255, 0.88);
        --glass-border: rgba(255, 255, 255, 0.65);
        --text-dark: #0f172a;
        --text-muted: #475569;
    }

    body {
        background: linear-gradient(135deg, #0a3d62, #0d6efd);
        min-height: 100vh;
    }

    .glass-card {
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid var(--glass-border);
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        color: var(--text-dark);
    }

    .glass-card .card-header {
        color: var(--text-dark);
        font-weight: 700;
        font-size: 1.15rem;
        text-align: center;
        background: transparent;
        border-bottom: 1px solid #e2e8f0;
    }

    .glass-card a {
        color: var(--ocean-blue);
        font-weight: 500;
    }

    .glass-card a:hover {
        text-decoration: underline;
    }

    .form-control {
        background: #ffffff;
        color: var(--text-dark);
        border-radius: 8px;
    }

    .form-control::placeholder {
        color: var(--text-muted);
    }

    .input-group-text {
        background: #f1f5f9;
        color: var(--text-muted);
        border-radius: 0 8px 8px 0;
    }

    .btn-ocean {
        background: linear-gradient(135deg, #0d6efd, #00c6ff);
        border: none;
        border-radius: 30px;
        font-weight: 600;
        color: #fff;
    }

    .btn-ocean:hover {
        box-shadow: 0 8px 20px rgba(13, 110, 253, 0.5);
    }

    footer {
        color: #e2e8f0;
    }
</style>

        @livewireStyles
    </head>

    <body>
        
         @yield('content')

       <h1>hello there</h1>
        
        <!-- JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        @livewireScripts
    </body>

</html>
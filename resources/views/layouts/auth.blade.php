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
        --card-bg: rgba(255, 255, 255, 0.97);
        --border-soft: #e5e7eb;
        --text-main: #0f172a;
        --text-muted: #64748b;
    }

    body {
        background: linear-gradient(135deg, var(--deep-ocean), var(--ocean-blue));
        min-height: 100vh;
        color: #e5e7eb;
    }

    /* Page wrapper */
    .auth-page {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Glass card */
    .glass-card {
        background: var(--card-bg);
        border-radius: 18px;
        border: 1px solid var(--border-soft);
        box-shadow: 0 25px 50px rgba(0,0,0,.25);
        color: var(--text-main);
    }

    .glass-card * {
        color: var(--text-main);
    }

    .glass-card .card-header {
        background: transparent;
        border-bottom: 1px solid var(--border-soft);
        font-weight: 700;
        font-size: 1.2rem;
        text-align: center;
    }

    /* Inputs */
    .form-control {
        border-radius: 10px;
        border: 1px solid var(--border-soft);
        color: var(--text-main);
    }

    .form-control::placeholder {
        color: var(--text-muted);
    }

    .input-group-text {
        background: #f8fafc;
        border-radius: 0 10px 10px 0;
        color: var(--text-muted);
    }

    /* Primary button */
    .btn-ocean {
        background: linear-gradient(135deg, #0d6efd, #00c6ff);
        border: none;
        border-radius: 999px;
        padding: 10px 16px;
        font-weight: 600;
        color: #fff !important;
    }

    .btn-ocean:hover {
        box-shadow: 0 8px 22px rgba(13,110,253,.45);
    }

    /* Google button */
    .btn-google {
        border-radius: 999px;
        font-weight: 600;
    }

    /* Links */
    .glass-card a {
        color: var(--ocean-blue);
        font-weight: 500;
        text-decoration: none;
    }

    .glass-card a:hover {
        text-decoration: underline;
    }

    /* Outside-card text */
    .auth-footer {
        text-align: center;
        margin-top: 16px;
        font-size: 0.85rem;
        color: #e5e7eb;
    }

    .auth-footer a {
        color: #e5e7eb;
        text-decoration: underline;
    }
</style>

        @livewireStyles
    </head>

    <body>
        
         @yield('content')

        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>FameOceans</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" target="__blank" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/HFRwOrg" target="__blank" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/hf.r.o?igsh=OXVjbnlmOXVzNjQy" target="__blank" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCbWRXU7KOSRxNodro3H8mug" target="__blank" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/happy-family-rwanda" target="__blank" class="btn-hover-color btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="#">Tonny Jack</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        @livewireScripts
    </body>

</html>
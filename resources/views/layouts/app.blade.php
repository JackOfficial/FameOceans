<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'FameOceans | Strategic Global Mobility & Investment Advisory')</title>
    <meta name="description" content="FameOceans connects global talent with strategic investment opportunities. Specialized in workforce mobility between Africa, the Gulf, and Europe.">
    <meta name="keywords" content="Global Mobility, Investment Advisory, Workforce Solutions, Africa Gulf Europe Business">
    
    <meta property="og:title" content="FameOceans | Strategic Workforce & Smart Capital">
    <meta property="og:description" content="Bridging markets with compliant mobility and high-yield investment corridors.">
    <meta property="og:image" content="{{ asset('images/og-preview.png') }}">
    <meta property="og:type" content="website">

    <link href="{{ asset('images/FameOceans Logo.png') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <style>
        :root {
            --surface: #0e2a47;
            --mid: #081b34;
            --deep: #040d1c;
            --abyss: #020611;
            --primary: #3a7bfd;
            --accent: #00e0ff;
            --text: #e3e9ff;
            --muted: rgba(227, 233, 255, .65);
            --glass: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.08);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            background: var(--deep); /* Fallback */
            background-attachment: fixed;
            background-image: linear-gradient(to bottom, var(--surface), var(--mid) 35%, var(--deep) 70%, var(--abyss));
            overflow-x: hidden;
        }

        /* PREMIUM NAVBAR */
        .navbar {
            background: rgba(4, 13, 28, 0.8) !important;
            backdrop-filter: blur(15px) saturate(180%);
            -webkit-backdrop-filter: blur(15px) saturate(180%);
            border-bottom: 1px solid var(--glass-border);
            padding: 15px 0;
            transition: all 0.4s ease;
        }

        .nav-link {
            color: var(--text) !important;
            margin-left: 25px;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: color 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--accent) !important;
        }

        /* CUSTOM MOBILE MENU */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(2, 6, 17, 0.98);
                margin-top: 15px;
                padding: 20px;
                border-radius: 20px;
                border: 1px solid var(--glass-border);
            }
            .nav-link { margin: 10px 0; font-size: 16px; }
        }

        /* FOOTER DECORATION */
        footer {
            background: var(--abyss);
            border-top: 1px solid var(--glass-border);
            padding: 100px 0 50px;
        }

        .footer-link {
            color: var(--muted);
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            margin-bottom: 10px;
        }

        .footer-link:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .social-icon {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            color: #fff;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: var(--accent);
            color: var(--deep);
            transform: translateY(-5px);
        }

        /* HELPERS */
        .section-padding { padding: 120px 0; }
        @media (max-width: 768px) { .section-padding { padding: 80px 0; } }

           .btn-scroll-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transform: translateY(20px);
    }

    .btn-scroll-top.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .btn-scroll-top:hover {
        background: var(--accent);
        color: var(--deep);
        box-shadow: 0 0 20px rgba(0, 224, 255, 0.4);
        transform: scale(1.1);
    }

    @keyframes oceanFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

body {
    background: linear-gradient(-45deg, #0e2a47, #081b34, #040d1c, #020611);
    background-size: 400% 400%;
    animation: oceanFlow 15s ease infinite;
}

.ocean-overlay {
    position: fixed;
    top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none; /* Allows clicking through to buttons */
    z-index: 1;
    overflow: hidden;
}

.bubble {
    position: absolute;
    bottom: -100px;
    width: 20px;
    height: 20px;
    background: rgba(0, 224, 255, 0.1);
    border-radius: 50%;
    animation: rise 10s infinite ease-in;
}

.bubble:nth-child(1) { left: 10%; width: 40px; height: 40px; animation-duration: 12s; }
.bubble:nth-child(2) { left: 80%; width: 25px; height: 25px; animation-duration: 8s; animation-delay: 2s; }
.bubble:nth-child(3) { left: 45%; width: 15px; height: 15px; animation-duration: 15s; animation-delay: 4s; }

@keyframes rise {
    0% { transform: translateY(0) scale(1); opacity: 0; }
    50% { opacity: 0.3; }
    100% { transform: translateY(-120vh) scale(1.5); opacity: 0; }
}

.zoom-img {
    animation: drift 20s infinite alternate ease-in-out;
}

@keyframes drift {
    from { transform: scale(1.1) translateX(-2%); }
    to { transform: scale(1.2) translateX(2%) translateY(2%); }
}

    </style>

    @stack('styles')
    @livewireStyles
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/FameOceans.png') }}" alt="FameOceans" height="45">
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <i class="fas fa-bars text-white fs-2"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blogs">Insights</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="ocean-overlay">
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
</div>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('images/FameOceans.png') }}" alt="Logo" height="50" class="mb-4">
                    <p class="mb-4">Strategically bridging workforce mobility and smart capital across global corridors.</p>
                    <div class="d-flex">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white fw-bold mb-4">Explore</h5>
                    <ul class="list-unstyled">
                        <li><a href="/about" class="footer-link">Our Story</a></li>
                        <li><a href="/services" class="footer-link">Services</a></li>
                        <li><a href="/partners" class="footer-link">Partners</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white fw-bold mb-4">Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="/contact" class="footer-link">Contact Us</a></li>
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                        <li><a href="#" class="footer-link">Terms of Service</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <livewire:subscribe-component />
                </div>
            </div>

            <div class="mt-5 pt-4 border-top border-white border-opacity-10 d-flex flex-column justify-content-center align-items-center text-center">
    <p class="small mb-0 opacity-75">&copy; 2026 FameOceans. Designed for Excellence.</p>
    
    @if(Auth::check())
        <div class="d-flex align-items-center mt-2">
            <span class="mx-2 opacity-25">|</span>
            <a href="#" class="small text-danger text-decoration-none hover-opacity" 
               style="transition: opacity 0.3s ease;"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Admin Logout ({{ Auth::user()->name }})
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
    @endif
</div>
        </div>
    </footer>

    <button id="scrollToTop" class="btn-scroll-top" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
    const scrollBtn = document.getElementById('scrollToTop');

    window.addEventListener('scroll', () => {
        // Show button after scrolling down 400px
        if (window.pageYOffset > 400) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
    });

    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
    </script>

    @livewireScripts
    @stack('scripts')
</body>
</html>
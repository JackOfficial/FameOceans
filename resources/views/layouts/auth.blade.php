<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FameOceans | Secure Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="{{ asset('images/FameOceans Logo.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --surface: #0e2a47;
            --mid: #081b34;
            --deep: #040d1c;
            --abyss: #020611;
            --primary: #3a7bfd;
            --accent: #00e0ff;
            --text: #e3e9ff;
            --muted: rgba(227, 233, 255, .6);
            --glass: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top right, var(--surface), var(--abyss));
            min-height: 100vh;
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow-x: hidden;
        }

        /* Animated Background (Optional: matching your main page) */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(-45deg, #0e2a47, #020611, #081b34);
            background-size: 400% 400%;
            animation: oceanFlow 15s ease infinite;
            z-index: -1;
        }

        @keyframes oceanFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* The Auth Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 28px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.4);
            padding: 2.5rem;
            width: 100%;
            max-width: 450px;
        }

        /* Input Styling */
        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            color: #fff !important;
            border-radius: 12px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--accent);
            box-shadow: 0 0 15px rgba(0, 224, 255, 0.2);
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            color: var(--muted);
            border-radius: 12px;
        }

        /* Buttons */
        .btn-ocean {
            background: linear-gradient(90deg, var(--primary), var(--accent));
            color: var(--abyss) !important;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .btn-ocean:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 224, 255, 0.3);
        }

        .btn-google {
            background: white;
            color: #000 !important;
            border-radius: 12px;
            font-weight: 500;
            border: none;
            padding: 10px;
        }

        /* Links */
        a { color: var(--accent); text-decoration: none; transition: 0.3s; }
        a:hover { color: #fff; text-shadow: 0 0 10px var(--accent); }

        .auth-footer {
            margin-top: 25px;
            font-size: 0.8rem;
            opacity: 0.6;
            text-align: center;
        }
    </style>
    @livewireStyles
</head>
<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @livewireScripts
</body>
</html>
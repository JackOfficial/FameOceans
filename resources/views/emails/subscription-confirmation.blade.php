<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscription Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background-color: #f4f7fb;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-top: 5px solid #3a7bfd; /* Brand color */
        }
        .header {
            background: #3a7bfd;
            text-align: center;
            padding: 20px;
            color: #fff;
        }
        .header img {
            max-height: 50px;
        }
        .header h2 {
            margin-top: 10px;
            font-size: 24px;
            font-weight: 600;
        }
        .content {
            padding: 25px 30px;
            text-align: center;
        }
        .content p {
            margin-bottom: 15px;
            line-height: 1.6;
            font-size: 16px;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: linear-gradient(90deg, #3a7bfd, #00e0ff);
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .button:hover {
            background: linear-gradient(90deg, #00e0ff, #3a7bfd);
        }
        .footer {
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #999;
            background: #f4f7fb;
        }
    </style>
</head>
<body>

    <div class="email-wrapper">
        
        <!-- HEADER -->
        <div class="header">
            <img src="{{ asset('images/FameOceans.png') }}" alt="FameOceans Logo">
            <h2>Welcome to FameOceans 🌊</h2>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <p>
                Thanks for joining the wave! You’ll now receive exclusive updates,
                global opportunities, and insights from FameOceans.
            </p>

            <p>Stay bold. Stay global.<br><strong>— FameOceans Team</strong></p>

            <!-- Optional CTA Button -->
            <a href="{{ url('/') }}" class="button">Visit Our Website</a>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            &copy; {{ date('Y') }} FameOceans. All rights reserved.
        </div>

    </div>

</body>
</html>

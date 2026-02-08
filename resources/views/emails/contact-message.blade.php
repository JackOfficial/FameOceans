<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        /* Reset some basic styles */
        body, p, h2 {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background-color: #f4f7fa;
            color: #333;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-top: 5px solid #3a7bfd; /* Brand color */
        }
        .header {
            background: #3a7bfd;
            padding: 20px;
            text-align: center;
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
        }
        .content p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .label {
            font-weight: 600;
            color: #3a7bfd;
        }
        .message {
            background: #f4f7fa;
            padding: 15px;
            border-radius: 8px;
            font-style: italic;
        }
        .footer {
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #999;
            background: #f4f7fa;
        }
    </style>
</head>
<body>

    <div class="email-wrapper">
        
        <!-- HEADER -->
        <div class="header">
            <img src="{{ asset('images/FameOceans.png') }}" alt="FameOceans Logo"> 
            <h2>New Contact Message</h2>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <p><span class="label">Name:</span> {{ $contact->name }}</p>
            <p><span class="label">Email:</span> {{ $contact->email }}</p>
            <p><span class="label">Subject:</span> {{ $contact->subject ?? '—' }}</p>

            <hr style="border: none; border-top: 1px solid #e0e0e0; margin: 20px 0;">

            <p class="label">Message:</p>
            <p class="message">{{ $contact->message }}</p>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            &copy; {{ date('Y') }} FameOceans. All rights reserved.
        </div>

    </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Message</title>
</head>
<body>

    <h2>New Contact Message</h2>

    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Subject:</strong> {{ $contact->subject ?? '—' }}</p>

    <hr>

    <p>{{ $contact->message }}</p>

</body>
</html>

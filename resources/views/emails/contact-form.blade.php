<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
<div style="max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #2563eb;">Nuevo mensaje de contacto</h2>

    <div style="background-color: #f3f4f6; padding: 20px; border-radius: 8px; margin: 20px 0;">
        <p><strong>Título:</strong> {{ $title }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Mensaje:</strong></p>
        <p style="white-space: pre-wrap;">{{ $contactMessage }}</p>
    </div>

</div>
</body>
</html>

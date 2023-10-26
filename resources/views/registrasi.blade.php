<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <img src="{{ asset('logo.jpg') }}" alt="Logo" style="width: 200px; height: 60px; margin-bottom: 0px;">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <label for="password">Konfirmasi Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Daftar</button>
        </form>

        <p>Sudah memiliki akun? <a href="{{ route('login') }}">Login di sini</a>.</p>
    </div>
</body>

</html>

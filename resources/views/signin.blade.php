<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
    <h1>Sign In dulu ya dek</h1>

    @if(session('error'))
        <p style="color: red">{{ session('error') }}</p>
    @endif

    <form action="/signin" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun yhaaa? Klik <a href="/signup">Sign up</a></p>
</body>
</html>

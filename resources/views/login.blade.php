<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/Login.blade.css') }}">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>

    <section>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Senha" name="password" required>
        <input type="submit" value="Entrar">
    </form>
</section>

</body>
</html>
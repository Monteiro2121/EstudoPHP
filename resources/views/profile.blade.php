<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profile.blade.css') }}">
    <title>Profile</title>
</head>
<body>
    <header><h1>Dados do usuário</h1></header>

    <div class="container">
        <h2>Nome: {{ Auth::user()->name }}</h2>
        <br>
        <h2>Email: {{ Auth::user()->email }}</h2>
        <br>
        <!-- fomatação para mostrar a idade -->
        <h2>Idade: {{ \Carbon\Carbon::parse(Auth::user()->age)->age }}</h2>
    </div>
    <a href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
  <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5"/>
</svg></a>
</body>
</html>
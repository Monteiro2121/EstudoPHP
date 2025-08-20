<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/formulario.blade.css') }}">
    <title>Cadastro</title>
</head>
<body>
    <header>
    <h1>Cadastre-se</h1>
    </header>
    <section>
        <form action="{{ route('formulario.store')  }}" method="post">
            @csrf
            <input type="text" placeholder="Nome competo" id="name" name="name">
            <input type="text" placeholder="Email" id="email" name="email">
            <input type="date" id="age" name="age">
            <input type="password" name="password" id="password" placeholder="Senha">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
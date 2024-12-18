<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ route('logar') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Entrar</button>
    </form>

    @if ($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif
</body>
</html>

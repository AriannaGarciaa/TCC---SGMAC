<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGMAC</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Incluindo o CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="mb-4">Bem-vindo ao SGMAC</h1>
        <p class="lead mb-4">Gerencie servidores, técnicos, equipamentos, manutenções, locais e chamados.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <!-- Botões -->
            <a href="{{ route('servidores.index') }}" class="btn btn-primary">Servidores</a>
            <a href="{{ route('tecnicos.index') }}" class="btn btn-secondary">Técnicos</a>
            <a href="{{ route('equipamentos.index') }}" class="btn btn-success">Equipamentos</a>
            <a href="{{ route('manutencoes.index') }}" class="btn btn-warning">Manutenções</a>
            <a href="{{ route('locais.index') }}" class="btn btn-info">Locais</a>
            <a href="{{ route('chamados.index') }}" class="btn btn-danger">Chamados</a>
        </div>
    </div>
    <footer class="mt-5 text-center text-muted">
        © 2024 SGMAC - Todos os direitos reservados.
    </footer>
</body>
</html>

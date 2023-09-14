<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Game List - Ínicio</title>
</head>
<body id="bg">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lançamentos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Listas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Zerados</a></li>
                            <li><a class="dropdown-item" href="#">Platinados</a></li>
                            <li><a class="dropdown-item" href="#">Para Jogar</a></li>
                            <li><a class="dropdown-item" href="#">Dropados</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adicionar.php">Adicionar</a>
                    </li>
                </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">

                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>

    <form method="POST" enctype="multipart/form-data" id="adicionar_jogo">
        Nome: <input type="text" name="valor" id="valor" required>

        Selecione uma imagem: <input type="file" name="imagem" id="imagem">
        <input type="submit" value="Enviar">
    </form>

    <!--
        <form action="enviar.php" method="POST" id="adicionar_jogo" enctype="multipart/form-data">
            
            
            <label for="imagem">Imagem de capa: </label>
            <input type="file" name="imagem" id="imagem">

            <input type="submit" value="Enviar">
        </form>
-->
        <div id=resultado></div>

        <div id="imagem-preview"></div>
    </main>
    <script src="../resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
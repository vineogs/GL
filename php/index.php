<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Game List</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Lista</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Cadastrar Jogo</a>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <!-- Text input nome do jogo -->
                <div class="row">
                    <div class="col s6">
                        Nome do Jogo:
                        <div class="input-field inline">
                            <input id="nome_jogo" class="validate">
                        </div>
                    </div>

                    <div class="col s6">
                        Desenvolvedora:
                        <div class="input-field inline">
                            <input id="nome_jogo" class="validate">
                        </div>
                    </div>

                    <div class="col s12">
                        Publicadora:
                        <div class="input-field inline">
                            <input id="nome_jogo" class="validate">
                        </div>
                    </div>
                </div>

                <!-- Textinput para desenvoldedora -->
                <div class="row">

                </div>

                <!-- Textinpu para publicadora -->
                <div class="row">

                </div>

                <!-- Inputs dropdown -->
                <div class="row">
                    <!-- Dropdown com as plataformas dos jogos -->
                    <div class="input-field col s6">
                        <select multiple>
                        <option value="1">Playstation 5</option>
                        <option value="2">Nintendo Switch</option>
                        <option value="3">Xbox One</option>
                        </select>
                        <label>Plataformas</label>
                    </div>

                    <!-- Dropdown com os gêneros dos jogos -->
                    <div class="input-field col s6">
                        <select multiple>
                        <option value="1">Ação</option>
                        <option value="2">FPS</option>
                        <option value="3">Simulação</option>
                        </select>
                        <label>Gênero de jogo</label>
                    </div>
                </div>

                <!-- Area de envio de arquivo (imagem de capa) -->
                <form action="#">
                    <div class="file-field input-field">
                    <div class="btn">
                        <span>Arquivo</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input id="imagem_capa" class="file-path validate" type="text">
                        <label for="imagem_capa">Imagem de capa do jogo</label>
                    </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../resources/js/script.js"></script>
</body>
</html>
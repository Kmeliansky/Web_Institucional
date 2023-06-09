<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição da pagina</title>

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk&display=swap" rel="stylesheet">
    <!-- CSS-->
    <link rel="stylesheet" href="../style/edit-page.css">
    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/index.css">

    <style>
        .input-txt {
            border: none;
            border-radius: 0;
            border-bottom: 1px solid;
        }
    </style>
</head>
<body>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg" style="background-color: #6043B5;">
        <div class="container-fluid">
            <a class="text-uppercase navba r-brand text-light" href="#">Logo aqui</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-nav">
                <a class="nav-link text-light" href="user/form-create.php">Ajuda</a>
                <a class="nav-link text-light" href="login/form-login.php">Sair</a>
            </div>

        </div>
    </nav>

    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="text-center">
                <form class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded"
                    action="proccess-edit-page.php" method="post">

                    <!--Edição da pagina-->
                    <div class=" m-5 border-secondary-subtle rounded m-5">
                        <h2>Caracteristicas da sua pagina</h2>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" rows="3" class="form-label">Logo da
                                            pagina: </label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" rows="3" class="form-label">Cores do
                                            Menu:</label>
                                        <input type="color" id="exampleFormControlTextarea1" rows="3"
                                            name="descricao_produto"></input>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" rows="3" class="form-label">Cores do
                                            footer:</label>
                                        <input type="color" id="exampleFormControlTextarea1" rows="3"
                                            name="descricao_produto"></input>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Cores da fonte:
                                        </label>
                                        <input type="color" id="exampleFormControlTextarea1" rows="3"
                                            name="valor_produto"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </fieldset>
                    </div>
            </div>

            <div class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded">
                <fieldset class="m-5 border-secondary-subtle">
                    <!--Edição sobre a empresa-->
                    <h2>Sobre</h2>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Descrição sobre a empresa</label>
                        <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                            name="sobre"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Valores e missão da empresa</label>
                        <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                            name="valores"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Área de atuação</label>
                        <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                            name="area_atuacao"></textarea>
                    </div>
            </div>
            </fieldset>

            <div class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded">
                <!--Edição de contatos-->
                <fieldset class="m-5 border-secondary-subtle">
                    <h2>Contato</h2>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Whatsapp</label>
                        <input type="text" class="input-txt form-control" id="whatsapp" name="whatsapp"
                            placeholder="Ex: 14981228218">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Linkedin</label>
                        <input type="text" class="input-txt form-control" id="linkedin" name="linkedin"
                            placeholder="Ex: https://linkedin.com.br">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Facebook</label>
                        <input type="text" class="input-txt form-control" id="facebook" name="facebook"
                            placeholder="Ex: https://facebook.com.br">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Instagram</label>
                        <input type="text" class="input-txt form-control" id="instagram" name="instagram"
                            placeholder="Ex: https://Instagram.com.br">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">E-mail</label>
                        <input type="text" class="input-txt form-control" id="email" name="email"
                            placeholder="Ex: https://facebook.com.br">
                    </div>
                </fieldset>
            </div>

            <div class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded">
                <fieldset class="m-5  border-secondary-subtle">
                    <!--Edição dos Serviços-->
                    <h2>Serviço</h2>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Escolha uma imagem atraente para a o seu serviço</label>
                        <input class="input-txt form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                        <input type="email" class="input-txt form-control" id="exampleFormControlInput1" name="titulo_Servico">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                        <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                            name="descricao_servico"></textarea>
                    </div>
                </fieldset>
            </div>

            <div class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded">
                <!--Edição dos produtos-->
                <fieldset class="m-5  border-secondary-subtle">
                    <h2>Produtos</h2>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Escolha a imagem do produto</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titulo do Produto:</label>
                        <input type="email" class="input-txt form-control" id="exampleFormControlInput1"
                            name="titulo_produto">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição do produto</label>
                        <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                            name="descricao_produto"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Valor do produto</label>
                        <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                            name="valor_produto"></textarea>
                    </div>
                </fieldset>
                </form>

    </section>

    <div class="container text-center">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <button type="button" class="btn btn-light"> <a href="../session/dashboard.php"> Voltar</a></button>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

</body>

</html>
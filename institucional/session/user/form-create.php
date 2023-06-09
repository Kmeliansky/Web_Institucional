<?php
    //chamada para o arquivo que verifica se o usuario está logado
    include("../../configuration/user-session.php");

include("../../configuration/connection.php");

//Instrução SQL de seleção dos dados sobre a empresa.
$SQLSobre = "SELECT * FROM sobre WHERE ativo = 1;";
      
//Executa a consulta SQL.
$consultaSobre = mysqli_query($connect, $SQLSobre);

//Verifica se existem retornos na consulta SQL.
if (mysqli_num_rows($consultaSobre) > 0){

  //apresenta todas as informações sobre a empresa
  $sobre = mysqli_fetch_assoc($consultaSobre);
  $imagemSobre = "data:image/jpeg;base64," . base64_encode($sobre['imagem_empresa']);
  $imagemLogo = "data:image/jpeg;base64," . base64_encode($sobre['logo']);
  } else{

  //Retorna a mensagem para o usuário.
  print("Não existem informações cadastradas sobre a empresa no banco de dados.");
  }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

   <!----------------------Menu------------------------>
   <nav class="nave d-flex align-items-center" style="background-color:<?php print($sobre["cor_primaria"]) ?>;">
    <section class="container py-3 nav d-flex justify-content-between align-items-center">
      <div class="item-menu">
      <img class="" src="<?php print($imagemLogo); ?>" alt="Imagem do Produto" width="70px">
      </div>
      <div class="item-menu">
        <a class="nav-link text-light btn" href="../session/exit.php" style="background-color:  <?php print($sobre["cor_secundaria"]) ?>; color:#FFFFFF;">Sair</a>
      </div>
    </section>
  </nav>

    <!-- Seção que apresentará a mensagem para o usuário -->
    <section class="container py-5 text-center">
        <?php
        //Verifica se existe alguma mensagem de retorno.
        if(isset($_SESSION['retorno'])){

          //Apresenta a mensagem de retorno para o usuário.
          print($_SESSION['retorno']);

          //Deleta a variável de sessão.
          unset($_SESSION['retorno']);
        }else{

          //Apresenta uma mensagem.
          print("Preencha com as informações do novo usuario...");

        }
      ?>
    </section>

    <!-- Seção do formulário -->
    <section class="container py-5">
        <div class="row">
            <form action="process-create.php" method="post" class=" border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded">
                
                <!-- Nome e CPF -->
                <div class="row">
                    <div class="col-6 my-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="col-6 my-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf">
                    </div>
                    
                </div>

                <!-- Data de nascimento  -->
                <div class="row">
                    <div class="col-4 my-3">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
                    </div>
                </div>

                <!-- CEP e endereço -->
                <div class="row">
                    <div class="col-3 my-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep">
                    </div>
                    <div class="col-3 my-3">
                        <label for="logradouro" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="logradouro" name="endereco">
                    </div>
                </div>

                <!-- Código de área e celular -->
                <div class="row">
                <div class="col-6 my-3">
                        <label for="codigoArea" class="form-label">Código de Área</label>
                        <select id="codigoArea" name="codigoArea" class="form-select">
                          <option selected>Selecione o código de área...</option>
                          <option value="+55">Brasil (+55)</option>
                        </select>
                    </div>
                    <div class="col-6 my-3">
                        <label for="celular" class="form-label">Celular com DDD</label>
                        <input type="celular" class="form-control" id="celular" name="celular">
                    </div>
                </div>

                <!-- E-mail e senha -->
                <div class="row">
                    <div class="col-4 my-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-4 my-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <div class="col-4 my-3">
                        <label for="confirmaSenha" class="form-label">Confirme a Senha</label>
                        <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha">
                    </div>
                </div>
                
                <!-- Botão de cadastrar -->
                <div class="row">
                    <div class="col-12 my-3">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
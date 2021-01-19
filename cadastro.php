  <?php require 'view/header.php' ?>
<body id="login">
    
    <section class="d-flex">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-md-6 logo-login"> <!--Sessão de Logo-->
                    
                        <a href=""><img src="imagens/logotipo.png" class="img-fluid" alt=""></a>
                    
                </div>

                <div class="col-md-6"> <!--coluna de formulário de Cadastro-->
                    <div class="form-group p-4">

                        <div><!--titulo de cadastro-->
                            <h1 class="text-center"> <strong>Balson</strong></h1>
                            <p class="text-center">Complete as informações para confirmar cadastro.</p>
                        </div>
                            
                        <form action=""><!--Sessão de cadastro-->
                            <div class="form-group"><!--Inserir Nome Completo-->
                                <input class="form-control" type="text" name="nome" id="nome-user" placeholder="Nome Completo">
                            </div>
                            <div class="form-group"><!--Inserir email-->
                                <input class="form-control" type="email" name="email" id="email-user" placeholder="E-mail">
                            </div>
                            <div class="form-group"><!--Senha-->
                                <input class="form-control" type="password" name="senha" id="senha-user" placeholder="Senha">
                            </div>
                            <div class="form-group"><!--Confirma Senha-->
                                <input class="form-control" type="text" name="confirma senha" id="confirma-senha-user" placeholder="Confirmar Senha">
                            </div>
                            <div class="checkbox"><!--Termo de uso - aceitar-->
                                <label for="">
                                    <input type="checkbox" name="termos" id="aceitar_termos">
                                    Eu concordo com os termos de uso.
                                </label>
                            </div>
                            <div><!--Botão de cadastro-->
                                <input class="btn btn-secondary btn-block" type="submit" value="Acessar">
                            </div>
                            <div class=""><!--voltar tela de login-->
                                <a href="login.php">Tem uma conta? Acesse aqui.</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

<?php require 'view/footer.php'; ?>
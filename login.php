<?php require 'view/header.php'; ?>
<?php require 'validar-login.php'; ?>

<body id="login">

    <section class="d-flex">

        <div class="container align-self-center">
            <div class="row">
                <div class="col-md-6 logo-login"> <!--Sessão de Logo-->
                    
                        <a href=""><img src="imagens/logotipo.png" class="img-fluid" alt=""></a>
                    
                </div>
                <div class="col-md-6"> <!--Sessão formulário de login-->
                    <div>
                        <h1 class="text-center h1-login"> <strong>Balson</strong></h1>
                        <p class="text-center">Acompanhe suas demandas</p>

                        <form action="" method="post"> <!--Formulario Login-->
                            
                            <div class="form-group"> <!--input email-->
                                <input class="form-control " type="email" name="email" id="email_user" placeholder="Informe seu email ou Usuário">
                            </div>

                            <div class="form-group"> <!--input Senha-->
                                <input class="form-control" type="password" name="senha" id="senha_user" placeholder="Informe sua senha">
                            </div>

                            <div class="row row-submit">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <input type="checkbox" name="lembrar" id="lembrar_senha">
                                        <label class="ng-binding ml-3" for="lembrar_senha">
                                            Lembrar de mim
                                        </label>
                                    </div>
                                </div>
        
                                <div class="col-md-6">
                                    <a class="ml-4" href="esqueci-senha.php">Esqueci Senha</a>
                                </div>
                            </div>

                            <div class="row row-submit">
                                <div class="col-md-6">
                                    <input class="btn btn-block btn-secondary btn-lg" type="submit" value="Entrar">
                                </div>
                                <div class="col-md-6 ">
                                    <input class="btn btn-block btn-outline-secondary btn-lg" type="button" value="Cadastrar">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php require 'view/footer.php'; ?>
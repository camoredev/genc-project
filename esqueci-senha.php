<?php require 'view/header.php'; ?>
  

  <body id="login">

    <section class="d-flex">

        <div class="container align-self-center">
            
            <div class="row">

                <div class="col-md-6 logo-login"> <!--Sessão de Logo-->
                        <a href=""><img src="imagens/logotipo.png" class="img-fluid" alt=""></a>    
                </div>

                <div class="col-md-6 box-login"> <!--coluna de formulário de Cadastro-->
                   
                    <div class="form-group p-4">
                       
                        <div><!--titulo de cadastro-->
                            <h1 class="text-center"> 
                                <strong>Balson</strong>
                            </h1>
                            <p class="text-center">Infrome seu e-mail de cadastro para redefinir senha.</p>
                        </div>

                        <form action=""><!--Sessão de cadastro-->
                            
                            <div class="form-group ">
                                <input class="form-control" type="email" name="email" id="email_senha" placeholder="E-mail">
                            </div>

                            <div class="form-group mt-3">
                                <input class="btn btn-secondary btn-block btn-lg " type="button" value="Nova Senha">
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </section>

<?php require 'view/footer.php'; ?>
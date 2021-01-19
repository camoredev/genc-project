
<!-- Cabeçalho -->
<?php require 'view/header.php' ?>
<?php require 'session.php'; ?>
  
<body>

<div class="d-flex" id="wrapper">

<!-- Menu lateral -->
<?php require 'view/aside.php' ?>

<!-- Menu superior -->
<?php require 'view/nav-superior.php' ?>

<?php require_once 'controller/controller-demanda.php'; ?>

      <h2>Demandas</h2>

      <div class="conteudo demandas">


       <div class="row">
         
        <div class="col-3">
          <?php require 'view/menu-demandas.php' ?>
        </div>

        <form class="col" id="nova-demanda" action="" method="">
          <h3>Nova Demanda</h3>
          <div class="row">
            <div class="form-group col-9">
              <label for="demanda_titulo">Título</label>
              <input type="text" class="form-control" id="demanda_titulo" placeholder="Nome demanda">
            </div>
          </div>

          <div class="row">
              <div class="form-group col-3">
              <label for="demanda_inicio">Início </label>
              <input type="date" class="form-control" id="demanda_inicio" >
            </div>
            <div class="form-group col-3">
              <label for="demanda_final">Final</label>
              <input type="date" class="form-control" id="demanda_final" >
            </div>
            <div class="form-group col-3">
              <label for="demanda_tipo">Tipo</label>
              <select class="form-control" id="demanda_tipo">
              <?php $controller = new ControllerDemanda();
                    $controller->ImprimirTipos();
               ?>
               </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-9">
              <label for="descricaoDemanda">Descrição</label>
              <textarea class="form-control" id="descricaoDemanda" rows="3"></textarea>
            </div>
          </div> 
          
          <div class="row">
            
            <div class="accordion col-9" id="accordionExample">
              
              <div>
                
                <div class="card-header" id="acordion_produto">
                    <a class="btn" data-toggle="collapse" data-target="#primeiroCollapse" aria-expanded="true" aria-controls="primeiroCollapse">
                      <span>Produto + </span>
                    </a>
                </div>

                <div id="primeiroCollapse" class="collapse show" aria-labelledby="acordion_produto" data-parent="#accordionExample">
               
                  <div class="card-body">
                      
                     <div class="row" id="div_produto">
                      <div class="form-group col-4">
                        <label for="produto_titulo">Título</label>
                        <input type="text" class="form-control" id="produto_titulo" name="produto_titulo" placeholder="Título">
                      </div>

                      <div class="form-group col-2">
                          <label for="produto_quantidade">Qtd</label>
                          <input type="number" class="form-control" id="produto_quantidade" name="produto_quantidade" placeholder="0">
                      </div>
                      <div class="form-group col-6">
                        <label for="produto_descricao">Descrição</label>
                        <input type="text" class="form-control" id="produto_descricao" name="produto_descricao" placeholder="Descrição ">
                      </div>
                     </div>

                     <button type="button" class="btn btn-primary" id="produto-novo">Adicionar</button>

                  </div>

                </div>

              </div>

              <div>
               
                <div class="card-header" id="acordion_servico">
                    <a class="btn collapsed" data-toggle="collapse" data-target="#segundoCollapse" aria-expanded="false" aria-controls="segundoCollapse">
                       <span>Serviço +</span>
                    </a>
                </div>

                <div id="segundoCollapse" class="collapse" aria-labelledby="acordion_servico" data-parent="#accordionExample">
                  
                  <div class="card-body">

                    <div class="row" id="div_servico">
                      <div class="form-group col-4">
                        <label for="servico_titulo">Título</label>
                        <input type="text" class="form-control" id="servico_titulo" name="servico_titulo" placeholder="Título Serviço">
                      </div>

                      <div class="form-group col-8">
                       <label for="servico_descricao">Descrição</label>
                        <input type="text" class="form-control" id="servico_descricao" name="servico_descricao" placeholder="Descrição Serviço">
                      </div>
                    </div>

                    <button type="button" class="btn btn-primary" id="servico-novo">Adicionar</button>

                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="row anexo">
            <div class="form-group">
              <input type="file" class="form-control-file" id="demanda_anexo">
            </div>
          </div> 
          

          <div class="col-9">

            <div class="row btn-grupo">
              <button type="button" class="btn btn-outline-primary">Cancelar</button>
              <button type="button" class="btn btn-primary" onclick="RecebeDemanda();">Cadastrar</button>
            </div>
          </div>

        </form>

       </div>  

      </div>
      
<?php require 'view/footer.php'?>


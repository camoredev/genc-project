
<!-- Cabeçalho -->
<?php require 'view/header.php' ?>
<?php require 'session.php'; ?>

<body>
	
	<div class="d-flex" id="wrapper">

		<!-- Menu lateral -->
		<?php require 'view/aside.php' ?>

		<!-- Menu superior -->
		<?php require 'view/nav-superior.php' ?>

		<h2>Demandas</h2>

		<div class="conteudo demandas">


			<div class="row">

				<div class="col-3">
					<?php require 'view/menu-demandas.php' ?>
				</div>

				<section class="col-9">
					<h3 id="demanda_titulo">Titulo Demanda</h3>
					<div>
						<ul>
							<li>Criação: <span id="demanda_inicio"> data inicial</span></li>
							<li>Validade: <span id="demanda_final">data final</span></li>
							<li>Demanda: <span id="demanda_id">numeração demanda</span></li>
						</ul>
					</div>

					<div class="">

						<h4>Descrição</h4>
						<div>
							<p id="demanda_descricao">
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
							</p>

							<table>
								<tr>
									<th>Cod.</th>
									<th>Item</th>
									<th>Descrição</th>
									<th>Quantidade</th>
									<th>Preço</th>
								</tr>
								<tr>
									<td>001</td>
									<td>Item 01</td>
									<td>Lorem Ipsum as their default model text</td>
									<td>10</td>
									<td>R$ 100,00</td>
								</tr>
							</table>

							<div>
								<h4>Total: <span id="demanda-valor">300,00</span></h4>
							</div>
						</div>
					</div>
				</section>

			</div>  

		</div>

		<?php require 'view/footer.php'?>



<!-- Cabeçalho -->
<?php require 'view/header.php' ?>
<?php require 'session.php'; ?>

<body>
	
	<div class="d-flex" id="wrapper">


		<!-- Menu lateral -->
		<?php require 'view/aside.php' ?>

		<!-- Menu superior -->
		<?php require 'view/nav-superior.php' ?>

		<h2>Início</h2>

		<div class="conteudo demandas">


			<div class="row">

				<div class="col-3">
				<?php require 'view/menu-demandas.php' ?>
				</div>
			</div>  

		</div>


<?php require 'view/footer.php'?>


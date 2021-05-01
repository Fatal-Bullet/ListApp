<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Contato </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="endereco" id="endereco">
				<label for="endereco">Endereço</label>
			</div>

			<div class="input-field col s12">
				<input type="email" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="contato" id="contato" ><!--class="telefone"-->
				<label for="contato">Contato</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn purple darken-4"> Cadastrar </button>
			<a href="index.php" class="btn purple darken-3"> Lista de contatos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

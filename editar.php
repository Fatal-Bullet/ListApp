<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Contato </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="endereco" value="<?php echo $dados['endereco'];?>" id="endereco">
				<label for="endereco">Endereço</label>
			</div>

			<div class="input-field col s12">
				<input type="email" value="<?php echo $dados['email'];?>" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['contato'];?>" name="contato" id="contato" ><!--class="telefone"-->
				<label for="contato">Contato</label>
			</div>

			<button type="submit" name="btn-editar" class="btn purple darken-4"> Atualizar</button>
			<a href="index.php" class="btn purple darken-3"> Lista de contatos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Contatos </h3>
		<table class="highlight">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Endereço:</th>
					<th>Email:</th>
					<th>Contato:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['endereco']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['contato']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn grey lighten-1">edit</a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn purple darken-3 modal-trigger">delete</a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $dados['id']; ?>" class="modal blue-grey lighten-5">
					    <div class="modal-content">
					      <h4 class="blue-text">Opa!</h4>
					      <p class="blue-text">Tem certeza que deseja excluir esse Contato?</p>
					    </div>
					    <div class="modal-footer blue-grey lighten-5">					     

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn purple darken-3">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect blue-grey darken-3 btn-flat white-text">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn purple darken-3">Adicionar Contato</a>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>


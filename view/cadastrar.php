<?php
include "cabec.php";

?>
	<article>
		<form method="POST" action="#"  id="cadastro">
			<h2>Cadastro:</h2>
			<input type="hidden" name="id" />
			<p>
			<label>Nome:</label>
			<input type="text" name="nome"/>
			</p>
			<p><label>E-mail:</label>
			<input type="email" name="email"/>
			</p>
			<p><label>Senha:</label>
			<input type="password" name="senha"/>
			</p>
			<p>
				<input type="submit" name="salvar" value="Salvar"/> 
			</p>
			
		</form>
	</article>
 <?php
include"rodape.html";
?>
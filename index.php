<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário de Contato</title>
	<link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
	<section class="section">
		<div class="container">
			<div class="colums is-centered">
				<div class="colums is-half">
					<h1 class="title has-text-centered">Formulário de Contato</h1>

					<form action="enviar.php" method="POST">
						<div class="field">
							<label class="label">NOME</label>
							<div class="control">
								<input name="nome" class="input" type="text" placeholder="seu nome">
							</div>
						</div>
						<div class="field">
							<label class="label">E-MAIL</label>
							<div class="control">
								<input name="email" class="input" type="email" placeholder="seu email">
							</div>
						</div>
						<div class="field">
							<label class="label">ASSUNTO</label>
							<div class="select is-fullwidth">
								<select name="assunto">
									<option>Reportar Erro</option>
									<option>Anúncio</option>
									<option>Outro</option>									
								</select>								
							</div>
						</div>
						<div class="field">
							<label class="label">MENSAGEM*</label>
							<div class="control">
								<textarea name="mensagem" class="textarea" placeholder="deixe sua mensagem" maxlength="2000"></textarea>
							</div>
						</div>
						<div class="field is-grouped">
							<div class="control">
								<button class="button is-link is-small">ENVIAR</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>

</body>
</html>
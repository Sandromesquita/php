<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gerenciador de Tarefas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	
		<h1>Gerenciador de Tarefas</h1>
		<div id="area">
			<form id="formulario">
				<fieldset><!--O elemento HTML <fieldset> é usado para agrupar elementos, assim como labels (<label>), dentro de um formulário web.-->
					<legend>Nova Tarefa</legend>
					<label>
						Tarefa:
						<input type="text" name="nome" width="800" />
					</label>
					<input type="submit" value="Cadastrar">
				</fieldset>
			</form>
			<?php
				$lista_tarefas = [];
				if(array_key_exists(@nome, $_GET)){
					$_SESSION[@lista_tarefas][] = $_GET[@nome];
					//$lista_tarefas[] = $_GET[@nome];
					//echo "Nome informado: ".$_GET[@nome];
				}
				$lista_tarefas = [];
				if (array_key_exists(@lista_tarefas, $_SESSION)) {
					$lista_tarefas = $_SESSION[@lista_tarefas];
				}
			?>

			<table>
				<tr>
					<th>Tarefas</th>
				</tr>
				<?php foreach ($lista_tarefas as $Tarefa): ?>
					<tr>
						<td><?php echo "$Tarefa"; ?></td>
					</tr>
				<?php endforeach; ?>
				
			</table>
		</div>
		
</body>
</html>
<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Importar TXT</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<!-- IMPORTAR TXT -->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<a href="index.php"><img src="assets/img/icon_file.png" class="brand_logo" alt="Logo"></a>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<form action="processa.php" method="post" enctype="multipart/form-data">
						<!-- ARQUIVO -->
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-file"></i></span>
							</div>
							<input type="file" name="arquivo" class="form-control input_user" value="" placeholder="Escolha o arquivo" required>
						</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="enviar" class="btn login_btn">Importar arquivo</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Watch</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
	
	<script src="https://kit.fontawesome.com/5e6e4af9c8.js" crossorigin="anonymous"></script>
	
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg bg-custom-nav" style="min-height: 54px;">
  <div class="container-fluid">
  
	<!--LOGO-->
	<div class="position-absolute top-50 start-50 translate-middle p-3 d-flex">
		<img src="assets/img/logo-invertida.png" alt="Logo" width="40" height="34">
		<div class="txt-main-nav">Fall Guard</div>
	</div>

</nav>

@yield("conteudo")

</body>
</html>
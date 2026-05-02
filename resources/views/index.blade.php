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
<nav class="navbar navbar-expand-lg bg-custom-nav">
  <div class="container-fluid">
  
	<!--MENU-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa-solid fa-bars fa-xl" style="color: rgb(255, 255, 255);"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn text-light bg-custom-nav dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fa-solid fa-bars fa-xl" style="color: rgb(255, 255, 255);"></i>
          </button>
          <ul class="dropdown-menu bg-custom-nav">
            <li><a class="dropdown-item txt-small-nav" href="#">Home</a></li>
            <li><a class="dropdown-item txt-small-nav" href="#">Idoso</a></li>
            <li><a class="dropdown-item txt-small-nav" href="#">Cuidador</a></li>
            <li><a class="dropdown-item txt-small-nav" href="#">Pulseira</a></li>
            <li><a class="dropdown-item txt-small-nav" href="#">Relatórios</a></li>
            <li><a class="dropdown-item txt-small-nav" href="#">Configurações</a></li>
          </ul>
        </li>
      </ul>
    </div>
	
	<!--LOGO-->
	<div class="position-absolute top-50 start-50 translate-middle p-3 d-flex">
		<img src="assets/img/logo-invertida.png" alt="Logo" width="40" height="34">
		<div class="txt-main-nav">Fall Guard</div>
	</div>
	
	<!--CONTA-->
	<div>
		<i class="fa-regular fa-circle-user fa-xl" style="color: rgb(255, 255, 255);"></i>
	</div>
  </div>
</nav>

@yield("conteudo")

</body>
</html>
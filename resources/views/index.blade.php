<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Safe Watch</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css"/>
	
	<script src="https://kit.fontawesome.com/5e6e4af9c8.js" crossorigin="anonymous"></script>
	
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
<script src="/assets/js/ajuda.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-custom-nav" style="min-height: 68px;">
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
            <li><a class="dropdown-item txt-small-nav" href="home">Home</a></li>
            <li><a class="dropdown-item txt-small-nav" href="idoso">Idoso</a></li>
            <li><a class="dropdown-item txt-small-nav" href="cuidador">Cuidador</a></li>
            <li><a class="dropdown-item txt-small-nav" href="pulseiras">Pulseira</a></li>
            <li><a class="dropdown-item txt-small-nav" href="relatorios">Relatórios</a></li>
            <li><a class="dropdown-item txt-small-nav" href="configuracoes">Configurações</a></li>
          </ul>
        </li>
      </ul>
    </div>
	
	<!--LOGO-->
	<div class="position-absolute top-50 start-50 translate-middle p-3 d-flex">
		<img src="assets/img/logo-nova.png" alt="Logo" width="180" height="70">
	</div>
	
	<!--CONTA-->
	<div>
    <a href="notificacoesLista"><i class="fa-solid fa-bell fa-2x icon icon:hover" style="color: rgb(255, 255, 255);"></i></a>
		<a href="perfil"><i class="fa-regular fa-circle-user fa-2x icon icon:hover" style="color: rgb(255, 255, 255);"></i></a>
	</div>
</nav>

@yield("conteudo")

</body>
</html>
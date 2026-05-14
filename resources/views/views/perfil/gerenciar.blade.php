@extends("index")

@section("conteudo")
<div class="container mt-4">

<h5 class="txt-main mb-3">Gerenciar contas</h5>

<div class="card p-3 shadow mb-3">
    <p class="txt-main">Conta Principal</p>
    <button class="btn btn-outline-danger btn-sm">Remover conta</button>
</div>

<div class="card p-3 shadow mb-3">
    <p class="txt-main">Conta Cuidador</p>
    <button class="btn btn-outline-warning btn-sm">Desativar</button>
</div>

<a href="/perfil" class="btn btn-outline-secondary btn-sm">Voltar</a>

</div>
@endsection 
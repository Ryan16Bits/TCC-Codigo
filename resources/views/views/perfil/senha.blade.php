@extends("index")

@section("conteudo")
<div class="container mt-4">

<h5 class="txt-main mb-3">Alterar senha</h5>

<div class="card p-4 shadow">

    <input type="password" class="form-control mb-2" placeholder="Senha atual">

    <input type="password" class="form-control mb-2" placeholder="Nova senha">

    <input type="password" class="form-control mb-3" placeholder="Confirmar nova senha">

    <a href="#" class="txt-small">Esqueceu a senha?</a>

    <button class="btn btn-custom w-100 mt-3">Alterar senha</button>

</div>

<a href="/perfil" class="btn btn-outline-secondary btn-sm mt-3">Voltar</a>

</div>
@endsection
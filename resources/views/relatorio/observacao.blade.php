@extends("index")

@section("conteudo")
<div class="container mt-4">

    <h5 class="mb-3 txt-main">Adicionar Observação</h5>

    <div class="card shadow p-4">

        <div class="mb-3">
            <label class="form-label">Data</label>
            <input type="text" class="form-control" value="25/04/2026 - 14:32" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Observação</label>
            <textarea class="form-control" rows="4" placeholder="Descreva o ocorrido..."></textarea>
        </div>

        <button class="btn btn-custom w-100">Salvar</button>

    </div>

</div>
@endsection
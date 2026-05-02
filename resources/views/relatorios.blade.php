@extends("index")
@section("conteudo")
<div class="container mt-5">

    <h2 class="txt-main mb-4">Relatórios de Quedas</h2>

    <!-- TABELA -->
    <div class="card shadow p-4 mb-4">
        <h5 class="mb-3">Histórico de Quedas</h5>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data da Queda</th>
                    <th>Observação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>25/04/2026 - 14:32</td>
                    <td>Queda leve no quarto</td>
                </tr>
                <tr>
                    <td>20/04/2026 - 09:10</td>
                    <td>Escorregou no banheiro</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- FORM -->
    <div class="card shadow p-4 mb-4">
        <h5 class="mb-3">Adicionar Observação</h5>

        <form>
            <div class="mb-3">
                <label class="form-label">Data da Queda</label>
                <input type="datetime-local" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Observação</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>

            <button class="btn btn-custom">Salvar</button>
        </form>
    </div>

    <!-- ACELERÔMETRO -->
    <div class="card shadow p-4 text-center">
        <h5 class="mb-3">Dados do Acelerômetro</h5>

        <p class="txt-small">Última leitura:</p>

        <h4>X: 0.98</h4>
        <h4>Y: 1.12</h4>
        <h4>Z: 0.76</h4>

        <p class="text-danger mt-3">Movimento brusco detectado</p>
    </div>

</div>
@endsection 
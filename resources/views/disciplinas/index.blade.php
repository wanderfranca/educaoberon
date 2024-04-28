<x-layout title="Gerenciador de Provas">

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-success btn-sm" type="button"><i class="fa phpdebugbar-fa-plus"></i> Nova Disciplina</button>
    </div>
    <div class="mt-3 card container">
        <div class="row">
            <div class="col p-3">
            <table class="table table-sm table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Qtde. Questões</th>
                    <th scope="col">Gerar Prova</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Ger. Questões</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            @foreach ($disciplinas as $disciplina)
            <tbody>
            <tr>
                <td class="">{{ $disciplina->nome_disciplina }}</td>
                <td>20</td>
                <td><button class="btn" href=""><i class="fa fa-gear"></i></button></td>
                <td><button class="btn" href=""><i class="fa fa-edit"></i></button></td>
                <td><button class="btn" href=""><i class="fa fa-list"></i></button></td>
                <td><button class="btn" href=""><i class="fa fa-trash text-danger"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    </div>
</x-layout>

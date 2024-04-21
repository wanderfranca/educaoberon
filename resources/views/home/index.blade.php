<x-layout title="Gerenciador de Provas">

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button class="btn btn-success btn-sm" type="button">+ Nova categoria de ensino</button>
</div>

    <div class="mt-3 card container">
        <div class="row">
            <div class="col p-3">
        <table class="table table-sm table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Categoria de ensino</th>
                    <th scope="col">Qtde. Cursos</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Gerenciar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            @foreach ($cursos as $categoria)
            <tbody>
            <tr>
                <td class=""><a href="{{ route('cursos.index', $categoria->categoria_id) }}">{{ $categoria->nome_categoria }}</td>
                <td>{{ $categoria->qtd_cursos }}</td>
                <td><button class="btn" href=""><i class="fa fa-edit"></i></button></td>
                <td><button class="btn" href=""><i class="fa fa-gear"></i></button></td>
                <td><button class="btn" href=""><i class="fa fa-trash text-danger"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    </div>
</x-layout>

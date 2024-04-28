<x-layout title="Gerenciador de Provas">
    <h3>Gerador de provas</h3>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-success btn-sm" type="button"><i class="fa phpdebugbar-fa-plus"></i> Nova categoria de ensino</button>
    </div>

    <div class="mt-3 card container">
        <div class="row">
            <div class="col p-3">
                <table class="table table-sm table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Categoria de ensino</th>
                            <th class="col-sm-1 text-center">Qtde. Cursos</th>
                            <th class="col-sm-1 text-center">Editar</th>
                            <th class="col-sm-1 text-center">Gerenciar</th>
                            <th class="col-sm-1 text-center">Excluir</th>
                        </tr>
                    </thead>
                    @foreach ($cursos as $categoria)
                        <tr>
                            <td class=""><a href="{{ route('cursos.index', $categoria->categoria_id) }}">{{ $categoria->nome_categoria }}</td>
                            <td class="text-center">{{ $categoria->qtd_cursos }}</td>
                            <td class="text-center"><a class="btn" href="#"><i class="fa fa-edit"></i></a></td>
                            <td class="text-center"><a class="btn" href="#"><i class="fa fa-gear"></i></a></td>
                            <td class="text-center"><a class="btn" href="#"><i class="fa fa-trash text-danger"></i></a></td>
                        </tr>
                        @endforeach
                </table>

                <div class="py-2" style="">
                    {{ $cursos->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </div>

    </div>


</x-layout>

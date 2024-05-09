<x-layout title="Gerenciador de Provas">
    <h3>{{ $disciplina->nome_disciplina }}</h3>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm" type="button"><i class="fa phpdebugbar-fa-arrow-left"></i> Voltar</a>
        <a href="#" class="btn btn-success btn-sm" type="button"><i class="fa fa-plus"></i> Novo curso</a>
    </div>

    <div class="mt-3 card container">
        <div class="row">
            <div class="col p-3">
                <table class="table table-sm table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Pergunta</th>
                            <th class="col-sm-1 text-center">Tipo</th>
                            <th class="col-sm-1 text-center">Editar</th>
                            <th class="col-sm-1 text-center">Excluir</th>
                        </tr>
                    </thead>
                    @foreach($questoes as $questao)
                    <tbody>
                        <tr>
                            <td class=""><strong>{!! $questao->pergunta !!}</strong></td>
                            <td class="">{{ $questao->tipo }}</td>
                            <td class="text-center"><a href="#" class="btn"><i class="fa fa-edit text-center"></i></a></td>
                            <td class="text-center"><a href="#" class="btn"><i class="fa fa-trash text-danger text-center"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="py-2" style="">
                    {{ $questoes->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid mt-5 gap-2 d-md-flex justify-content-md-end">

    </div>
</x-layout>

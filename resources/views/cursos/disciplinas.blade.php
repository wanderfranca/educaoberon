<x-layout title="Disciplinas">
    <h3>Disciplinas</h3>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm" type="button"><i class="fa phpdebugbar-fa-arrow-left"></i> Voltar</a>
        <a href="/" class="btn btn-success btn-sm" type="button"><i class="fa fa-plus"></i> Nova Disciplina</a>
    </div>
    <div class="mt-3 card container">
        <div class="row">
            <div class="col p-3">
                <table class="table table-sm table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="">Disciplina</th>
                            <th class="col-sm-1 text-center">Qtde. Questões</th>
                            <th class="col-sm-1 text-center">Gerar Prova</th>
                            <th class="col-sm-1 text-center">Editar</th>
                            <th class="col-sm-1 text-center">Ger. Questões</th>
                            <th class="col-sm-1 text-center">Excluir</th>
                        </tr>
                    </thead>
                    @foreach ($disciplinas as $disciplina)
                    <tbody>
                        <tr>
                            <td class=""><a href="{{ route('disciplinas.questoes', $disciplina->id) }}">{{ $disciplina->nome_disciplina }}</a></td>
                            <td class="text-center">{{ ($disciplina->questoes_count)? $disciplina->questoes_count : '0' }}</td>
                            <td class="text-center"><a class="btn" href="#"><i class="fa fa-gear"></i></a></td>
                            <td class="text-center"><a class="btn" href="#"><i class="fa fa-edit"></i></a></td>
                            <td class="text-center"><a class="btn" href="#"><i class="fa fa-list"></i></a></td>
                            <td class="text-center"><a class="btn" href="#"><i class="fa fa-trash text-danger"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="py-2" style="">
                    {{ $disciplinas->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</x-layout>

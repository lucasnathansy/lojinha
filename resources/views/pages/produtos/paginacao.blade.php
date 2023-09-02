@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div>
        <form action="{{ route('produto.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o Nome" />
            <button type="submit">Pesquisar</button> <!-- Adicionei o type="submit" ao botão -->
            <a href="" class="btn btn-success float-end"> <!-- Corrigi a classe do botão -->
                Incluir Produto
            </a>
        </form>
        <div class="table-responsive mt-4">
            @if ($findProduto->isEmpty())
                <p>Não existe Dados</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findProduto as $produto)
                            <tr> <!-- Coloquei a tag <tr> dentro do loop -->
                                <td>{{ $produto->nome }}</td> <!-- Adicionei o '$' antes de 'produto' -->
                                <td>{{ 'R$ ' . number_format($produto->valor, 2, ',', '.') }}</td>
                                <td>
                                    <a href="" class="btn btn-light btn-sm">
                                        Editar
                                    </a>
                                    <a href=" {{('produto.delete')}}" class="btn btn-danger btn-sm">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

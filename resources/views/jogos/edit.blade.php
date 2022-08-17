@extends('layouts.app')

@section('title', 'Edição')

@section('content')
    
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <hr>
        <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method( 'PUT' )
           <div class="form-group">
                <div class="form-group">
                    <label for ="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um nome...">
                </div>

                <br>

                <div class="form-group">
                    <label for ="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}"  placeholder="Digite a categoria do jogo..">
                </div>

                <br>

                <div class="form-group">
                    <label for ="ano_lancamento">Ano:</label>
                    <input type="number" class="form-control" name="ano_lancamento" value="{{ $jogos->ano_lancamento }}"  placeholder="Digite o ano...">
                </div>

                <br>

                <div class="form-group">
                    <label for ="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite um valor...">
                </div>

                <br>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
           </div> 
        </form>
    </div>
@endsection
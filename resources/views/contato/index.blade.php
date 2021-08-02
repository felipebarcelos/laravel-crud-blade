@extends('contato.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Amar Assist - CRUD</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th><div class="pull-right">
                <a class="btn btn-success" href="{{ route('contato.create') }}"> Adicionar contato</a>
            </div></th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->nome }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->telefone }}</td>
            <td>
                <form action="{{ route('contato.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('contato.show',$value->id) }}">Mostrar</a>    
                    <a class="btn btn-primary" href="{{ route('contato.edit',$value->id) }}">Editar</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection
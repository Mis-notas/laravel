@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        @if (isset($client))
             <h1> Editar cliente </h1>
        @else
            <h1> Crear cliente </h1>
        @endif

        @if (isset($client))
            <form action="{{ route('client.update', $client ) }}" method="POST">
                @method('PUT') {{-- HTML solo permite los metodos de post & get. laravel a traves de este modificador permite cambiar esto y enviar un metodo put--}}
         @else
            <form action="{{ route('client.store') }}" method="POST">
       @endif
            @csrf {{--Directiva para autorizar el procesamiento en laravel--}}
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre del cliente" value="{{old('name') ?? @$client -> name}}"> {{-- El old es para que no se borre el contenido cuando se envia el formulario y este es erroneo--}}
                {{-- El arroba es como un metodo de escape en caso de que no exista la variable que lo deje en blanco--}}
                <p class="form-text">Escriba el nombre del cliente</p>
                @error('name')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="due" class="form-label">Saldo</label>
                <input type="number" name="due" class="form-control" placeholder="Saldo del cliente" step="0.01" value="{{old('due') ?? $client->due}}">
                <p class="form-text">Escriba el saldo del cliente</p>
                @error('due')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Comentario</label>
                <textarea name="comments" id="" cols="30" rows="4" class="form-control" >{{old('comments') ?? @$client -> comments}}</textarea>
                <p class="form-text">Escriba un comentario referente a un cliente</p>
                @error('comments')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
            @if (isset($client))
                <button type="submit" class="btn btn-info">Editar cliente</button>
            @else
                <button type="submit" class="btn btn-info">Guardar cliente</button>
            @endif

        </form>
    </div>
@endsection

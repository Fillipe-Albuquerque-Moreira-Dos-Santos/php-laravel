@extends('layout.main')

@section('title', 'Editando' . $event -> titulo)

@section('content')

    <div id="event-create-container" class="col-md-6 offset md-3">

        <h1>Editando:{{$event -> titulo}}</h1>
        <form action="/events/update/{{$event -> id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
                <img src="/img/events/{{$event -> image}}" alt="{{$event -> titulo}}" class="img-preview">
            </div>

            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do Evento" value="{{$event->titulo}}">
            </div>

            <div class="form-group">
                
        
                <label for="title">Data do Evento:</label>
                <input type="date" class="form-control" id="data" name="data" value="{{ date('Y-m-d', strtotime($event->data)) }}">
            </div>


            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe sua cidade" value= "{{$event -> cidade}}">
            </div>

            <div class="form-group">
                <label for="title">O evento é privado?:</label>
                <select name="privado" id="privado" class="form-control">
                    <option value="0"> Não</option>
                    <option value="1"{{$event -> private == 1? "'selected ='": ""}}> Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Descrição do Evento:</label>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="O que irá acontecer no evento?">{{$event -> descricao}}</textarea>
            </div>

            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>

                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Cadeiras"> Cadeiras
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Palco"> Palco
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Bebida gratis"> Bebidas gratis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="open bar"> open bar
                </div>

            </div>

            <input type="submit" class="btn btn-primary" value="Editar Evento">

        </form>
    </div>

@endsection

@extends('layout.main')

@section('title', 'Criar Eventos')

@section('content')

    <div id="event-create-container" class="col-md-6 offset md-3">

        <h1>Crie seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do Evento">
            </div>

            <div class="form-group">
                <label for="title">Data do Evento:</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>

            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe sua cidade">
            </div>

            <div class="form-group">
                <label for="title">O evento é privado?:</label>
                <select name="privado" id="privado" class="form-control">
                    <option value="0"> Não</option>
                    <option value="1"> Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Descrição do Evento:</label>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="O que irá acontecer no evento?"></textarea>
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

            <input type="submit" class="btn btn-primary" value="Criar Evento">

        </form>
    </div>

@endsection

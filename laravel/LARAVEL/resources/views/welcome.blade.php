@extends('layout.main')

@section('name', 'SISTEMA EVENTOS')

@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar...">
        </form>



    </div>

    <div id="events-container" class="col-md-12">

        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif

        
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->titulo }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/y', strtotime($event->data)) }}</p>
                        <h5 class="card-title">{{ $event->titulo }}</h5>
                        <p class="card-participantes">{{ count ($event -> users)}} participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saiba Mais...</a>

                    </div>
                </div>
            @endforeach
            @if (count($events) == 0 && $search)
                <p>Não foi possível encontrar eventos com {{$search}}! <a href="/">Ver todos</a></p>
                @elseif (count($events) == 0)
                <p>Não há eventos disponíveis</p>
            @endif
        </div>

    </div>


@endsection

@extends('html5')

@section('title','Estatuto Unicamp')


@section('content')
    @include('navbar')
    <div class="row clearfix">
        <div class="col-md-10 column">
            @foreach($items as $item)
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="panel panel-primary">
                                <a name="{{$item->id}}"></a>
                                <div class="panel-heading">
                                    <h1 class="center">
                                        {{$item->title}}
                                    </h1>
                                </div>
                                <div class="panel-body">
                                    <div class="row clearfix">
                                        <a href="post/{{$item->id}}">
                                            <div class="panel-footer center">
                                                Clique aqui para observar as propostas enviadas e os textos do estatuto
                                            </div>
                                        </a>
                                        {{-- Painel com o texto novo --}}
                                        <div class="col-md-6 column">
                                            <h3>
                                                Estatuto Vigente
                                            </h3>
                                        </div>
                                        <div class="col-md-6 column">
                                            <h3>
                                                Minuta
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 column">

                                        <p class="justified">
                                            {{ $item->novo }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-2 column">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation">
                    <h3>
                        Índice
                    </h3>
                </li>
                @foreach ($items as $item)
                    <li role="presentation">
                        <a href="#{{$item->id}}">
                            {{$item->title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop

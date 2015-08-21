@extends('html5')

@section('title', $item->title)

@section('content')

@include('navbar')

<div class="container-fluid">
    <div class="row clearfix"> {{-- Div que determina a linha atual --}}
        <div class="col-md-12 column"> {{-- Div que determina o numero de colunas no layout --}}
            <div class="panel panel-primary"> {{-- Div que contem o painel com cabeçalho e texto --}}

                {{-- Painel de cabeçalho --}}
                <div class="panel-heading">
                    <h1 class="center">
                        {{$item->title}}
                    </h1>
                </div>
                {{-- Fim do cabeçalho --}}

                {{-- Painel com as versoes do texto --}}
                <div class="panel-body">
                    <div class="row clearfix">
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
                    <div class="row clearfix">
                        <div class="col-md-12 column">


                            <p class="justified">
                                {{$item->novo}}
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Fim do painel com as versões do texto --}}

                {{-- Botao para comentario --}}

            </div> {{-- Fim da div que contem o painel e o texto --}}
        </div>{{-- Fim da div que define o numero de colunas --}}
    </div> {{-- Fim da div que determina a linha atual --}}

    <br/>
    <br/>
    {{-- Listando todas as respostas --}}
    @foreach($item->replies()->orderBy('created_at', 'DESC')->get() as $reply)
        <div class="row clearfix">
            <div class="container-fluid">
                <div class="col-md-12 column reply">
                    <h4>
                      @if ($reply->name == '')
                            {{--<small>Usu&aacute;rio:</small>--}} An&ocirc;nimo
                        @else
                            {{--<small>Nome:</small>--}}{{$reply->name}}
                        @endif
                        {{--<small>&nbsp;&nbsp;Proposta:</small>--}} - {{$reply->type}}
                    </h4>
                    {{--<h5><b>Coment&aacute;rio:</b></h5>--}}
                    <p>
                        {{$reply->content}}
                    </p>
                </div>
            </div>
        </div>
        <br/>
    @endforeach
</div>
@stop

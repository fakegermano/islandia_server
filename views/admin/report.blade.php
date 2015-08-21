@extends('admin.adminbase')

@section('title')
    {{$post->title}}
@stop

@section('content')
<body>
<div class="container-fluid">
    <div class="page-header">
    <h1 class="center font-verylarge">
        {{$post->title}}
        <small class="grey font-small">
            Comentarios:
        </small>
    </h1>
    </div>
</div>
<div class="container">
    <br/>
    <br/>
    @foreach($post->replies()->get() as $reply)
        <div class="row clearfix">
            <div class="col-md-12 column reply">
                <h4 class="margin-left">
                    {{$reply->name}}
                </h4>
                <p class="center">
                    {{$reply->content}}
                </p>
                <p class="right-align">
                    {{$reply->created_at}}
                </p>
            </div>
        </div>
        <br/>
    @endforeach
</div>
</body>
@stop

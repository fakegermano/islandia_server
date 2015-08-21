@extends('admin.adminbase')
@section('title')
    Admin
@stop
@section('body')
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h1 class="center">
                {{$post->title}}
            </h1>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>
                        Usuário
                    </th>
                    <th>
                        Conteúdo
                    </th>
                    <th>
                        Data
                    </th>
                    <th>
                        Ação
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($post->replies()->get() as $reply)
                <tr>
                    <td>
                      @if ($reply->name == '')
                        An&ocirc;nimo
                      @else
                        {{$reply->name}}
                      @endif
                    </td>
                    <td>
                        {{ $reply->content }}
                    </td>
                    <td>
                        {{ $reply->updated_at }}
                    </td>
                    <td>
                        @if(get_class($reply)=='Reply')
                            <a href="{{ url('admin/block/reply/'.$reply->id) }}">
                                <button class="btn btn-danger btn-md">Bloquear</button></a>
                        @else
                            <a href="{{ url('admin/block/comment/'.$reply->id) }}">
                                <button class="btn btn-danger btn-md">Bloquear</button></a>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

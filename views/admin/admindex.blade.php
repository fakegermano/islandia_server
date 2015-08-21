@extends('admin.adminbase')
@section('title')
    Admin
@stop
@section('body')
	<div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>
                      Capítulos
                    </th>
                    <th>
                    	Ação
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        <a href="admin/block/{{$post->id}}">
                                <button class="btn btn-primary btn-md">Ver Propostas</button>
                        </a>
                        <a href="admin/relatorio/{{$post->id}}">
                                <button class="btn btn-primary btn-md">Gerar Relatorio</button>
                        </a>
                        <a href="admin/verrelatorio/{{$post->id}}">
                                <button class="btn btn-primary btn-md">Ver Relatorio</button>
                        </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

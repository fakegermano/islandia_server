@extends('html5')

@section('title')
@stop

@section('content')
		<div class="row clearfix">
            <div class="col-md-4 column">
                <nav class="navbar navbar-default" role="navigation">
                    <a href="logout">
                        <div class="center navbar-link navbar-brand">
                            Sair
                        </div>
                    </a>
                </nav>
            </div>
            <div class="col-md-8 column">
                <nav class="navbar navbar-default" role="navigation">
                    <a href="/estatuto/admin">
	                    <div class="center navbar-link navbar-brand">
	                        Interface de Administração
	                    </div>
                    </a>
                </nav>
            </div>
        </div>
	@yield('body')
@stop

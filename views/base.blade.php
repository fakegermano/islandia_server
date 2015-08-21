<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <title>Bootstrap 3, from LayoutIt!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Conpec">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('bootstrap/css/style.css') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{ HTML::script('boostrap/js/html5shiv.js') }}
    <![endif]-->

    <!-- Fav and touch icons -->
    {{ HTML::link('bootstrap/img/apple-touch-icon-144-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144')) }}
    {{ HTML::link('bootstrap/img/apple-touch-icon-114-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114')) }}
    {{ HTML::link('bootstrap/img/apple-touch-icon-72-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72')) }}
    {{ HTML::link('bootstrap/img/apple-touch-icon-57-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed')) }}
    {{ HTML::link('bootstrap/img/favicon.png', '', array('rel' => 'shortcut icon')) }}

    {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('bootstrap/js/scripts.js') }}
</head>

@yield('stuff')

</html>

@extends('0')

@section('title')
@stop

@section('all')
<div class="container">

    @yield('body')
</div>
@stop
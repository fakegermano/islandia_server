@extends('base')
@section('title')
    Admin
@stop
@section('body')
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Login
                </h3>
            </div>
            <div class="panel-body">
            <form role="form">
                <div class="form-group">
                    <label>Title</label><input class="form-control"type="text" />
                </div>
                <div class="form-group">
                    <label>Content</label><input class="form-control" type="text" />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            </div>
            <div class="panel-footer">
            </div>
        </div>
    </div>
@stop
@extends('layouts.app')
@section('content')
    <div class="container">
        @if(auth()->check())
            <a href="/store/1/product/create"
            class="btn btn-primary pull-right">
                Add new product
            </a>

        @endif
    </div>
@stop

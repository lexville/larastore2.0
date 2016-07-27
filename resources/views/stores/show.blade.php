@extends('layouts.app')
@section('content')
    <div class="container">
        @if(auth()->check())
            <a href="/store/{{ $store->store_name }}/product/create"
            class="btn btn-primary pull-right">
                Add new product
            </a>

        @endif
    </div>
@stop

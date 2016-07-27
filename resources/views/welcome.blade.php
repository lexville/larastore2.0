@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->check())
        <a href="#" class="btn btn-primary pull-right">Add new store</a>
    @endif
</div>
@endsection

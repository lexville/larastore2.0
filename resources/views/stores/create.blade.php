@extends('layouts.app')
@section('title')
Larastore | Create store
@stop
@section('content')
    <div class="container">
        @if (count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>Add New Store</h2>
        {!! Form::open(array('route' => 'stores.create', 'method' => 'POST')) !!}

        <div class="form-group">
            {!! Form::label('store_name', 'Store Name:', ['class' => 'control-label']) !!}
            {!! Form::text('store_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('store_description', 'Store Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('store_description', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Create Store', ['class' => 'btn btn-raised btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@stop

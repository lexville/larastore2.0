@extends('layouts.app')
@section('content')
    <div class="container">
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
        {!! Form::submit('Create Store', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@stop

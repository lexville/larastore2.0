@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/"
        class="btn btn-primary pull-right">
            Back to stores
        </a>
        @if (count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>Add New Product</h2>
        {!! Form::open(array('route' => ['products.create', $store->id], 'method' => 'POST')) !!}

        <div class="form-group">
            {!! Form::label('product_name', 'Product Name:', ['class' => 'control-label']) !!}
            {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('product_description', 'Product Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('product_description', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Create product', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@stop

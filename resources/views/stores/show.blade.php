@extends('layouts.app')
@section('title')
Larastore | Show store
@stop
@section('content')
    <div class="container">
        @if(auth()->check())
            <a href="/store/{{ $store->store_name }}/product/create"
            class="btn btn-raised btn-primary pull-right">
                Add new product
            </a>
        @endif
        @if(count($allProducts) > 0)
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($allProducts as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_description}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
             {{ $allProducts->render() }}
        @else
    </div>
    <div class="well text-center" style="margin: 50px;">
        Sorry you this store has no products
    </div>
    @endif

@stop

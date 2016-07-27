@extends('layouts.app')
@section('content')
    <div class="container">
        @if(auth()->check())
            <a href="/store/{{ $store->store_name }}/product/create"
            class="btn btn-primary pull-right">
                Add new product
            </a>
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
                        <td><a href="#">{{ $product->product_name }}</a></td>
                        <td>{{ $product->product_description}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
        @endif
    </div>
@stop

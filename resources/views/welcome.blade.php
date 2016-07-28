@extends('layouts.app')

@section('title')
Larastore | Home
@stop

@section('content')
<div class="container">
    @if(auth()->check())
    <a href="/store/create" class="btn btn-raised btn-primary pull-right">Add new store</a>
        @if(count($allStores) > 0)
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Store Name</th>
                    <th>Store Description</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($allStores as $store)
                    <tr>
                        <td><a href="/store/{{ $store->store_name }}/">{{ $store->store_name }}</a></td>
                        <td>{{ $store->store_description}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
             {{ $allStores->render() }}
        @else
            <div class="well text-center" style="margin: 50px;">
                Sorry you this store has no products
            </div>
         @endif
    @endif
</div>
@endsection

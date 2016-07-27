@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->check())
        <a href="/store/create" class="btn btn-primary pull-right">Add new store</a>
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
                    <td><a href="/store/{{ $store->id }}/">{{ $store->store_name }}</a></td>
                    <td>{{ $store->store_description}}</td>
                </tr>
                @endforeach
            </tbody>
         </table>
         {{ $allStores->render() }}
    @endif
</div>
@endsection

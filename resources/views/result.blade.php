@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="text-center">Products List For {{ $products[0]->city->city }}</h3>    
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead class="text-center">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Details</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($products as $product )
                <tr>
                    <td> {{ $product->name }} </td>
                    <td> {{ $product->price }} </td>
                    <td> {{ $product->details }} </td>
                    <td> {{ $product->city->city }} </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
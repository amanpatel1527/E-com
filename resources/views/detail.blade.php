@extends('master')
@section('content')
    <div class="container">
        <div class="row">

            {{-- This div is for showing image from the database with id --}}
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>

            {{-- This div is for showing the details of product from the database --}}
            <div class="col-sm-6">
                <button class="btn btn-success"><a style="text-decoration: none; color:black;" href="/"  >Go Back</a></button>
                <h2>{{ $product['name'] }}</h2>
                <h3>Price: {{ $product['price'] }}</h3>
                <h4>Details: {{ $product['description'] }}</h4>
                <h4>Category: {{ $product['category'] }}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                    <button class="btn btn-primary">Add to Cart</button>

                </form>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection

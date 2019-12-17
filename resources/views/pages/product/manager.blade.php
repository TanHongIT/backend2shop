<?php 
    use App\Product;
    $products = Product::paginate(6);
?>

@extends('layouts.app')


@section('content')

<div class="album py-5 bg-light">
    <div class="container">
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md"><h1>Product Manager</h1></div>
        <div class="col-md"></div>
        
    </div>
      <a href="{{ route('product.create') }}" class="btn btn-primary">Tạo Sản Phẩm Mới</a> <br><br>
        @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        <div class="row">
            
            @foreach($products as $item)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <p><a href="{{ route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html' }}">{{ $item->product_name }}</a></p>

                    <p class="card-text">{{ mb_substr($item->product_description,0, 100) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('product.destroy', $item->id) }}" method="post" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            @endforeach

        </div>
        {{$products->links()}}
    </div>
</div>
@endsection

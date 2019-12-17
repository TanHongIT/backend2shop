@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a Product</h1>
{{-- xuất thông báo add thành công / thất bại --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            {{-- $errors->all() lấy ra tất cả các lỗi đưa vào mảng 
                all() trả về tất cả vào một mảng --}}
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        {{-- tránh giả mạo yêu cầu giữa các trang web --}}
        @csrf
        <div class="form-group">
            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name">
        </div>
        <div class="form-group">
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product Price">
        </div>
        <div class="form-group">
            <input type="text" name="product_promotion_pricre" id="product_promotion_pricre" class="form-control" placeholder="Product Promotion Price">
        </div>
        <div class="form-group">
            <textarea type="text" name="product_description" id="product_description" class="form-control" placeholder="Product Description"></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="product_image" id="product_image" class="form-control" placeholder="Product Image">
        </div>

        <div class="form-group">
            @foreach ($categories as $category)
            <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="category_id[]" id="category_id" value="{{$category->id}}">
                      {{$category->category_name}}
                    </label>
                  </div>
            @endforeach
            
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
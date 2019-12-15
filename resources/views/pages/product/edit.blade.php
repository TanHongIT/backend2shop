@extends('layouts.default')

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

    <form action="{{ route('product.update',$item->id) }}" method="post" enctype="multipart/form-data">
        {{-- tránh giả mạo yêu cầu giữa các trang web --}}
        @csrf
        {{-- thêm method được hỗ trợ bởi laravel -> chuyển method từ post->patch  --}}
        @method('PATCH')
        <div class="form-group">
            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" value="{{ $item->product_name }}">
        </div>
        <div class="form-group">
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product Price" value="{{ $item->product_price }}">
        </div>
        <div class="form-group">
            <textarea type="text" name="product_description" id="product_description" class="form-control" placeholder="Product Description">{{ $item->product_description }}</textarea>
        </div>
        <div class="form-group">
            <input type="file" name="product_image" id="product_image" class="form-control" placeholder="Product Image">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection
@extends('layouts.default')


@section('content')


<div class="album py-5 bg-light">
    <div class="container">
        <h2>Danh Sách Sản Phẩm</h2><br>
        @if(session()->get('success')){{-- kiểm tra biến success tồn tại --}}
            <div class="alert alert-success">
                {{-- xuất ra thông báo thông báo thông qua session --}}
                {{session()->get('success')}}
            </div>
        @endif

        <div class="row">
            
            @foreach($products as $item)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    {{-- php artisan storage:link tạo đường dẫn ảo --}}
                    <img class="card-img-top" src="{{ asset('storage/images/' . $item->product_image) }}" alt="Card image cap">
                        <div class="card-body">

                            {{-- cách 1 tạo liên kết thông qua nối chuỗi --}}
                            {{-- <p><a href="{{ url('/product/' . $item->id . '/' . Str::slug($item->product_name, '-')) }}">{{ $item->product_name }}</a></p> --}}

                            {{-- cách 2 tạo liên kết thông qua route --}}
                            <p><a href="{{ route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html' }}">{{ $item->product_name }}</a></p>
                            <p class="card-text">{{ $item->product_price}}</p>
                            <p class="card-text">{{ mb_substr($item->product_description,0, 100) }}... </p>
                            <a href="https://www.google.com.vn/">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection

<script src="{{ asset('storage/js/script.js') }}"></script>


@extends('layouts.default')


@section('content')


<div class="album py-5 bg-light">
    <div class="container">
        <a href="{{ url('') }}" class="btn btn-primary">Home</a> <br><br>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Tạo Sản Phẩm Mới</a> <br><br>
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
                    <img class="card-img-top" src="{{ asset('storage/images/' . $item->product_image) }}" alt="Card image cap" onclick="getProduct('{{route('product.productAjax',$item->id)}}',
                    '{{ asset('storage/images/') }}')">
                        <div class="card-body">

                            {{-- cách 1 tạo liên kết thông qua nối chuỗi --}}
                            {{-- <p><a href="{{ url('/product/' . $item->id . '/' . Str::slug($item->product_name, '-')) }}">{{ $item->product_name }}</a></p> --}}

                            {{-- cách 2 tạo liên kết thông qua route --}}
                            <p><a href="{{ route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html' }}">{{ $item->product_name }}</a></p>
                            <p class="card-text">{{ $item->product_price}}</p>
                            <p class="card-text">{{ mb_substr($item->product_description,0, 100) }}... </p>
                            <a href="https://www.google.com.vn/">Read More</a>
                                
                            <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('product.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                            
                            {{-- gọi hàm destroy thông qua 1 form, truyền id cho hàm --}}
                            <form onsubmit="return deleteProduct();" action="{{ route('product.destroy',$item->id) }}" method="post" >
                                {{-- tránh giả mạo yêu cầu giữa các trang web --}}
                                @csrf
                                {{-- thêm method được hỗ trợ bởi laravel -> chuyển method từ post->DELETE  --}}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{-- phân trang --}}
        {{$products->links()}}
    </div>
</div>



<!-- Modal -->


<div class="modal fade" id="productDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Chi Tiết Sản Phẩm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection
<script src="{{asset('js/siteajax.js')}}"></script>
<script src="{{ asset('storage/js/script.js') }}"></script>


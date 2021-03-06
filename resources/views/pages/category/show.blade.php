

@extends('layouts.default')


@section('content')
<style>
  .muahang .btn:hover{
      background-color: #9c27b0;
      color: #fff;
  }</style>
<div class="album py-5 bg-light">
    <div class="container">

        @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        <div class="row">
            
            @foreach($products as $item)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ asset('storage/images/' . $item->product_image) }}" alt="Card image cap" onclick="getProduct('{{route('product.productAjax',$item->id)}}',
                    '{{ asset('storage/images/') }}')">
                <div class="card-body">

                  <h6><a href="{{ route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html' }}">{{ mb_substr($item->product_name,0,40) }}</a></h6>

                    <p class="card-text">{{ mb_substr($item->product_description,0, 100) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                    {{-- add giỏ hàng --}}
                    @if($item->product_promotion_pricre==0)
                        <h6 class="card-text">Giá {{ $item->product_price}}VNĐ</h6> <br>
                        @else
                        <p class="card-text"> <strike> Giá {{ $item->product_price}}VNĐ</strike></p> <br>
                        <h6 class="card-text"> Sale {{ $item->product_promotion_pricre}} VNĐ</h6>
                        @endif
                        <div class="muahang" style="text-align:center">
                          <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                              @csrf
                              <input name="id" type="hidden" value="{{ $item->id }}">
                              <button class="btn " type="submit"><i class="fa fa-cart-plus"></i> Mua ngay</button>
                          </form>
                        </div>
                    
                    </div>
                </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<br>
<br>
<br>
<!-- Modal -->
<script src="{{ asset('js/siteajax.js') }}"></script>

<div class="modal fade" id="productDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection



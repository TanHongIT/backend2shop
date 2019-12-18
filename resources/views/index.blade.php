@extends('layouts.default')


@section('content')
<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
                  @foreach($slide as $sl)
									<!-- THE FIRST SLIDE -->
								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{ asset("source/image/slide/$sl->image") }}" data-src="{{ asset("source/image/slide/$sl->image") }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{ asset("source/image/slide/$sl->image") }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
											</div>
                </li>
                @endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
<div class="album py-5 bg-light">
    <div class="container">
        @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="beta-products-list">
          <br><br>
          <h4>Products</h4>
          <div class="row">
              @foreach($products as $item)
              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ asset('storage/images/' . $item->product_image) }}" alt="Card image cap" onclick="getProduct('{{ route('product.productAjax', $item->id) }}')">
                  <div class="card-body">
                      <h6><a href="{{ route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html' }}">{{ mb_substr($item->product_name,0,40) }}</a></h6>

                      <p class="card-text">{{ mb_substr($item->product_description,0, 100) }}... <a href="https://www.google.com/">Read More</a></p>
                      <div class="d-flex justify-content-between align-items-center"> <br>
                        <p class="card-text"> <strike> Giá Cũ {{ $item->product_price}}VNĐ</strike></p> <br>
                        <h6 class="card-text"> Sale {{ $item->product_promotion_pricre}} VNĐ</h6>
                      <br>
                      {{-- add giỏ hàng --}}
                      <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                          @csrf
                          <input name="id" type="hidden" value="{{ $item->id }}">
                          <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                      </form>
                      </div>
                  </div>
                  </div>
                  <br><br><br>
              </div>
              @endforeach
          </div>
        </div>
        
        {{$products->links()}}
    </div>
</div>

<!-- Modal -->
<script src="{{ asset('js/siteajax.js') }}"></script>

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
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
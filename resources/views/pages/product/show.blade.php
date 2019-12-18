@extends('layouts.default')

@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Product</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('storage/images/' . $item->product_image) }}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <h4><b>{{ $item->product_name }}</b></h4>
                            <p class="single-item-price">
                                @if($item->product_promotion_pricre==0)
                        <h6 class="card-text">Giá {{ $item->product_price}}VNĐ</h6> <br>
                        @else
                        <p class="card-text"> <strike> Giá {{ $item->product_price}}VNĐ</strike></p> <br>
                        <h6 class="card-text"> Sale {{ $item->product_promotion_pricre}} VNĐ</h6>
                        @endif
            
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>{{ $item->product_description }}</p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-options">
                            <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                @csrf
                                <input name="id" type="hidden" value="{{ $item->id }}">
                                <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div><br><br>
                <div class="comment">
                    <h3>Để lại comment</h3>
                    <form action="{{ route('comment.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="comment_content" id="comment_content" class="form-control"></textarea>
                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                            <br>
                            <button type="submit" class="btn btn-success">Gửi comment</button>
                            
                        </div>
                    </form>
                </div>
                
                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        <li><a href="#tab-reviews">Comment</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        {{ $item->product_description }}
                    </div>
                    <div class="panel" id="tab-reviews">
                 
                     @foreach ($comments as $comment)
                        <p>{{$comment->id}}. {{ $comment->comment_content }}</p>
                        <hr>
                    @endforeach
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
            </div>
           
       
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
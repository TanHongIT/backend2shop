@extends('layouts.default')

@section('content')
<div class="container">
    <br><br><br><br>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('storage/images/' . $item->product_image) }}" alt="Card image cap" class="img-fluid">
        </div>
        <div class="col-md-8">
            
            <h1>{{ $item->product_name }}</h1>

            <h5>Giá Cũ {{ $item->product_price }} vnđ</h5>
            <h4>Giá Mới {{ $item->product_promotion_pricre }} vnđ</h4>
            <p>{{ $item->product_description }}</p>

            <ul>
            @foreach ($comments as $comment)
                <li>{{ $comment->comment_content }}</li>
            @endforeach
            </ul>

            <form action="{{ route('comment.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" class="form-control"></textarea>
                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                    <br>
                    <button type="submit">Send</button>
                    <br><br><br>

                    <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                        @csrf
                        <input name="id" type="hidden" value="{{ $item->id }}">
                        <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
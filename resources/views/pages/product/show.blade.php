@extends('layouts.default')

@section('content')
<div class="container">
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
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
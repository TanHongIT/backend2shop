@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('storage/images/' . $item->product_image) }}" alt="Card image cap" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1>{{ $item->product_name }}</h1>
            <p>{{ $item->product_price }}</p>
            <p>{{ $item->product_description }}</p>
            <ul>
                {{-- xuất tất cả cmt có trong product --}}
            @foreach ($comments as $cmt)
                <li>{{ $cmt->comment_content }}</li>
            @endforeach
           
            </ul>
            {{-- form cmt --}}
            <form action="{{ route('comment.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" class="form-control"></textarea>
                    <input type="hidden" name="product_id" value="{{ $item->id }}"><br>
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
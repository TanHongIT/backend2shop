@extends('layouts.default')


@section('content')

<div class="album py-5 bg-light">
    <div class="container">
      {{-- <a href="{{ route('category.create') }}" class="btn btn-primary">Create category</a> <br><br> --}}
        @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        <div class="row">
            
            @foreach($categories as $item)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  
                <div class="card-body">
                <p>ID Category: {{$item->id}}</p>
                <p>Name: {{$item->category_name}}</p>
                    {{-- <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('categorymanagement.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('categorymanagement.destroy', $item->id) }}" method="post" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div> --}}
                </div>
                </div>
            </div>
            @endforeach

        </div>
        {{$products->links()}}
    </div>
</div>

<!-- Modal -->
<script src="{{ asset('js/siteajax.js') }}"></script>
@endsection



@extends('layouts.default')


@section('content')
<div class="form-group">
    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" required>
      <option value="">Select a Category</option>

      @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>

        @if ($category->children)
          @foreach ($category->children as $child)
            <option value="{{ $child->id }}" {{ $child->id == $post->category_id ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->category_name }}</option>
          @endforeach
        @endif
      @endforeach
    </select>
  </div>

@endsection
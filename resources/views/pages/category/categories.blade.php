@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    @foreach($parentCategories as $category)
                    <ul>
                        <li>{{$category->category_name}}</li>
                        @if(count($category->subcategory))
                             @include('pages.category.subCategoryList',['subcategories' => $category->subcategory])
                        @endif 
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
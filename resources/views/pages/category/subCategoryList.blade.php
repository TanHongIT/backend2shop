@foreach($subcategories as $subcategory)
<ul>
        <a href="{{route('category.show',$subcategory->id)}}"><li>{{$subcategory->category_name}}</li></a> 
    @if(count($subcategory->subcategory))
        @include('pages.category.subCategoryList',['subcategories' => $subcategory->subcategory])
    @endif
    </ul> 
@endforeach
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
@foreach($subcategories as $subcategory)
    <li>
        @php
        $txtDropdown = 'class="nav-link"';
		$isDropdown = false;
        if(count($subcategory->subcategories))
        {
            $isDropdown = true;
            $txtDropdown = 'class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
        }
        @endphp
        <a {!! $txtDropdown !!} href="{{ route('category.show', $subcategory->id) }}">{{$subcategory->category_name}}</a>
        @if($isDropdown)
                @include('layouts.partials.subCategoryList',['subcategories' => $subcategory->subcategories])
        @endif
    </li>
@endforeach
</ul>
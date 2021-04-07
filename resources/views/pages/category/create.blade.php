@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<h2 style="text-align:center"><b>Add category</b></h2>
<br>
<h3 style="text-align:center">Danh sách toàn bộ các ID và category tương ứng</h3>
<div class="container">
    @foreach ($categories as $category)
                <span style="color:red; font-weight:bold"><b>{{$category->id}}</b></span>. <span style="color:blue; font-weight:bold">{{$category->category_name}}</span><span>-----</span>
    @endforeach
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add category your like</div>
   
                <div class="card-body">
                    <form method="POST" action="{{ route('categorymanagement.store') }}">
                        @csrf 
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Category Name</label>
  
                            <div class="col-md-6">
                                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Điền tên category..." >
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Select Paernt ID</label>
  
                            <div class="col-md-6">
                                <input id="parent_id" type="text" class="form-control" name="parent_id" placeholder="Điền parent id..." >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Create category
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
@endsection
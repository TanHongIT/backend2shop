
@extends('layouts.app')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
        <div class="col-md"></div>
        <div class="col-md"><h2>Edit Profile</h2></div>
        <div class="col-md"></div>
        <div class="card">
            <div class="card-header">
              <i class="fas fa-pencil-alt"></i> Edit Your Profile
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('users.update', Auth::user()->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="name">Nickname</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
                    <span class="help-block">Enter your name, so people you know can recognize you.</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                    <span class="help-block">This email will be displayed on your public profile.</span>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i>   Update
                </button>
              </form>
            </div>
            
        </div>
    </div>
    </div>
</div>

@endsection

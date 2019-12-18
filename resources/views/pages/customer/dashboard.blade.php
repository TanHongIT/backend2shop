@extends('layouts.app')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
        <div class="col-md"></div>
        <div class="col-md"><h2>Customer Profile</h2></div>
        <div class="col-md"></div>
        <div class="card">
            <div class="card-header">
              <i class="fas fa-pencil-alt"></i> Edit Your Profile
            </div>
            <div class="card-body">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="col-md-3">Full Name</label>
                  <div class="col-md-9">
                      {{-- chỗ v-model là gì t éo biết --}}
                    <input class="form-control"  type="text" v-model="user.name">                    
                    <span class="help-block">Enter your name, so people you know can recognize you.</span>
                    <div class="invalid-feedback" v-if="errors.name"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3">Email</label>
                  <div class="col-md-9">
                      {{-- chỗ v-model là gì t éo biết --}}
                    <input class="form-control"  type="email" v-model="user.email">
                    <span class="help-block">This email will be displayed on your public profile.</span>
                    <div class="invalid-feedback" v-if="errors.email"></div>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Password</label>
                    <div class="col-md-9">
                        {{-- chỗ v-model là gì t éo biết --}}
                      <input class="form-control"  type="password" v-model="user.password">
                      <span class="help-block">Enter your password</span>
                      <div class="invalid-feedback" v-if="errors.email"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">password Confirm </label>
                    <div class="col-md-9">
                        {{-- chỗ v-model là gì t éo biết --}}
                      <input class="form-control"  type="password" v-model="user.password">
                      <span class="help-block">Enter your password</span>
                      <div class="invalid-feedback" v-if="errors.email"></div>
                    </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <div class="form-group row">
                <div class="col-md-9 offset-md-3">
                    <button class="btn btn-primary" type="button">
                    <i class="fas fa-spinner fa-spin" v-if="submiting"></i> Save
                    </button>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

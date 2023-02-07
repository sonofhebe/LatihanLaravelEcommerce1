@extends('layouts.header')

@section('content')	
<div class="app-pages app-section">
    <div class="container">
        <a href="{{route('users.index')}}" class="btn waves-effect waves-light" style="float: right;">Back</a>
        <h3>Create Users</h3><br>
            <form class="col s12" action="{{ route('users.store') }}" method="POST">
                @csrf
              <div class="row">
                <div class="input-field col s12">
                  <input id="name" name="name" type="text" class="validate">
                  <label for="name">Full Name</label>
                  @error('name')
                      <p class="text text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                  @error('email')
                      <p class="text text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" name="password" type="password" class="validate">
                  <label for="password">Password</label>
                  @error('password')
                      <p class="text text-danger">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="fa fa-paper-plane-o"></i>
              </button>
            </form>
          </div>
    </div>
</div>
    @endsection
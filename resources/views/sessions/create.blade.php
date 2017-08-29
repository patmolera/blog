@extends('layouts.master')

@section('content')

  <div class="col-md-8">
      <h1>Sign In</h1>

      <form class="" action="/login" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
          <button type="button" class="btn btn-primary" name="button">Sign In</button>
        </div>

        @include('layouts.errors')
      </form>
  </div>

@endsection

@extends('layouts.master')


@section('content')
<h1>Login page</h1>
<div class="container">
    <form action="{{route('postLogin')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <input type="submit" value="submit">
        </div>
    </form>
</div>
@endsection

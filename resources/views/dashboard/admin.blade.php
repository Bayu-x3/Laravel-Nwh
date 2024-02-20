@extends('template.master')

@section('h1')
    ADMIN
    @endsection
@section('rowTengah')
    <form action="{{ route('login.logout') }}" method="post">
        @csrf
        @method('POST')
        <input type="submit" value="Logout" class="btn btn-danger">
    </form>
@endsection
@extends('layout.main')

@section('content')
    <form action="{{ URL::route('account-create-post') }}" method="post">
        <input type="submi" value="Create Account">
        {{}
    </form>
@stop
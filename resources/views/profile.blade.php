@extends('template');
@section('title')
    Profile
@endsection

@section('content')
    <h1>Profile</h1>
    <h2>{{$user_data->username}}</h2>
    <img src="{{$user_data->profile_url}}" alt="">
@endsection



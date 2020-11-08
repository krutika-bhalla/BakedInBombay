@extends('layouts.app')

@section('content')
{{--{{dd($users)}}--}}
{{--{{dd($username)}}--}}
{{--@foreach($users as $u)--}}
{{--    {{dd($u)}}--}}

{{--    Only Admin Side Code--}}

@if ($user->user_type == 'admin')
    <br/><br/><br/>
    <h1 class="display-1">Admin</h1>
@endif






{{--    User Side Code on user.blade--}}

@if($user->user_type == 'user')
    <br/><br/><br/>
    @include('user')
@endif
{{--@endforeach--}}
@endsection

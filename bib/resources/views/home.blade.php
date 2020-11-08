@extends('layouts.app')

@section('content')
{{--    {{dd($users)}}--}}
{{--@foreach($users as $u)--}}
{{--    {{dd($u)}}--}}

{{--    Only Admin Side Code--}}

@if ($users == 'admin')
    <br/><br/><br/>
    <h1 class="display-1">Admin</h1>
@endif






{{--    User Side Code on user.blade--}}

@if($users == 'user')
    <br/><br/><br/>
    @include('user')
@endif
{{--@endforeach--}}
@endsection

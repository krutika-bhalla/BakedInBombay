@extends('layouts.app')

@section('content')
    <br><br><br>
<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
        alert(msg);
    }
</script>
<h2>ThankYou For Ordering with Us!</h2>
    <h2>Order Summary</h2>
{{--    @foreach($users as $u)--}}
        <label>Name: </label> {{$users->name}}<br>
        <label>Address: </label> {{$users->address}}<br>
        <label>Mobile Number: </label> {{$users->mobile_number}}<br>
{{--    @endforeach--}}
    @foreach($products as $p)
        <label>Total Amount: ₹ </label> {{$p->price}}
    @endforeach


@endsection

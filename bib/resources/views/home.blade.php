@extends('layouts.app')

@section('content')
{{--{{dd($users)}}--}}
{{--{{dd($username)}}--}}
{{--@foreach($users as $u)--}}
{{--    {{dd($u)}}--}}

{{--    Only Admin Side Code--}}

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    label{
        font-weight: bold;
    }
    #rowss{
        font-size: large;
        font-weight: bold;
    }
    #headss{
        font-size: 20px;
        font-weight: bolder;
    }
    .btn-outline-danger{
        color:#dc3545;
        background-color:transparent;
        background-image:none;
        border-color:#dc3545;
    }
    .btn-outline-danger:hover{
        color:#fff;
        background-color:#dc3545;
        border-color:#dc3545
    }
    .btn-outline-danger.focus,.btn-outline-danger:focus{
        box-shadow:0 0 0 .2rem rgba(220,53,69,.5);
    }
</style>

@if ($user->user_type == 'admin')

<style>
    .button {
        background-color: #008CBA; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
    }
    .button1:hover {
        background-color: #008CBA;
        color: white;
    }
    .btn-outline-new-new-white {
        color: #fff;
        background-color: transparent;
        background-image: none;
        border-color: #fff;
    }
    .btn-outline-new-new-white:hover {
        color: #cfa671;
        background-color: #fff;
        border-color: #fff;
    }
</style>

        <div class="menu-box" {{--data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="menu"--}}>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-title text-center">
                            <h2>Menu</h2>
                            <p>Add Items Here!</p>
                        </div>
                    </div>
                </div>
                <div class="row special-list">
                    @foreach($menu_items as $items)
                        <div class="col-lg-4 col-md-6 special-grid">
                            <div class="gallery-single fix">
                                <img src="{{ asset('imgs/uploads/order_uploads/' . $items->image) }}" class="img-fluid" alt="Image">
                                <div class="why-text" align="center">
                                    <br><br><br>
                                    <h4>{{ucwords($items->item_name)}}</h4>
                                    {{--                            <p>Sed id magna vitae eros sagittis euismod.</p>--}}
                                    <h5>₹ {{$items->price}}</h5>
                                    <h5>
                                    <a href="{{ route('delete', $items->id) }}" class="btn btn-lg btn-circle btn-outline-new-new-white">Delete</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
<!--   ALERT   -->
{{--    @if($message = Session::get("success"))--}}
{{--        <h3 class="text-center text-success">{{$message}}</h3>--}}
{{--    @endif--}}
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
        var msg = '{{Session::get('success')}}';
        var exist = '{{Session::has('success')}}';
        if(exist){
            alert(msg);
        }
    </script>
    <!-- Button trigger modal -->
        <div align="center">
        <button type="button" class="button button1" data-toggle="modal" data-target="#exampleModalCenter">
            Add Items
        </button>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle"><strong>Add New Item</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('save-menu')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input required type="text" name="item_name" class="form-control" id="exampleInputPassword1" placeholder="Name">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Price</label>
                                <input required type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Add Price">
                            </div>
                            <div class="col-md-6">
                                <label>Type</label>
                                <select type="text" name="item_type" required class="form-control">
                                    <option selected>Select</option>
                                    <option value="cake">Cakes</option>
                                    <option value="bread">Breads</option>
                                    <option value="brownie">Brownies</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input required type="file" class="form-control-file" name="image" accept="image/*"  id="exampleFormControlFile1">
                        </div>
{{--                          <label>Activity Status</label>--}}
{{--                           <label class="switch">--}}
{{--                               <input required type="checkbox" name="is_active" checked>--}}
{{--                               <span class="slider round"></span>--}}
{{--                           </label>--}}
                        <div class="modal-footer">
        {{--                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endif

{{--{{dd($menu_items, $images)}}--}}
{{--{{dd()}}--}}




{{--    User Side Code on user.blade--}}

@if($user->user_type == 'user')
    <br>
    @include('user')
@endif
{{--@endforeach--}}
@endsection

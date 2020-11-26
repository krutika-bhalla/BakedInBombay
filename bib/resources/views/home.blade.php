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
</style>

@if ($user->user_type == 'admin')
{{--    <br/><br/><br/><br/>--}}
{{--    --}}{{--        CARD OF MENUS--}}
{{--    <div class="table-responsive">--}}
{{--    <table class="table table-striped">--}}
{{--        <thead>--}}
{{--        <tr id="headss">--}}
{{--            --}}{{--            <th scope="col"></th>--}}
{{--            <th scope="col">Sr.No</th>--}}
{{--            <th scope="col">Image</th>--}}
{{--            <th scope="col">Item</th>--}}
{{--            <th scope="col">Price</th>--}}
{{--            <th scope="col">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($menu_items as $items)--}}
{{--            <tr id="rowss">--}}

{{--                <td><b>{{ $loop->iteration }}</b></td>--}}
{{--                <td>--}}
{{--                    <a href="{{ asset('imgs/uploads/order_uploads/' . $items->image) }}" target="_blank">--}}
{{--                        <img src="{{ asset('imgs/uploads/order_uploads/' . $items->image) }}" style="max-height: 85px; max-width: 90px" >--}}
{{--                    </a>--}}
{{--                </td>--}}
{{--                <td>{{ucwords($items->item_name)}}</td>--}}
{{--                <td>{{$items->price}}</td>--}}
{{--                <td><a href="{{ route('delete', $items->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa fa-times"></i></a></td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    </div>--}}

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
                                <div class="why-text">
                                    <h4>{{ucwords($items->item_name)}}</h4>
                                    {{--                            <p>Sed id magna vitae eros sagittis euismod.</p>--}}
                                    <h5>₹ {{$items->price}}</h5>
                                    <p></p>
                                    <a href="{{ route('delete', $items->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa fa-times"></i></a>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
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
    <br/><br/><br/>
    @include('user')
@endif
{{--@endforeach--}}
@endsection

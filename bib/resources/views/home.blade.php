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
</style>

@if ($user->user_type == 'admin')
    <br/><br/><br/><br/>

       <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
               Add Items
           </button>

           <!-- Modal -->
    <form method="POST" action="{{route('save-menu')}}">
        @csrf
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
                           <div class="form-group">
                               <label for="exampleInputPassword1">Name</label>
                               <input type="text" name="item_name" class="form-control" id="exampleInputPassword1" placeholder="Name">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputPassword1">Number of Boxes</label>
                               <input type="text" name="available_boxes" class="form-control" id="exampleInputPassword1" placeholder="Boxes">
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlFile1">Image</label>
                               <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                           </div>
{{--                           <label>Activity Status</label>--}}
{{--                           <label class="switch">--}}
{{--                               <input type="checkbox" name="is_active" checked>--}}
{{--                               <span class="slider round"></span>--}}
{{--                           </label>--}}

                       </div>

                       <div class="modal-footer">
{{--                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                           <button type="submit" class="btn btn-primary">Save</button>
                       </div>
                   </div>
               </div>
           </div>
   </form>
@endif






{{--    User Side Code on user.blade--}}

@if($user->user_type == 'user')
    <br/><br/><br/>
    @include('user')
@endif
{{--@endforeach--}}
@endsection

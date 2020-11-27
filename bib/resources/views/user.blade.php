@extends('layouts.app')

@section('content')
{{--<h1 class="display-1"></h1>--}}
{{--{{dd($menu_items)}}--}}
<style>
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
<div class="menu-box" data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Our Specials</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".cakes">Cakes</button>
                        <button data-filter=".breads">Breads</button>
                        <button data-filter=".brownies">Brownies</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
    @foreach($menu_items as $m)
        @if($m->item_type == 'cake')
            <div class="col-lg-4 col-md-6 special-grid cakes">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text" align="center">
                        <br><br><br>
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <h5>₹ {{$m->price}}</h5>
                        <h5 class="btn-holder"><a href="{{ url('add-to-cart/'.$m->id) }}" class="btn btn-lg btn-circle btn-outline-new-new-white" role="button">Add to cart</a> </h5>
                    </div>
                </div>
            </div>
        @endif
        @if($m->item_type == 'bread')
            <div class="col-lg-4 col-md-6 special-grid breads">

                <div class="gallery-single fix" >
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text" align="center">
                        <br><br><br>
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <h5>₹ {{$m->price}}</h5>
                        <h5 class="btn-holder"><a href="{{ url('add-to-cart/'.$m->id) }}" class="btn btn-lg btn-circle btn-outline-new-new-white" role="button">Add to cart</a> </h5>
                    </div>
                </div>
            </div>
        @endif
        @if ($m->item_type == 'brownie')
            <div class="col-lg-4 col-md-6 special-grid brownies">

                <div class="gallery-single fix">
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text" align="center">
                        <br><br><br>
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <h5>₹ {{$m->price}}</h5>
                        <h5 class="btn-holder"><a href="{{ url('add-to-cart/'.$m->id) }}" class="btn btn-lg btn-circle btn-outline-new-new-white" role="button">Add to cart</a></h5>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
    </div>
</div>
<style>
    .button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color:black;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }
</style>

@endsection

@section('js-scripts')
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    {{--<script src="js/bootstrap.min.js"></script>--}}
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script>
        var msg = '{{Session::get('success')}}';
        var exist = '{{Session::has('success')}}';
        if(exist){
            alert(msg);
        }
    </script>
@endsection

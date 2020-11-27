
{{--<h1 class="display-1"></h1>--}}
{{--{{dd($menu_items)}}--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<div class="menu-box" data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Our Specials</h2>
                </div>
            </div>
        </div>
<div class="row special-list">
    @foreach($menu_items as $m)
        @if($m->item_type == 'cake')
            <div class="col-lg-4 col-md-6 special-grid cakes">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <h5>₹ {{$m->price}}</h5>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$m->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endif
        @if($m->item_type == 'bread')
            <div class="col-lg-4 col-md-6 special-grid breads">

                <div class="gallery-single fix" >
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <h5>₹ {{$m->price}}</h5>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$m->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endif
        @if ($m->item_type == 'brownie')
            <div class="col-lg-4 col-md-6 special-grid brownies">

                <div class="gallery-single fix">
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <h5>₹ {{$m->price}}</h5>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$m->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a></p>
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
<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
        alert(msg);
    }
</script>

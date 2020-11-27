
{{--<h1 class="display-1"></h1>--}}
{{--{{dd($menu_items)}}--}}

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
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5>₹ {{$m->price}}</h5>
                    </div>
                </div>
            </div>
        @endif
        @if($m->item_type == 'bread')
            <div class="col-lg-4 col-md-6 special-grid breads">

                <div class="gallery-single fix">
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5>₹ {{$m->price}}</h5>
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
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5>₹ {{$m->price}}</h5>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
    </div>
</div>

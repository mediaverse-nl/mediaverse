@extends('layouts.app')

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('contact')])

    <style>
        .control-label{
            margin-left: 15px;
            margin-bottom: 10px;
        }
        .container-full {
            margin: 0 auto;
            width: 100%;
            margin-top: -20px !important;
        }
    </style>

    <div class="container-full">

        <div style="overflow:hidden;height:500px;width:100%;">
            <div id="gmap_canvas" style="height:500px;width:100%; ">
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="container-fluid">
            <br>

            <div class="col-md-6">
                <div class="row">
                    <h1 class="col-md-12">Info</h1>

                    <div class="col-md-6">
                        <span><b>Location</b></span>
                        <p>Pietercoecke straat 14,<br> 5643 VK Eindhoven</p>
                        <br>
                        <span><b>Contact us through</b></span>
                        <p>tel: +13 0 53779761 <br> Email: info@mediaverse.nl</p>
                        <br>
                        <span><b>Find us on</b></span>
                        <p style="font-size: 35px;">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <span><b>Contact us through</b></span>
                        <p>tel: +13 0 53779761 <br> Email: info@mediaverse.nl</p>

                        <br>
                    </div>
                    <div class="col-md-6">
                        <span><b>Contact us through</b></span>
                        <p>
                            Handelsnaam: Mediaverse<br>
                            Bank: NL42 ABNA 0594 0761 10<br>
                            kvk: 58808442 <br> </p>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Contact Us</h1>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="control-label">Naam *</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="email" class="control-label">Email *</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="info@mediaverse.nl" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="human" class=" control-label">Tel</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="+31 6 53 779761">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label">Message *</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="6" name="message"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary col-md-12">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('scripts')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMvcTakOHU-P11jscLB2yR8tiXmQGQDI8&callback=initMap"></script>
<script type="text/javascript">
    function init_map(){
        var myOptions = {
            zoom:13,
            center:new google.maps.LatLng(51.4271692,5.507636199999979),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
        };
        map = new google.maps.Map(
                document.getElementById("gmap_canvas"),
                myOptions
        );
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(51.4271692, 5.507636199999979)
        });
        infowindow = new google.maps.InfoWindow({
            content:"<b>Mediaverse</b><br/>pietercoecke straat 14<br/>5643vk eindhoven"
        });
        google.maps.event.addListener(
                marker, "click", function(){
                    infowindow.open(map,marker);
                });
        infowindow.open(map,marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
</script>
@endpush

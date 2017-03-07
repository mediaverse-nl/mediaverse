@extends('layouts.app')

@section('title', trans('page.contact.title'))
@section('description', trans('page.contact.description'))
@section('keywords', trans('page.contact.keywords'))

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

    <div class="container">
        <div class="container-fluid">
            <br>

            <div class="col-md-6">
                <div class="row">
                    <h1 class="col-md-12">Info</h1>

                    <div class="col-md-6">
                        <span><b>Locatie</b></span>
                        <p>Daalakkersweg 2-182,<br> 5641JA Eindhoven</p>
                        <br>
                        <span><b>Contact</b></span>
                        <p>tel: +31 6 53779761 <br>tel: +31 6 19959534 <br> Email: info@mediaverse.nl</p>
                        <br>
                        <span><b>Vind ons op</b></span>
                        <p style="font-size: 35px;">
                            <a href="https://twitter.com/mediaverse_nl" target="_blank">
                                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.facebook.com/mediaverse.nl/?ref=ts&fref=ts" target="_blank">
                               <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/mediaverse.nl?trk=company_logo" target="_blank">
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <span><b>Bedrijfsgegevens</b></span>
                        <p>
                            Handelsnaam: Mediaverse<br>
                            Bank: NL93 ABNA 0536 5042 37<br><br>
                            kvk: 58808442 <br>
                            btw nr: 212068842B01 <br> </p>
                        <br>
                        <br>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <h1>Neem contact op</h1>

                @if(!Session::has('succes_message'))
                    {!! Form::open(['route' => 'contact.store', 'class' => 'form-horizontal']) !!}

                        <div class="form-group {{!$errors->has('naam') ? : 'has-error'}}">
                            {!! Form::label('naam', 'Naam *', ['class' => 'control-label']) !!}
                            <div class="col-sm-12">
                                {!! Form::text('naam', null, ['class' => 'form-control', 'placeholder' => 'Voor & Achternaam']) !!}
                                @if($errors->has('naam'))
                                    <label class="control-label small">{{ $errors->first('naam') }}</label>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group {{!$errors->has('email') ? : 'has-error'}}">
                                    {!! Form::label('email', 'Email *', ['class' => 'control-label']) !!}
                                    <div class="col-sm-12">
                                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'info@mediaverse.nl']) !!}
                                        @if($errors->has('email'))
                                            <label class="control-label small">{{ $errors->first('email') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row" style="margin-left: 0px;">
                                <div class="form-group {{!$errors->has('telefoon_nr') ? : 'has-error'}}">
                                    {!! Form::label('telefoon_nr', 'Telefoon Nr', ['class' => 'control-label']) !!}
                                    <div class="col-sm-12">
                                        {!! Form::text('telefoon_nr', null, ['class' => 'form-control', 'placeholder' => '06 53 779761']) !!}
                                        @if($errors->has('telefoon_nr'))
                                            <label class="control-label small"> {{ $errors->first('telefoon_nr') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--</div>--}}

                        <div class="form-group {{!$errors->has('bericht') ? : 'has-error'}}">
                            {!! Form::label('bericht', 'Bericht *', ['class' => 'control-label']) !!}
                            <div class="col-sm-12">
                                {!! Form::textarea('bericht', null, ['class' => 'form-control', 'rows' => '6']) !!}
                                @if($errors->has('bericht'))
                                    <label class="control-label small">{{ $errors->first('bericht') }}</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input id="submit" name="submit" type="submit" value="Verzenden" class="btn btn-primary col-md-12">
                            </div>
                        </div>
                    {!! Form::close() !!}
                @else

                    @if(Session::has('succes_message'))
                        <div class="alert alert-success fade in ">
                            <span class="glyphicon"></span>
                            <em>  <p><b>Het contact formulier is verzonden!</b> <br> <br> We zullen z.s.m. contact met u opnemen!</p></em>
                        </div>
                    @endif
                @endif

            </div>
        </div>
        <hr>
    </div>

    <div style="background-color: #00ACED; width: 100%; height: 300px; margin-bottom: -50px;">
        <div style="overflow:hidden;height:100%;width:100%;">
            <div id="gmap_canvas" style="height:300px;width:100%; ">
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <style>

    </style>
@endpush

@push('scripts')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMvcTakOHU-P11jscLB2yR8tiXmQGQDI8&callback=initMap"></script>
<script type="text/javascript">
    function init_map(){
        var myOptions = {
            zoom:13,
            center:new google.maps.LatLng(51.446687, 5.522400),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
        };
        map = new google.maps.Map(
                document.getElementById("gmap_canvas"),
                myOptions
        );
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(51.446687, 5.522400)
        });
        infowindow = new google.maps.InfoWindow({
            content:"<b>Mediaverse</b><br/>Daalakkersweg 2-182<br/>5641JA Eindhoven"
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

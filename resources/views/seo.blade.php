@extends('layouts.app')

@section('content')

    <div class="page-header" style="height: 50px;">
        <div class="container">
            <div class="row" style="margin-top: -17px;">
                {!! Breadcrumbs::render('referenties') !!}
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">

        @include('includes._menu')

        <div class="col-lg-8">
            <h1>title pagina</h1>

            <h2>kop </h2>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.

            </p>
        </div>

    </div>
</div>
@endsection

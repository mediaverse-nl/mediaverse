@extends('layouts.app')

@section('title', trans('page.hosting.title'))
@section('description', trans('page.hosting.description'))
@section('keywords', trans('page.hosting.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('hosting')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>Hosting en Service</h1>
                <p>
                    Om een webshop of webpagina via het world-wide-web bereikbaar te maken, zal de desbetreffende site zich moeten aanmelden bij een server. Een server is
                    feitelijk een computer die dag en nacht opereert, met schrijfruimte waarop uw product – dus uw website of pagina – staat. De foto’s, de context, de
                    lay-out, het staat allemaal op de server. Wanneer een klant zich aanmeldt en inlogt, wordt dit via de server van de webpagina of webshop gedaan. Hoe snel
                    dit allemaal verwerkt zal worden ligt dus voornamelijk aan de kwaliteit van de server. Pagina’s welke op een goede server staan, zullen sneller worden
                    opgepikt door zoekmachines zoals Google.
                </p>
                <p>
                    Een grote ergernis voor een klant en vooral ook voor een bedrijf, is wanneer een server niet blijkt te functioneren en de site niet bereikbaar is voor de
                    personen – de klanten – die ernaar op zoek zijn. Er zal dus altijd naar moeten worden gestreefd om een server zo veel mogelijk draaiende te houden en deze
                    server ook zo snel mogelijk te laten functioneren, om de gebruiksvriendelijkheid van de producten die erop staan te doen vergroten.
                </p>
                <p>
                    Mediaverse kan u hierbij, als standvastig innovatief ICT-bedrijf, van dienst zijn. Hetgeen u ook gehost wilt hebben, wij kunnen u hierbij ondersteunen.
                    Producten zoals webhosting, domain hosting, email hosting, dedicated hosting, et cetera. Het is allemaal een optie bij ons.
                </p>
                <p>
                    <strong><em>“Safety and security are more important than convenience.” </em></strong>
                </p>
                <p>
                    <strong><em>–Don Hambridge</em></strong>
                </p>
                <p>
                    Hetgeen waarmee wij onszelf prijzen is het beveiligen van de websites die wij voor u (kunnen) maken. De producten die op onze servers staan hebben de
                    mogelijkheid om met een SSL, TLS of elk anders certificaat dat u prefereert beschermd te worden. Hierdoor wordt de veiligheid van de bezoeker en de
                    eigenaar van de site gewaarborgd.
                </p>
                <p>
                    De server die wij utiliseren opereren <strong>99,9%</strong> van de tijd.
                </p>
                <p>
                    Via onze hosting servers worden van alle producten te allen tijde een back-up gemaakt. Bij eventueel uitval van de server kan hierdoor een pagina vrijwel
                    stante pede weer online worden gezet. Dit resulteert in vrijwel geen data verlies, geen verlies van tijd en geen verlies van klanten.
                </p>
                <p>
                    Het aanbieden van onze hosting services doen wij onder het motto: <strong>“Kwaliteit, niet kwantiteit.” </strong>
                </p>

            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush
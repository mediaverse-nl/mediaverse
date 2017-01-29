@extends('layouts.admin')

@section('title', 'nieuw invoice: '. \App\Invoice::invoiceNumber())
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    {!! Form::open(['route' => 'financial.invoice.store', 'method' => 'store']) !!}

        <div class="col-md-6">

            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('adres', 'Adres') !!}
                {!! Form::text('adres', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('postcode', 'postcode') !!}
                {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('stad', 'stad') !!}
                {!! Form::text('stad', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'klant naam') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('business_name', 'bedrijfsnaam') !!}
                {!! Form::text('business_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('kvk', 'kvk nummer') !!}
                {!! Form::text('kvk', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('btw_nr', 'btw nummer') !!}
                {!! Form::text('btw_nr', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">

{{--                {{dd($projects->invoice->first())}}--}}
{{--                {{dd(array_except($projects->pluck('name', 'id'), $projects))}}--}}
                {!! Form::label('project_id', 'project') !!}
                {!! Form::select('project_id', $projects->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('aanmaken', ['class' => 'btn btn-primary pull-right'])!!}

        </div>

        <div  class="col-md-6">

            {{--<div id="POItablediv">--}}
                {{--<input type="button" id="addPOIbutton" value="Add POIs"/><br/><br/>--}}
                {{--<table id="POITable" class="table table-bordered" border="1">--}}
                    {{--<tbody>--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th class="col-lg-7">name</th>--}}
                        {{--<th class="col-lg-2">Aantal</th>--}}
                        {{--<th class="col-lg-2">prijs</th>--}}
                        {{--<th class="col-lg-1">Opties</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}

                    {{--<tr>--}}
                        {{--<td>1</td>--}}
                        {{--<td><input type="text" name="items[][qty]"  id="latbox"/></td>--}}
                        {{--<td><input type="text" name="items[][price]"  id="lngbox" /></td>--}}
                        {{--<td>--}}
                            {{--<input type="button" id="delPOIbutton"  value="Delete" onclick="deleteRow(this)"/>--}}
                            {{--<input type="button" id="addmorePOIbutton"value="Add More POIs" onclick="insRow()"/>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        </div>

    {!! Form::close() !!}

@endsection

@push('javascript')
    <script>
        function deleteRow(row)
        {
            var i=row.parentNode.parentNode.rowIndex;
            document.getElementById('POITable').deleteRow(i);
        }


        function insRow()
        {
            console.log( 'hi');
            var x=document.getElementById('POITable');
            var new_row = x.rows[1].cloneNode(true);
            var len = x.rows.length;
            new_row.cells[0].innerHTML = len;

            var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
            inp1.id += len;
            inp1.value = '';
            var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
            inp2.id += len;
            inp2.value = '';
            x.appendChild( new_row );
        }
    </script>
@endpush
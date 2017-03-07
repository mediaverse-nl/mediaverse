@extends('layouts.app')

@section('title', trans('page.voorwaarden.title'))
@section('description', trans('page.voorwaarden.description'))
@section('keywords', trans('page.voorwaarden.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('algemene-voorwaarden')])

    <div class="container">
        <div class="row">
            @if(Auth::check())
                @if(Auth::user()->hasRole('marketing') || Auth::user()->hasRole('board') )
                    <div class="col-lg-8">
                        @if($content == null)
                            {{ Form::open(['route' => 'marketing.content.store', 'method' => 'POST']) }}
                        @else
                            {{ Form::open(['route' => 'marketing.content.update', 'method' => 'PATCH']) }}
                        @endif
                        {{Form::hidden('page', \Route::getFacadeRoot()->current()->getActionName())}}
                        {{Form::textarea('textarea', $content != null ? $content->text : null, ['id' => 'texteditor', 'class' => 'ckeditor textarea'])}}
                        <br>
                        {{Form::submit('Wijzigen', ['class' => 'btn btn-default pull-right'])}}
                        {{ Form::close() }}
                    </div>
                @endif
            @endif

            <div class="col-lg-8">
                @if($content != null)
                    {!! $content->text !!}
                @endif
            </div>
        </div>
    </div>

@stop

@push('scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('#texteditor').ckeditor({
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    });
</script>
@endpush

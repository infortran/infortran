@extends('templates.main')

@section('content')
    <div id="cotizador"
         @if(Route::has('https'))
            assetUrl="{{secure_asset('/')}}"
         @else
            assetUrl="{{asset('/')}}"
         @endif
        ></div>
@endsection
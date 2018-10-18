
@extends('layout.'.$layout)


@section('content')
    @include('partials.'.$layout.'.firstsection')

    @include('partials.'.$layout.'.secondsection')

    @include('partials.'.$layout.'.thirdsection')

    {{--@include('partials.'.$layout.'.fourthsection')--}}

    @include('partials.'.$layout.'.fifthsection')

@endsection




<!--adminlte::layouts.landing-->


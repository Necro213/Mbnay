
@extends('layout.'.$layout)


@section('content')
    @include('partials.'.$layout.'.firstsection')

    @include('partials.'.$layout.'.secondsection')

    @include('partials.'.$layout.'.thirdsection')

    {{--@include('partials.'.$layout.'.fourthsection')--}}

    @if($logged == true)

    @else
        @include('partials.'.$layout.'.fifthsection')
    @endif


@endsection

@section('scripts')
    <script src="{{asset('js/page1.js')}}"></script>
@endsection



<!--adminlte::layouts.landing-->


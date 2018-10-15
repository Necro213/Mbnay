@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Admin</b>LTE</a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>

            <form id="loginForm" style="margin: 5%">
                <div class="row">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="row">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
                <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

            </form>

        @include('adminlte::auth.partials.social_login')



            <div align="right">
                <button class="btn btn-success" id="sesion">Iniciar Sesion</button>
            </div>

    </div>

    </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
    <script src="{{asset('/js/login.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>

</body>

@endsection





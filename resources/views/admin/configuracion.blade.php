@extends('vendor.adminlte.layouts.app')

@section('contentheader_title')
    <h1>Configuracion</h1>
@endsection

@section('contentheader_description')
    <hr>
    <form id="selectForm">
        <div align="left" class="container">
            <select name="template" id="template" class="selectpicker">
                <option value="business">Business</option>
                <option value="tasty-master">Tasty Master</option>
                <option value="coffe-master">Coffe Master</option>
                <option value="justice">Justice</option>
            </select>
        </div>
    </form>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
@endsection
@section('content')
    <div class="container">
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

@endsection
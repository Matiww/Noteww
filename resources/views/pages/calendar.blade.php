@extends('layouts.main')
@section('title', 'Kalendarz')
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar-3.6.1/fullcalendar.css') }}" crossorigin="anonymous">
@endsection
@section('javascripts')
    {{--calendar--}}
    <script src="{{ asset('plugins/fullcalendar-3.6.1/lib/moment.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('plugins/fullcalendar-3.6.1/fullcalendar.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('plugins/fullcalendar-3.6.1/locale/pl.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <ol class="breadcrumb">
            <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Strona główna</a></li>
            <li class="active"><i class="fa fa-calendar"></i> Kalendarz</li>
        </ol>
        <section class="content-header">
            <h1>
                Kalendarz
                <small></small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12 calendar-container">
                    <div id="calendar"></div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; {{ date('Y') }} Noteww</strong> with AdminLTE theme
    </footer>
@endsection
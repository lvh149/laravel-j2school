<html lang="en" >
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.pn') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard - {{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @stack('css')
</head>
<body>
<div class="wrapper">
    @include('layout_admin.sidebar')
    <div class="main-panel ps-container ps-theme-default" data-ps-id="a8d99105-39af-f045-2e61-b7825ca23b8e">
        @include('layout_admin.topbar')
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('layout_admin.footer')


        <<script src="{{ asset('js/jquery-3.2.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/material.min.js') }}"></script>
        <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('js/arrive.min.js') }}" ></script>

        <!-- Forms Validations Plugin -->
        <script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
        <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
        <script src="{{ asset('js/moment.min.js') }}" ></script>
        <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
        <script src="{{ asset('js/chartist.min.js') }}" ></script>

        <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
        <script src="{{ asset('js/bootstrap-notify.js') }}" ></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('js/bootstrap-datetimepicker.js') }}" ></script>
        <script src="{{ asset('js/jquery.tagsinput.js') }}" ></script>


    {{--<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->--}}
    {{--<script src="../assets/js/jquery.datatables.js"></script>--}}
    <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
        <script src="{{ asset('js/sweetalert2.js') }}" ></script>
        <!-- Material Dashboard javascript methods -->
        <script src="{{ asset('js/material-dashboard.js') }}" ></script>
        @stack('js')
</div>
</div>
</body>
</html>
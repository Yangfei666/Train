<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" sizes="any" mask href="/homeStatic/images/logo_black.png">

@section('link')
        <!-- Plugin Stylesheets first to ease overrides -->
        {{--<link rel="stylesheet" type="text/css" href="/adminStatic/plugins/colorpicker/colorpicker.css" media="screen">--}}
        {{--<link rel="stylesheet" type="text/css" href="/adminStatic/custom-plugins/wizard/wizard.css" media="screen">--}}

        <!-- Required Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/adminStatic/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/adminStatic/css/fonts/ptsans/stylesheet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/adminStatic/css/fonts/icomoon/style.css" media="screen">

        <link rel="stylesheet" type="text/css" href="/adminStatic/css/mws-style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/adminStatic/css/icons/icol16.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/adminStatic/css/icons/icol32.css" media="screen">

        {{--<!-- Demo Stylesheet -->--}}
        {{--<link rel="stylesheet" type="text/css" href="/adminStatic/css/demo.css" media="screen">--}}

        {{--<!-- jQuery-UI Stylesheet -->--}}
        {{--<link rel="stylesheet" type="text/css" href="/adminStatic/jui/css/jquery.ui.all.css" media="screen">--}}
        {{--<link rel="stylesheet" type="text/css" href="/adminStatic/jui/jquery-ui.custom.css" media="screen">--}}

        <!-- Theme Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/adminStatic/css/mws-theme.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/adminStatic/css/themer.css" media="screen">
    @show


    <link rel="stylesheet" type="text/css" href="/adminStatic/css/mycss.css" media="screen">

    <title>澳洲亚太瑜伽联盟</title>


</head>

<body>
	<!-- Header -->
    @include('adminLayout.header');

    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">

    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>

        <!-- Sidebar Wrapper -->
        @include('adminLayout.nav')

        <!-- Main Container Start -->
         @yield('main')
        <!-- Main Container End -->

    </div>
    @section('link2')
        <!-- JavaScript Plugins -->
        <script src="/adminStatic/js/libs/jquery-1.8.3.min.js"></script>
        <script src="/adminStatic/js/libs/jquery.mousewheel.min.js"></script>
        <script src="/adminStatic/js/libs/jquery.placeholder.min.js"></script>
        <script src="/adminStatic/custom-plugins/fileinput.js"></script>

        {{--<!-- jQuery-UI Dependent Scripts -->--}}
        {{--<script src="/adminStatic/jui/js/jquery-ui-1.9.2.min.js"></script>--}}
        {{--<script src="/adminStatic/jui/jquery-ui.custom.min.js"></script>--}}
        {{--<script src="/adminStatic/jui/js/jquery.ui.touch-punch.js"></script>--}}

        {{--<!-- Plugin Scripts -->--}}
        {{--<script src="/adminStatic/plugins/datatables/jquery.dataTables.min.js"></script>--}}
        {{--<!--[if lt IE 9]>--}}
        {{--<script src="/adminStatic/js/libs/excanvas.min.js"></script>--}}
        {{--<![endif]-->--}}
        {{--<script src="/adminStatic/plugins/flot/jquery.flot.min.js"></script>--}}
        {{--<script src="/adminStatic/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>--}}
        {{--<script src="/adminStatic/plugins/flot/plugins/jquery.flot.pie.min.js"></script>--}}
        {{--<script src="/adminStatic/plugins/flot/plugins/jquery.flot.stack.min.js"></script>--}}
        {{--<script src="/adminStatic/plugins/flot/plugins/jquery.flot.resize.min.js"></script>--}}
        {{--<script src="/adminStatic/plugins/colorpicker/colorpicker-min.js"></script>--}}
        {{--<script src="/adminStatic/plugins/validate/jquery.validate-min.js"></script>--}}
        {{--<script src="/adminStatic/custom-plugins/wizard/wizard.min.js"></script>--}}

        <!-- Core Script -->
        <script src="/adminStatic/bootstrap/js/bootstrap.min.js"></script>
        <script src="/adminStatic/js/core/mws.js"></script>

        <!-- Themer Script (Remove if not needed) -->
        <script src="/adminStatic/js/core/themer.js"></script>

        <!-- Demo Scripts (remove if not needed) -->
        <script src="/adminStatic/js/demo/demo.dashboard.js"></script>
    @show


</body>
</html>
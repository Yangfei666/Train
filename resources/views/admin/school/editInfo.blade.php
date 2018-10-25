@extends('adminLayout.base')

@section('link')
    <link rel="stylesheet" type="text/css" href="/adminStatic/plugins/colorpicker/colorpicker.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/custom-plugins/picklist/picklist.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/plugins/select2/select2.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/plugins/ibutton/jquery.ibutton.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/plugins/cleditor/jquery.cleditor.css" media="screen">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/adminStatic/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/adminStatic/css/mws-style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/css/icons/icol16.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/css/icons/icol32.css" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/adminStatic/css/demo.css" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/adminStatic/jui/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/jui/jquery-ui.custom.css" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/adminStatic/css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/adminStatic/css/themer.css" media="screen">
@endsection

@section('main')
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
            <div class="container">
                @include('adminLayout.errors')
                <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-pencil-2"></i> 编辑学校介绍</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/admin/editSchoolIntroduce" method="post">
                            <div class="mws-form-row">
                                <label class="mws-form-label">概要<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <input type="text" class="large" name="abstract" value="{{$school->abstract}}">
                                    {{csrf_field()}}
                                    {{method_field('put')}}
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label">内容<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <textarea id="cleditor" class="large" name="content" value>
                                         {{--{{$school->content}}--}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="mws-button-row">
                                <input type="submit" value="提交" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Container End -->

@endsection

@section('link2')
    <!-- JavaScript Plugins -->
    <script src="/adminStatic/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/adminStatic/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/adminStatic/js/libs/jquery.placeholder.min.js"></script>
    <script src="/adminStatic/custom-plugins/fileinput.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="/adminStatic/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/adminStatic/jui/jquery-ui.custom.min.js"></script>
    <script src="/adminStatic/jui/js/jquery.ui.touch-punch.js"></script>

    <script src="/adminStatic/jui/js/globalize/globalize.js"></script>
    <script src="/adminStatic/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script src="/adminStatic/custom-plugins/picklist/picklist.min.js"></script>
    <script src="/adminStatic/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="/adminStatic/plugins/select2/select2.min.js"></script>
    <script src="/adminStatic/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/adminStatic/plugins/validate/jquery.validate-min.js"></script>
    <script src="/adminStatic/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script src="/adminStatic/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="/adminStatic/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="/adminStatic/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="/adminStatic/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script src="/adminStatic/bootstrap/js/bootstrap.min.js"></script>
    <script src="/adminStatic/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/adminStatic/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/adminStatic/js/demo/demo.formelements.js"></script>
@endsection
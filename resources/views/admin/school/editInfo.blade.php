@extends('adminLayout.base')

@section('link')
    @parent
    <link href="/UEditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
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
                                    <input type="hidden" id="content" name="content" value="{{$school->content}}">
                                    {{csrf_field()}}
                                    {{method_field('put')}}
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label">内容<span class="required">*</span></label>
                                <div class="mws-form-item">
                                    <script type="text/plain" id="myEditor"></script>
                                </div>
                            </div>
                            <div class="mws-button-row">
                                <input type="submit" value="提交" class="btn btn-danger" id="btn-submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Container End -->

@endsection

@section('link2')
    @parent
    <script type="text/javascript" src="/UEditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/UEditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/UEditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/UEditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">
        $('#myEditor').css("width", '100%').css('height', '240px');
        var um = UM.getEditor('myEditor');
        um.setContent($('#content').val());
        $('#btn-submit').click(function () {
            $('#content').val(um.getContent());
        });
    </script>
@endsection
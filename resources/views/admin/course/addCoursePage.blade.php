@extends('adminLayout.base')

@section('main')
    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">
        <div class="container">
            @include('adminLayout.errors')
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 添加课程</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" id="form" action="/admin/addCourse" method="post" enctype="multipart/form-data">
                        <div class="mws-form-row">
                            <label class="mws-form-label">课程名称<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="title">
                                {{csrf_field()}}
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">图片<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="file" name="img">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">概述<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="summary">
                                <input type="hidden" class="large" name="content" id="content">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">详情介绍</label>
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

    <script type="text/javascript" src="{{asset('/ueditor/ueditor.config.js')}}"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

    <script type="text/javascript">
        var ue = UE.getEditor('myEditor');
        ue.ready(function(){
            ue.setContent($('#content').val());
        });
    </script>

@endsection
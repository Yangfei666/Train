@extends('adminLayout.base')

@section('main')
    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 编辑课程</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" action="/admin/editCourse/{{$course->id}}" method="post" enctype="multipart/form-data">
                        @include('adminLayout.errors')
                        <div class="mws-form-row">
                            <label class="mws-form-label">课程名称<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="title" value="{{$course->title}}">
                                {{csrf_field()}}
                                {{method_field('put')}}
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">概述<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="summary" value="{{$course->summary}}">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">详情介绍<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="hidden" id="content" name="content" value="{{$course->content}}">
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
            $('#btn-submit').click(function () {
                $('#content').val(ue.getContent());
            });
        });
    </script>
@endsection
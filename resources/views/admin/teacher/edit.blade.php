@extends('adminLayout.base')

@section('main')
    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 编辑老师</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" action="/admin/editTeacher/{{$teacher->id}}" method="post" enctype="multipart/form-data">
                        @include('adminLayout.errors')
                        <div class="mws-form-row">
                            <label class="mws-form-label">姓名<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="name" value="{{$teacher->name}}">
                                {{csrf_field()}}
                                {{method_field('put')}}
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">级别<span class="required">*</span></label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li>
                                        <input type="radio" name="level" value="高级导师" {{$teacher->level == '高级导师' ? 'checked' : '' }}>
                                        <label>高级导师</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="level" value="特级导师" {{$teacher->level == '特级导师' ? 'checked' : '' }}>
                                        <label>特级导师</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="level" value="特邀导师" {{$teacher->level == '特邀导师' ? 'checked' : '' }}>
                                        <label>特邀导师</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">排序<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="sort" value="{{$teacher->sort}}">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">概述<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="summary" value="{{$teacher->summary}}">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">详情介绍<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="hidden" id="content" name="content" value="{{$teacher->content}}">
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
            $('#btn-submit').click(function () {
                $('#content').val(ue.getContent());
            });
        });
    </script>
@endsection
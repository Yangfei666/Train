@extends('adminLayout.base')

@section('link')
    @parent
@endsection

@section('main')
    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 给 {{$teacher->name}}老师 更换图片</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" action="/admin/imgChange/teacher/{{$teacher->id}}" method="post" enctype="multipart/form-data">
                        @include('adminLayout.errors')
                        <div class="mws-form-row">
                            <label class="mws-form-label">原图<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <center>
                                    <img src="{{$teacher->img}}" style="height: 300px;">
                                </center>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">选择新图<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="file" name="img">
                                {{csrf_field()}}
                                {{method_field('put')}}
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
    @parent
@endsection
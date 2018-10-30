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
                    <span style="display: inline-block"><i class="icon-table"></i> 课程详情</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <table class="mws-table">
                        <tbody>
                        <tr>
                            <td>照片</td>
                            <td><img src="{{$course->img}}" style="width:100px"></td>
                        </tr><tr>
                            <td>课程名称</td>
                            <td>{{$course->title}}</td>
                        </tr><tr>
                            <td>简述</td>
                            <td>{{$course->summary}}</td>
                        </tr><tr>
                            <td>详述</td>
                            <td>{!! $course->content !!}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mws-panel-toolbar">
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container End -->
@endsection

@section('link2')
    @parent

@endsection
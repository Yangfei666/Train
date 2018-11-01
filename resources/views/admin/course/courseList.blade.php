@extends('adminLayout.base')

@section('link')
    @parent
    <style>
        td {
            text-align: center
        }
    </style>
@endsection

@section('main')
    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span style="display: inline-block"><i class="icon-table"></i> 课程列表</span>
                    <a href="/admin/addCoursePage" class="btn" style="float: right;">
                        <i class="icol-accept"></i> 添加
                    </a>
                </div>
                <div class="mws-panel-body no-padding">
                    <table class="mws-table">
                        <thead>
                        <tr>
                            <th>图片</th>
                            <th>课程名</th>
                            <th>概述</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td><img src="{{$course->img}}" style="width: 150px;"></td>
                                <td>{{$course->title}}</td>
                                <td style="max-width: 500px;">{{$course->summary}}</td>
                                <td class="checkbox-column">
                                <span class="btn-group">
                                    <a href="/admin/infoCourse/{{$course->id}}" class="btn btn-small"  title="课程详情">
                                        <i class="icon-search"></i>
                                    </a>
                                    <a href="/admin/editCoursePage/{{$course->id}}" class="btn btn-small"  title="编辑课程">
                                        <i class="icon-pencil"></i>
                                    </a>
                                    <a href="/admin/imgChange/course/{{$course->id}}" class="btn btn-small" title="更换图片">
                                        <i class="icon-pictures"></i>
                                    </a>
                                    <a href="/admin/deleteCourse/{{$course->id}}" class="btn btn-small"  title="删除课程"
                                       onclick="return confirm('确定要删除吗?')">
                                        <i class="icon-trash"></i>
                                    </a>
                                </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mws-panel-toolbar">
                </div>
            </div>
        </div>
    </div>
@endsection


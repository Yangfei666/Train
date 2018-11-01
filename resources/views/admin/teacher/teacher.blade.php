@extends('adminLayout.base')

@section('link')
    @parent
    <style>
        td {text-align:center}
    </style>
@endsection

@section('main')
    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span style="display: inline-block"><i class="icon-table"></i> 教练列表</span>
                    <a href="/admin/addPage" class="btn" style="float: right;">
                        <i class="icol-accept"></i> 添加
                    </a>
                    <a href="/admin/teacherSort" class="btn" style="float: right;">
                        <i class="icol-arrow-refresh"></i> 统一排序
                    </a>
                </div>
                <div class="mws-panel-body no-padding">
                    <table class="mws-table">
                        <thead>
                        <tr>
                            <th>照片</th>
                            <th>姓名</th>
                            <th>级别</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td><img src="{{$teacher->img}}" style="width:100px"></td>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->level}}</td>
                                <td class="checkbox-column">
                                <span class="btn-group">
                                    <a href="/admin/infoTeacher/{{$teacher->id}}" class="btn btn-small" title="老师详情">
                                        <i class="icon-search"></i>
                                    </a>
                                    <a href="/admin/editPage/{{$teacher->id}}" class="btn btn-small" title="编辑资料">
                                        <i class="icon-pencil"></i>
                                    </a>
                                    <a href="/admin/imgChange/teacher/{{$teacher->id}}" class="btn btn-small" title="更换图片">
                                        <i class="icon-pictures"></i>
                                    </a>
                                    <a href="/admin/deleteTeacher/{{$teacher->id}}"
                                       class="btn btn-small"
                                       title="删除老师"
                                       onclick="return confirm('确定要删除吗?')"
                                    >
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
                    {{ $teachers->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container End -->
@endsection

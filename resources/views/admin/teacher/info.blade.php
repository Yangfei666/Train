@extends('adminLayout.base')

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
                </div>
                <div class="mws-panel-body no-padding">
                    <table class="mws-table">
                        <tbody>
                            <tr>
                                <td>照片</td>
                                <td><img src="{{$teacher->img}}" style="width:100px"></td>
                            </tr><tr>
                                <td>姓名</td>
                                <td>{{$teacher->name}}</td>
                            </tr><tr>
                                <td>级别</td>
                                <td>{{$teacher->level}}</td>
                            </tr><tr>
                                <td>简述</td>
                                <td>{{$teacher->summary}}</td>
                            </tr><tr>
                                <td>详述</td>
                                <td>{!! $teacher->content !!}</td>
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

@extends('adminLayout.base')

@section('link')
    @parent
    <style>
        td {text-align:center}
    </style>
@endsection

@section('main')
    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span style="display: inline-block"><i class="icon-table"></i> 合作机构列表</span>
                    <a href="/admin/addEnvironment" class="btn" style="float: right;">
                        <i class="icol-accept"></i> 添加
                    </a>
                </div>
                <div class="mws-panel-body no-padding">
                    <table class="mws-table">
                        <thead>
                        <tr>
                            <th>标题(会馆名称)</th>
                            <th>展示类型</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($environments as $environment)
                            <tr>
                                <td>{{$environment->title}}</td>
                                <td>{{$environment->type}}</td>
                                <td class="checkbox-column">
                                <span class="btn-group">
                                    <a href="/admin/environmentImg/{{$environment->id}}" class="btn btn-small"
                                       title="图片编辑"><i class="icon-pictures"></i></a>
                                    <a href="/admin/deleteEnvironment/{{$environment->id}}"
                                       class="btn btn-small"
                                       title="删除"
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
                </div>
            </div>
        </div>
    </div>
@endsection

@section('link2')
    @parent
@endsection
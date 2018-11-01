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
                    <span style="display: inline-block"><i class="icon-table"></i> {{$environment -> title}}图片</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <table class="mws-table">
                        <thead>
                        <tr>
                            <th>图片</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($imgs as $img)
                            <tr>
                                <td><img src="{{$img->img}}" style="width:100px"></td>
                                <td class="checkbox-column">
                                <span class="btn-group">
                                    <a href="/admin/deleteEnvironmentImg/{{$img->id}}" class="btn btn-small"><i class="icon-trash"></i></a>
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

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 给 {{$environment->title}} 添加图片</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" action="/admin/addEnvironmentImg" method="post" enctype="multipart/form-data">
                        @include('adminLayout.errors')
                        <div class="mws-form-row">
                            <label class="mws-form-label">图片<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="file" name="img">
                                <input type="hidden" name="id" value="{{$environment->id}}">
                                {{csrf_field()}}
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
@endsection

@section('link2')
    @parent
@endsection
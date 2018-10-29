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

            @include('adminLayout.errors')
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 给 {{$environment->title}} 添加图片</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" action="/admin/addEnvironmentImg" method="post" enctype="multipart/form-data">
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
    <!-- Main Container End -->
@endsection

@section('link2')
    @parent

    <!-- JavaScript Plugins -->
    {{--<script src="/adminStatic/js/libs/jquery-1.8.3.min.js"></script>--}}
    {{--<script src="/adminStatic/js/libs/jquery.mousewheel.min.js"></script>--}}
    {{--<script src="/adminStatic/js/libs/jquery.placeholder.min.js"></script>--}}
    {{--<script src="/adminStatic/custom-plugins/fileinput.js"></script>--}}

    {{--<!-- jQuery-UI Dependent Scripts -->--}}
    {{--<script src="/adminStatic/jui/js/jquery-ui-1.9.2.min.js"></script>--}}
    {{--<script src="/adminStatic/jui/jquery-ui.custom.min.js"></script>--}}
    {{--<script src="/adminStatic/jui/js/jquery.ui.touch-punch.js"></script>--}}

    {{--<!-- Plugin Scripts -->--}}
    {{--<script src="/adminStatic/plugins/datatables/jquery.dataTables.min.js"></script>--}}
    {{--<script src="/adminStatic/plugins/colorpicker/colorpicker-min.js"></script>--}}

    {{--<!-- Core Script -->--}}
    {{--<script src="/adminStatic/bootstrap/js/bootstrap.min.js"></script>--}}
    {{--<script src="/adminStatic/js/core/mws.js"></script>--}}

    {{--<!-- Themer Script (Remove if not needed) -->--}}
    {{--<script src="/adminStatic/js/core/themer.js"></script>--}}

    {{--<!-- Demo Scripts (remove if not needed) -->--}}
    {{--<script src="/adminStatic/js/demo/demo.table.js"></script>--}}
@endsection
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
                    <span style="display: inline-block"><i class="icon-table"></i> 问答列表</span>
                    <a href="/admin/addQuestionLayout/-1" class="btn" style="float: right;">
                        <i class="icol-accept"></i> 添加
                    </a>
                </div>
                <div class="mws-panel-body no-padding">
                    <table class="mws-table">
                        <thead>
                        <tr>
                            <th>问题</th>
                            <th>答案</th>
                            <th>
                                操作
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $question)
                        <tr>
                            <td>{{$question->question}}</td>
                            <td>{{$question->answer}}</td>
                            <td class="checkbox-column">
                                <span class="btn-group">
                                    <a href="/admin/addQuestionLayout/{{$question->id}}" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="/admin/deleteQuestionAndAnswer/{{$question->id}}" class="btn btn-small"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mws-panel-toolbar">
                    {{ $questions->links() }}
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
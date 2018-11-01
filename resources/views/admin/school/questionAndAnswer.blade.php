@extends('adminLayout.base')

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

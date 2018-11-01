@extends('adminLayout.base')

@section('main')
    <!-- Main Container Start -->
    <!-- Main Container End -->
    <div id="mws-container" class="clearfix">
        <div class="container">
            @include('adminLayout.errors')
            <div class="grid_8">
                <div class="mws-panel">
                    <div class="mws-panel-header">
                        <span>
                            <i class="icon-calculate"></i>
                            问答{{$questions ? '编辑' : '添加'}}
                        </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/admin/addQuestionAndAnswer" method="post">
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">问题</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="question"
                                               value="{{$questions ? $questions->question : ''}}">
                                        <input type="hidden" class="large" name="id"
                                               value="{{$questions ? $questions->id : '-1'}}">
                                        {{csrf_field()}}
                                        {{$questions ? method_field('put') : method_field('post')}}
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">回答</label>
                                    <div class="mws-form-item">
                                        <textarea rows="" cols="" class="large autosize" name="answer">{{$questions ? $questions->answer : ''}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="mws-button-row">
                                    <input type="submit" value="提交" class="btn btn-danger">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


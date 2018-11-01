@extends('adminLayout.base')

@section('main')
    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 前台显示排序</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" action="/admin/teacherSort" method="post">
                        @include('adminLayout.errors')
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <div class="mws-form-inline">
                            @foreach($teachers as $teacher)
                            <div class="mws-form-row">
                                <label class="mws-form-label">
                                    <img src="{{$teacher->img}}" style="width: 25px;padding-right: 20px">
                                    {{$teacher->name}}
                                </label>
                                <div class="mws-form-item">
                                    <input type="text" class="large" name="{{$teacher->id}}" value="{{$teacher->sort}}">
                                </div>
                            </div>
                            @endforeach
                            <div class="mws-button-row">
                                <input type="submit" value="提交" class="btn btn-danger">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container End -->

@endsection

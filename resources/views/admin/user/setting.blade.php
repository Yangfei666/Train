@extends('adminLayout.base')
@section('link')
    @parent
@endsection
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
                            修改密码
                        </span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/admin/user/me/setting/{{\Auth::guard('admin')->user()->id}}" method="post">
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">原密码<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="oldPassword" >
                                        {{csrf_field()}}
                                        {{method_field('put')}}
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">新密码<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="password" >
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">确认密码<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="rePassword" >
                                    </div>
                                </div>

                                <div class="mws-button-row">
                                    <input type="submit" value="确定更改" class="btn btn-danger">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('link2')
    @parent
@endsection
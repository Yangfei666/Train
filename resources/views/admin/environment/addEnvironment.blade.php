@extends('adminLayout.base')


@section('main')
    <!-- Main Container Start -->
    <div id="mws-container" class="clearfix">
        <div class="container">
            @include('adminLayout.errors')
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-pencil-2"></i> 添加标题(会馆名称)</span>
                </div>
                <div class="mws-panel-body no-padding">
                    <form class="mws-form" action="/admin/addEnvironment" method="post" enctype="multipart/form-data">
                        <div class="mws-form-row">
                            <label class="mws-form-label">标题/会馆名称<span class="required">*</span></label>
                            <div class="mws-form-item">
                                <input type="text" class="large" name="title">
                                {{csrf_field()}}
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">显示类型<span class="required">*</span></label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="radio" name="type" value="1"> <label>单图显示</label></li>
                                    <li><input type="radio" name="type" value="2"> <label>双图显示</label></li>
                                    <li><input type="radio" name="type" value="3"> <label>三图显示</label></li>
                                </ul>
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

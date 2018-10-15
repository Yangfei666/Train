@extends('layout.base')

@section('main')
    @include('layout.top',
            [
                'h1' => '证书查询',
                'p' => '副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题',
                'img' => 'homeStatic/images/trainer-5.jpg'
            ])
    <div id="fh5co-contact" style="padding: 5em 0;min-height:500px;">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" style="color:#4CB648;font-size: 26px;">
                                    输入姓名或者证书号码:
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="输入姓名或者证书号码" autofocus>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="submit" value="查询" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-2"></div>
                <img class="col-md-8" src="images/trainer-5.jpg">
            </div>
        </div>
    </div>
@endsection

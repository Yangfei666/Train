@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '联系我们',
                    'p' => '澳洲亚太瑜伽联盟----瑜伽行业的<b>领跑者</b>。<br/>
                            为瑜伽行业提供了一个培训认证的标准示范。',
                    'img' => 'homeStatic/images/lxwm.png'
                ])
    <div id="fh5co-contact">
        <div class="container">
                <form action="/notices" method="post">
                <div class="row">
                    {{--<div class="col-md-2 animate-box">--}}
                    {{--</div>--}}
                    @if(Session::has('message'))
                        <div class="alert alert-info"> {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="col-md-6 animate-box">
                        <h3 class="section-title">联系我们</h3>
                        <p>我我们所设课程内容经典丰富，设有专业的200小时RYT，瑜伽私人教练认证班、瑜伽会所店长认证班、资深瑜伽导师班及艾扬格、阴瑜伽、流瑜伽、阿斯汤伽等特色课程。所有课程均可由学员根据自身爱好和需要自主选择，全面满足了学员多层次的职业发展需求。</p>
                        <ul class="contact-info">
                            <li><i class="icon-location-pin"></i>成都市锦江区泰合·国际财富中心 7栋302号</li>
                            <li><i class="icon-phone2"></i>15882124911</li>
                            <li><i class="icon-mail"></i><a href="#">2668482304@qq.com</a></li>
                            <li>
                                <i class="icon-globe2"></i>
                                <a href="http://www.aomengyujia.com">www.aomengyujia.com</a> /
                                <a href="http://www.yujiacun.net">www.yujiacun.net</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 animate-box">
                        <h3 class="section-title">留言报名</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="姓名" autofocus name="name">
                                    {{csrf_field()}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="电话" name="tel">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="content" cols="30" rows="7" placeholder="留言内容:比如其他基本信息,意向课程,其他疑问等等"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="submit" value="确定" class="btn btn-primary">
                                </div>
                            </div>
                            @if (count($errors) > 0)
                                <div class=" col-md-6" style=" color: #7e0606;">
                                    错误提示!
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>

    </script>
@endsection


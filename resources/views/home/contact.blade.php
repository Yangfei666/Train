@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '联系我们',
                    'p' => '澳洲亚太瑜伽联盟----瑜伽行业的<b>领跑者</b>。<br/>
                            为瑜伽行业提供了一个培训认证的标准示范。',
                    'img' => 'homeStatic/images/home-image-5.jpg'
                ])
    <div id="fh5co-contact">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-md-2 animate-box">
                    </div>
                    <div class="col-md-8 animate-box">
                        <h3 class="section-title">联系我们</h3>
                        <p>我是简介我是简介我是简介我是简介我是简介我是简介我是简介我是简介我是简介</p>
                        <ul class="contact-info">
                            <li><i class="icon-location-pin"></i>我是地址我是地址我是地址我是地址我是地址我是地址</li>
                            <li><i class="icon-phone2"></i>400888999</li>
                            <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
                            <li><i class="icon-globe2"></i><a href="http://www.yujiacun.net">www.yujiacun.net</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-6 animate-box">
                        <h3 class="section-title">留言报名</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="姓名" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="电话">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="留言内容:比如其他基本信息,意向课程,其他疑问等等"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="确定" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
@endsection
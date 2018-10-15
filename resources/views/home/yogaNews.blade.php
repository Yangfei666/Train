@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '瑜伽新闻',
                    'p' => '副标题或者简要副标题或者简要副标题或者简要副标题或者简要副标题或者简要副标题或者简要',
                    'img' => 'homeStatic/images/home-image-4.jpg'
                ])
    <div id="fh5co-team-section">
        <div class="container">
            <div class="row about">
                @foreach ([1,1,1,1,1,1] as $itme)
                    <div class="col-md-6 col-md-offset-0">
                        <div class="fh5co-blog animate-box">
                            <div class="inner-post">
                                <a href="/newsDetail"><img class="img-responsive" src="homeStatic/images/home-image-4.jpg" alt=""></a>
                            </div>
                            <div class="desc">
                                <h3><a href="/newsDetail">这里是新闻标题</a></h3>
                                <span class="posted_by">2018-10-01</span>
                                {{--<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>--}}
                                <p>我是简介我是简介我是简介我是简介我是简介我是简介我是简介我是简介我是简介</p>
                                <a href="/newsDetail" class="btn btn-default">详情</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
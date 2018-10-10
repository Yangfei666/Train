@extends('layout.base')

@section('main')
    @include('layout.top',
            [
                'h1' => '开班信息',
                'p' => '我是副标题我是副标题我是副标题我是副标题我是副标题我是副标题我是副标题我是副标题我是副标题我是副标题',
                'img' => 'images/home-image-5.jpg'
            ])
    @foreach([1,1,1] as $itme)
    <br/>
    <br/>
    <div class="fh5co-parallax"
         style="background-image: url(images/home-image-{{$loop->index+2}}.jpg);"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
                    <div class="fh5co-intro fh5co-table-cell box-area">
                        <div class="animate-box">
                            <h1>半年制导师班</h1>
                            <p>半年制导师班一、课程特色1、6个月全日制教学2、一对一体态评估，制定个性化方案3、高价值市场课程，基础扎实,毕业后轻松、优先就业4、就业面广，毕业后可从事团体课、私教、理疗、教培、等课程...</p>
                            <a href="/courseDetail" class="btn btn-primary">了解详情</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br/>
    <br/>
@endsection
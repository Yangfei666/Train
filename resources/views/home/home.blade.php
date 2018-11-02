@extends('layout.base')

@section('main')
            <div class="fh5co-hero">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(homeStatic/images/home-image.jpg);">
                    <div class="desc animate-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h2>专业的瑜伽培训机构</h2>
                                    <h2>澳洲亚太瑜伽联盟</h2>
                                    <h2>中国区唯一培训学校</h2>
                                    <p><span>澳洲亚太瑜伽联盟 <i class="icon-heart3"></i> 中国区唯一培训学校</span></p>
                                    <span><a class="btn btn-primary" href="/contact">我要报名</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.teacher',
                        [
                            'num' => 6,
                            'teacher' => $teacher
                        ])

<!--             <div id="fh5co-team-section">
                <div class="container"> -->
                    @include('layout.title',
                    [
                        'h2' => '精品课程',
                        'p' => '专业的初、中、高级认证班，瑜伽私人教练认证班、瑜伽会所店长认证班、资深瑜伽导师班及艾扬格、阴瑜伽、流瑜伽、阿斯汤伽等特色课程'
                    ])
                    @foreach($courses as $course)
                        @if ($loop->index == 2)
                            @break
                        @endif
                        <div class="fh5co-parallax"
                             style="background-image: url({{$course->img}});"
                             data-stellar-background-ratio="0.5">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
                                        <div class="fh5co-intro fh5co-table-cell box-area">
                                            <div class="animate-box">
                                                <h1>{{$course->title}}</h1>
                                                <p>{{$course->summary}}</p>
                                                <a href="/courseDetail/{{$course->id}}" class="btn btn-primary">了解详情</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <br>
                            <br>
                    @endforeach
                    <a href="/offerCourse" class="btn btn-primary" style="float: right;">更多课程</a>
<!--                 </div>
            </div> -->


            <div id="fh5co-team-section">
                <div class="container">
                    @include('layout.title',
                    [
                        'h2' => '合作会馆',
                        'p' => ''
                    ])
                    @foreach ($environments as $environment)
                        <p>{{$environment->title}}</p>
                        <div class="row about">
                            @foreach ($environment->EnvironmentImg as $value)
                                @if($environment->type == '双图显示')
                                    <div class="col-md-6 col-md-offset-0">
                                        <img class="img-responsive animate-box" src="{{$value->img}}" alt="About">
                                    </div>
                                @elseif($environment->type == '三图显示')
                                    <div class="col-md-4 col-md-offset-0">
                                        <img class="img-responsive animate-box" src="{{$value->img}}" alt="About">
                                    </div>
                                @else
                                    <div class="col-md-12 col-md-offset-0">
                                        <img class="img-responsive animate-box" src="{{$value->img}}" alt="About">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                    <a href="/environment" class="btn btn-primary" style="float: right;">更多会馆</a>
                </div>
            </div>
@endsection

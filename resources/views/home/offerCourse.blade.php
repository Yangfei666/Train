@extends('layout.base')

@section('main')
    @include('layout.top',
            [
                'h1' => '课程介绍',
                'p' => '专业的初、中、高级认证班，瑜伽私人教练认证班、瑜伽会所店长认证班、资深瑜伽导师班及艾扬格、阴瑜伽、流瑜伽、阿斯汤伽等特色课程',
                'img' => 'homeStatic/images/kcjs.png'
            ])
    @foreach($courses as $course)
    <br/>
    <br/>
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
    @endforeach
    <br/>
    <br/>
@endsection
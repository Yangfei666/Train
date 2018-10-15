@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '学校环境',
                    'p' => '我是副标题我是副标题我是副标题我是副标题我是副标题我是副标题',
                    'img' => 'homeStatic/images/trainer-6.jpg'
                ])
    <div id="fh5co-team-section">
        <div class="container">
            @include('layout.title',
                [
                    'h2' => '小标题1',
                    'p' => ''
                ])
            <div class="row about">
                @foreach ([1,1] as $itme)
                    <div class="col-md-12 col-md-offset-0">
                        <img class="img-responsive animate-box" src="homeStatic/images/home-image-3.jpg" alt="About">
                    </div>
                @endforeach

            </div>
        </div>
        <div class="container">
            @include('layout.title',
                [
                    'h2' => '小标题2',
                    'p' => ''
                ])
            <div class="row about">
                @foreach ([1,1,1,1] as $itme)
                    <div class="col-md-6 col-md-offset-0">
                        <img class="img-responsive animate-box" src="homeStatic/images/home-image-3.jpg" alt="About">
                    </div>
                @endforeach

            </div>
        </div>
        <div class="container">
            @include('layout.title',
                [
                    'h2' => '小标题3',
                    'p' => ''
                ])
            <div class="row about">
                @foreach ([1,1,1,1,1,1] as $itme)
                    <div class="col-md-4 col-md-offset-0">
                        <img class="img-responsive animate-box" src="homeStatic/images/home-image-3.jpg" alt="About">
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
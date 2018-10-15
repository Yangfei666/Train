@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '相关问答',
                    'p' => '你关心的,你的疑问,我都知道',
                    'img' => 'homeStatic/images/home-image-2.jpg'
                ])
    <div id="fh5co-team-section">
        <div class="container">
            <div class="row about">
                @foreach ([1,1,1,1,1,1] as $itme)
                    <div class="col-md-12 col-md-offset-0">
                        <div class="fh5co-blog animate-box">
                            <div class="meta-date text-center">
                                <p><span class="date">{{$loop->index+1}}</span>{{--<span>June</span><span>2016</span>--}}</p>
                            </div>
                            <div class="desc desc2">
                                <h3><a href="javascript:vode(0)">我是问题我是问题我是问题我是问题我是问题</a></h3>
                                <br/>
                                <p>我是答案我是答案我是答案我是答案我是答案我是答案我是答案我是答案</p>
                                <br/>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
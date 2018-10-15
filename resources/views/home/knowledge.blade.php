@extends('layout.base')

@section('main')
    @include('layout.top',
            [
                'h1' => '瑜伽知识',
                'p' => '副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题',
                'img' => 'homeStatic/images/trainer-5.jpg'
            ])
    <div id="fh5co-blog-section">
        <div class="container">
            <div class="row">
                @foreach ([1,1,1,1,1,1] as $itme)
                    <div class="col-md-12 col-md-offset-0">
                        <div class="fh5co-blog animate-box">
                            <div class="meta-date text-center">
                                <p><span class="date">{{$loop->index+1}}</span>{{--<span>June</span><span>2016</span>--}}</p>
                            </div>
                            <div class="desc desc2">
                                <h3><a href="/knowledgeDetail">我是标题我是标题我是标题我是标题我是标题我是标题</a></h3>
                                <span class="posted_by">我是分类或者作者</span>
                                <span class="comment"><a href="">21<i class="glyphicon glyphicon-eye-open"></i></a></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

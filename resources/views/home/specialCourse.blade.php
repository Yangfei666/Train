@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '特色课程',
                    'p' => '我是副标题我是副标题我是副标题我是副标题我是副标题我是副标题',
                    'img' => 'images/home-image-5.jpg'
                ])
    @include('layout.curriculum',
               [
                   'num' => -1,
                   'curriculum' => [1,2,3,4,5,6,7,8]
               ])
@endsection
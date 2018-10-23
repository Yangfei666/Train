@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '关于我们',
                    'p' => $schoolInfo->abstract,
                    'img' =>  $schoolInfo->img ?  $schoolInfo->img : 'homeStatic/images/home-image-4.jpg'
                ])
        @include('layout.content',
                    [
                        'content' => $schoolInfo->content
                    ])
        @include('layout.teacher',
                    [
                        'num' => 6,
                        'teacher' => [1,2,3,4,5,6,7,8]
                    ])
        @include('layout.curriculum',
                   [
                       'num' => 6,
                       'curriculum' => [1,2,3,4,5,6,7,8]
                   ])
@endsection
@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '关于我们',
                    'p' => $schoolInfo->abstract,
                    'img' =>'homeStatic/images/home-image-4.jpg'
                ])
    @include('layout.content',
                [
                    'content' => $schoolInfo->content
                ])
@endsection
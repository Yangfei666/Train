@extends('layout.base')

@section('main')
    @include('layout.top',
            [
                'h1' => $course->title,
                'p' => $course->summary,
                'img' => $course->img
            ])
    @include('layout.content',
                [
                    'content' => $course->content
                ])
@endsection
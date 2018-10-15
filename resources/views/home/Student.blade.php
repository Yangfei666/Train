@extends('layout.base')

@section('main')
    @include('layout.top',
            [
                'h1' => '学员展示',
                'p' => '副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题副标题',
                'img' => 'homeStatic/images/trainer-5.jpg'
            ])
    <div id="fh5co-team-section" class="fh5co-lightgray-section">
        <div class="container">
            @include('layout.character',
                         [
                             'list' => [1,1,1,1,1,1,1,1,1,1,1,1,1,1],
                             'num' => 10,
                             'url' => '/StudentDetail'
                         ])
        </div>
    </div>
@endsection

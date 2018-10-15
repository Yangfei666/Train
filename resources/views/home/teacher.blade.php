@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '关于我们',
                    'p' => '澳洲亚太瑜伽联盟----瑜伽行业的<b>领跑者</b>。<br/>
                            为瑜伽行业提供了一个培训认证的标准示范。',
                    'img' => 'homeStatic/images/home-image-4.jpg'
                ])
    <div id="fh5co-team-section" class="fh5co-lightgray-section">
        <div class="container">
            @include('layout.character',
                [
                    'list' => [1,1,1,1,1,1,1,1],
                    'num' => -1,
                    'url' => "/teacherDetail"
                ])
        </div>
    </div>
@endsection
@extends('layout.base')

@section('main')
    @include('layout.top',
            [
                'h1' => $teacher->name.'老师',
                'p' => $teacher->summary,
                'img' => '/homeStatic/images/home-image-4.jpg'
            ])
    <div id="fh5co-team-section">
        <div class="container" style="background-image: url({{$teacher -> img}});min-height: 450px;position: relative">
            <div class="row about"
                 style="color: #fff;padding: 0% 20%;
                 background-color: rgba(0, 0, 0, 0.4);
                 position:absolute;
                 bottom:0px">
                <center style="margin-top: 10px">
                    {!! $teacher->content !!}
                </center>
            </div>
        </div>
    </div>
@endsection
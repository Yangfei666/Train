@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '合作机构',
                    'p' => '全国各地,会馆林立',
                    'img' => 'homeStatic/images/hzjg.png'
                ])
    <div id="fh5co-team-section">
        <div class="container">
            @foreach ($environments as $environment)
                @include('layout.title',
                    [
                        'h2' => $environment->title,
                        'p' => ''
                    ])
                <div class="row about">
                    @foreach ($environment->EnvironmentImg as $value)
                        @if($environment->type == '双图显示')
                            <div class="col-md-6 col-md-offset-0">
                                <img class="img-responsive animate-box" src="{{$value->img}}" alt="About">
                            </div>
                        @elseif($environment->type == '三图显示')
                            <div class="col-md-4 col-md-offset-0">
                                <img class="img-responsive animate-box" src="{{$value->img}}" alt="About">
                            </div>
                        @else
                            <div class="col-md-12 col-md-offset-0">
                                <img class="img-responsive animate-box" src="{{$value->img}}" alt="About">
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
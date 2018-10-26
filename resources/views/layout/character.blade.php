<div class="row text-center">
    @foreach ($list as $itme)
        @if ($loop->index == $num)
            @break
        @endif
        <div class="col-md-4 col-sm-6">
            <div class="team-section-grid animate-box" style="background-image: url({{$itme -> img}});">
                <div class="overlay-section">
                    <div class="desc">
                        <h3>{{$itme -> name}}</h3>
                        <span>{{$itme -> level}}</span>
                        <p>{{$itme -> summary}}</p>
                        {{--<p class="fh5co-social-icons">--}}
                            {{--<a href= {{$url}}>详情</a>--}}
                        {{--</p>--}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row text-center">
    @foreach ($list as $itme)
        @if ($loop->index == $num)
            @break
        @endif
        <div class="col-md-4 col-sm-6">
            <div class="team-section-grid animate-box" style="background-image: url(homeStatic/images/trainer-1.jpg);">
                <div class="overlay-section">
                    <div class="desc">
                        <h3>张三</h3>
                        <span>特级教练</span>
                        <p>这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍</p>
                        <p class="fh5co-social-icons">
                            <a href= {{$url}}>详情</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
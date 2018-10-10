
<div id="fh5co-team-section" class="fh5co-lightgray-section">
    <div class="container">
        @include('layout.title',
            [
                'h2' => '教练团队',
                'p' => '我们的每一位老师都对瑜伽充满热诚。无论在瑜伽体式或理论方面，他们都不断自我学习、晋级深造，在瑜伽专业和瑜伽造诣上往往更胜
同业一筹。'
            ])
        <div class="row text-center">
            @foreach ($teacher as $itme)
                @if ($loop->index == $num)
                    @break
                @endif
                <div class="col-md-4 col-sm-6">
                    <div class="team-section-grid animate-box" style="background-image: url(images/trainer-1.jpg);">
                        <div class="overlay-section">
                            <div class="desc">
                                <h3>张三</h3>
                                <span>特级教练</span>
                                <p>这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍</p>
                                <p class="fh5co-social-icons">
                                    <a href="/teacherDetail">详情</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{--老师模块内容--}}
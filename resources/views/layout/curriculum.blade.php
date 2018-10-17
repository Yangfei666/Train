<div id="fh5co-programs-section" class="fh5co-lightgray-section">
    <div class="container">
        @include('layout.title',
                    [
                        'h2' => '我们的课程',
                        'p' => '我们针对不同阶段的瑜伽习练者，我们提供多种学习计划！'
                    ])
        <div class="row text-center">

            @foreach ($curriculum as $itme)
                @if ($loop->index == $num)
                    @break
                @endif
                <div class="col-md-4 col-sm-6">
                    <div class="program animate-box">
                        <img src="homeStatic/images/home-image-5.jpg" style="width: 100%;">
                        <h3>空中瑜伽</h3>
                        <p>这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍这是介绍 </p>
                        <span><a href="/curriculumDetail" class="btn btn-default">查看详情</a></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
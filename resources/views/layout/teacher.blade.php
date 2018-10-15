
<div id="fh5co-team-section" class="fh5co-lightgray-section">
    <div class="container">
        @include('layout.title',
            [
                'h2' => '教练团队',
                'p' => '我们的每一位老师都对瑜伽充满热诚。无论在瑜伽体式或理论方面，他们都不断自我学习、晋级深造，在瑜伽专业和瑜伽造诣上往往更胜
同业一筹。'
            ])
        @include('layout.character',
            [
                'list' => $teacher,
                'num' => $num,
                'url' => "/teacherDetail"
            ])
    </div>
</div>
{{--老师模块内容--}}
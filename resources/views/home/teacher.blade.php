@extends('layout.base')

@section('main')
    @include('layout.top',
                [
                    'h1' => '导师团队',
                    'p' => '汇集国内外业内资深瑜伽教练人才,<br/>
                            不定期的邀请国际顶级瑜伽大师来学院讲学。',
                    'img' => 'homeStatic/images/szjs.png'
                ])
    <div id="fh5co-team-section" class="fh5co-lightgray-section">
        <div class="container">
            @include('layout.character',
                [
                    'list' => $teacher,
                    'num' => -1,
                    'url' => "/teacherDetail"
                ])
        </div>
    </div>
@endsection
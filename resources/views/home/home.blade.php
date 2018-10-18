@extends('layout.base')

@section('main')
            <div class="fh5co-hero">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(homeStatic/images/home-image.jpg);">
                    <div class="desc animate-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h2>专业的瑜伽培训机构</h2>
                                    <h2>澳洲亚太瑜伽联盟</h2>
                                    <h2>中国区唯一培训学校</h2>
                                    <p><span>澳洲亚太瑜伽联盟 <i class="icon-heart3"></i> 中国区唯一培训学校</span></p>
                                    <span><a class="btn btn-primary" href="#">我要报名</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:fh5co-hero -->
            <!-- <div id="fh5co-schedule-section" class="fh5co-lightgray-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="heading-section text-center animate-box">
                                <h2>Class Schedule</h2>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <ul class="schedule">
                                <li><a href="#" class="active" data-sched="sunday">Sunday</a></li>
                                <li><a href="#" data-sched="monday">Monday</a></li>
                                <li><a href="#" data-sched="tuesday">Tuesday</a></li>
                                <li><a href="#" data-sched="wednesday">Wednesday</a></li>
                                <li><a href="#" data-sched="thursday">Thursday</a></li>
                                <li><a href="#" data-sched="monday">Monday</a></li>
                                <li><a href="#" data-sched="saturday">Saturday</a></li>
                            </ul>
                        </div>
                        <div class="row text-center">
            
                            <div class="col-md-12 schedule-container">
            
                                <div class="schedule-content active" data-day="sunday">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-dumbell.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Body Building</h3>
                                            <span>John Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-yoga.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Yoga Programs</h3>
                                            <span>James Smith</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-cycling.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Cycling Program</h3>
                                            <span>Rita Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-boxing.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Boxing Fitness</h3>
                                            <span>John Dose</span>
                                        </div>
                                    </div>
                                </div>
                                END sched-content
            
                                <div class="schedule-content" data-day="monday">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-yoga.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Yoga Programs</h3>
                                            <span>James Smith</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-dumbell.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Body Building</h3>
                                            <span>John Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-boxing.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Boxing Fitness</h3>
                                            <span>John Dose</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-cycling.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Cycling Program</h3>
                                            <span>Rita Doe</span>
                                        </div>
                                    </div>
            
                                </div>
                                END sched-content
            
                                <div class="schedule-content" data-day="tuesday">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-dumbell.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Body Building</h3>
                                            <span>John Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-yoga.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Yoga Programs</h3>
                                            <span>James Smith</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-cycling.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Cycling Program</h3>
                                            <span>Rita Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-boxing.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Boxing Fitness</h3>
                                            <span>John Dose</span>
                                        </div>
                                    </div>
                                </div>
                                END sched-content
            
                                <div class="schedule-content" data-day="wednesday">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-yoga.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Yoga Programs</h3>
                                            <span>James Smith</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-dumbell.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Body Building</h3>
                                            <span>John Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-boxing.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Boxing Fitness</h3>
                                            <span>John Dose</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-cycling.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Cycling Program</h3>
                                            <span>Rita Doe</span>
                                        </div>
                                    </div>
                                </div>
                                END sched-content
            
                                <div class="schedule-content" data-day="thursday">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-dumbell.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Body Building</h3>
                                            <span>John Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-yoga.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Yoga Programs</h3>
                                            <span>James Smith</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-cycling.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Cycling Program</h3>
                                            <span>Rita Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-boxing.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Boxing Fitness</h3>
                                            <span>John Dose</span>
                                        </div>
                                    </div>
                                </div>
                                END sched-content
            
                                <div class="schedule-content" data-day="friday">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-yoga.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Yoga Programs</h3>
                                            <span>James Smith</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-dumbell.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Body Building</h3>
                                            <span>John Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-boxing.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Boxing Fitness</h3>
                                            <span>John Dose</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-cycling.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Cycling Program</h3>
                                            <span>Rita Doe</span>
                                        </div>
                                    </div>
                                </div>
                                END sched-content
            
                                <div class="schedule-content" data-day="saturday">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-dumbell.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Body Building</h3>
                                            <span>John Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-yoga.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Yoga Programs</h3>
                                            <span>James Smith</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-cycling.svg" alt="">
                                            <small>06AM-7AM</small>
                                            <h3>Cycling Program</h3>
                                            <span>Rita Doe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule">
                                            <img src="homeStatic/images/fit-boxing.svg" alt="Cycling">
                                            <small>06AM-7AM</small>
                                            <h3>Boxing Fitness</h3>
                                            <span>John Dose</span>
                                        </div>
                                    </div>
                                </div>
                                END sched-content
                            </div>
            
            
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="fh5co-parallax" style="background-image: url(homeStatic/images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell animate-box">
                                <h1 class="text-center">Commit To Be Fit</h1>
                                <p>Made with love by the fine folks at <a href="#">Freehtml5</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end: fh5co-parallax --> -->
            @include('layout.curriculum',
                       [
                           'num' => 6,
                           'curriculum' => [1,2,3,4,5,6,7,8]
                       ])
            @include('layout.teacher',
                        [
                            'num' => 6,
                            'teacher' => [1,2,3,4,5,6,7,8]
                        ])
            <div class="fh5co-parallax" style="background-image: url(homeStatic/images/home-image-2.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell box-area">
                                <div class="animate-box">
                                    <h1>Fitness Classes this summer</h1>
                                    <p>Pay now and get 25% Discount</p>
                                    <a href="#" class="btn btn-primary">Become A Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end: fh5co-parallax -->
            <div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="heading-section text-center animate-box">
                                <h2>Pricing Plan</h2>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pricing">
                            <div class="col-md-3 animate-box">
                                <div class="price-box animate-box">
                                    <h2 class="pricing-plan">Starter</h2>
                                    <div class="price"><sup class="currency">$</sup>9<small>/month</small></div>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                    <ul class="classes">
                                        <li>15 Cardio Classes</li>
                                        <li class="color">10 Swimming Lesson</li>
                                        <li>10 Yoga Classes</li>
                                        <li class="color">20 Aerobics</li>
                                        <li>10 Zumba Classes</li>
                                        <li class="color">5 Massage</li>
                                        <li>10 Body Building</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Select Plan</a>
                                </div>
                            </div>

                            <div class="col-md-3 animate-box">
                                <div class="price-box animate-box">
                                    <h2 class="pricing-plan">Basic</h2>
                                    <div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                    <ul class="classes">
                                        <li>15 Cardio Classes</li>
                                        <li class="color">10 Swimming Lesson</li>
                                        <li>10 Yoga Classes</li>
                                        <li class="color">20 Aerobics</li>
                                        <li>10 Zumba Classes</li>
                                        <li class="color">5 Massage</li>
                                        <li>10 Body Building</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Select Plan</a>
                                </div>
                            </div>

                            <div class="col-md-3 animate-box">
                                <div class="price-box animate-box popular">
                                    <h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
                                    <div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                    <ul class="classes">
                                        <li>15 Cardio Classes</li>
                                        <li class="color">10 Swimming Lesson</li>
                                        <li>10 Yoga Classes</li>
                                        <li class="color">20 Aerobics</li>
                                        <li>10 Zumba Classes</li>
                                        <li class="color">5 Massage</li>
                                        <li>10 Body Building</li>
                                    </ul>
                                    <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                                </div>
                            </div>

                            <div class="col-md-3 animate-box">
                                <div class="price-box animate-box">
                                    <h2 class="pricing-plan">Unlimited</h2>
                                    <div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                    <ul class="classes">
                                        <li>15 Cardio Classes</li>
                                        <li class="color">10 Swimming Lesson</li>
                                        <li>10 Yoga Classes</li>
                                        <li class="color">20 Aerobics</li>
                                        <li>10 Zumba Classes</li>
                                        <li class="color">5 Massage</li>
                                        <li>10 Body Building</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Select Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="heading-section animate-box">
                                    <h2>Recent from Blog</h2>
                                </div>
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                                <div class="fh5co-blog animate-box">
                                    <div class="inner-post">
                                        <a href="#"><img class="img-responsive" src="homeStatic/images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <div class="desc">
                                        <h3><a href=""#>Starting new session of body building this summer</a></h3>
                                        <span class="posted_by">Posted by: Admin</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                        <p>Far far away, behind the word mountains</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                                <div class="fh5co-blog animate-box">
                                    <div class="inner-post">
                                        <a href="#"><img class="img-responsive" src="homeStatic/images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <div class="desc">
                                        <h3><a href=""#>Starting new session of body building this summer</a></h3>
                                        <span class="posted_by">Posted by: Admin</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                        <p>Far far away, behind the word mountains</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="heading-section animate-box">
                                    <h2>Upcoming Events</h2>
                                </div>
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                                <div class="fh5co-blog animate-box">
                                    <div class="meta-date text-center">
                                        <p><span class="date">14</span><span>June</span><span>2016</span></p>
                                    </div>
                                    <div class="desc desc2">
                                        <h3><a href=""#>Starting new session of body building this summer</a></h3>
                                        <span class="posted_by">Posted by: Admin</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                                <div class="fh5co-blog animate-box">
                                    <div class="meta-date text-center">
                                        <p><span class="date">13</span><span>June</span><span>2016</span></p>
                                    </div>
                                    <div class="desc desc2">
                                        <h3><a href=""#>Starting new session of body building this summer</a></h3>
                                        <span class="posted_by">Posted by: Admin</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                        <a href="#" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fh5co-blog-section -->
@endsection

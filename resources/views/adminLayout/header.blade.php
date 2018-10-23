<div id="mws-header" class="clearfix">

    <!-- Logo Container -->
    <div id="mws-logo-container">

        <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        <div id="mws-logo-wrap">
            <img src="/adminStatic/images/mws-logo.png">
        </div>
    </div>

    <!-- User Tools (notifications, logout, profile, change password) -->
    <div id="mws-user-tools" class="clearfix">

        <!-- Notifications -->
        {{--<div id="mws-user-notif" class="mws-dropdown-menu">
            <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>

            <!-- Unread notification count -->
            <span class="mws-dropdown-notif">35</span>

            <!-- Notifications dropdown -->
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-notifications">
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Notifications</a>
                    </div>
                </div>
            </div>
        </div>--}}

        <!-- Messages -->
        <div id="mws-user-message" class="mws-dropdown-menu">
            <a href="javascript:void (0)" title="待处理消息" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>

            <!-- Unred messages count -->
            <span class="mws-dropdown-notif">12</span>

            <!-- Messages dropdown -->
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-messages">
                        @foreach($arr as $item)
                            @if($loop->index >= 3)
                                @break
                            @endif
                        <li class="read">
                            <a href="#">
                                <span class="sender">张三</span>
                                <span class="message"> 我要报名我要报名我要报名我要报名我要报名我要报名</span>
                                <span class="time">2018-10-10</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mws-dropdown-viewall">
                        <center><a href="#">查看全部</a></center>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Information and functions section -->
        <div id="mws-user-info" class="mws-inset">

            <!-- User Photo -->
            <div id="mws-user-photo">
                <img src="/adminStatic/example/profile.jpg" alt="User Photo">
            </div>

            <!-- Username and Functions -->
            <div id="mws-user-functions">
                <div id="mws-username">
                    Hello, {{$name}}
                </div>
                <ul>
                    <li><a href="#">修改密码</a></li>
                    <li><a href="adminHome.blade.php">退出</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
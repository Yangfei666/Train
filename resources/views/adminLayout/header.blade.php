<div id="mws-header" class="clearfix">

    <div id="mws-logo-container">

        <div id="mws-logo-wrap">
            <img src="/homeStatic/images/logo1.png">
            <span style="color: #fff;font-family:Verdana;font-size: 30px;font-weight: 900;vertical-align:middle">admin</span>
        </div>
    </div>

    <div id="mws-user-tools" class="clearfix">

        <div id="mws-user-message" class="mws-dropdown-menu">
            <a href="javascript:void (0)" title="待处理消息" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>

            <span class="mws-dropdown-notif">12</span>

            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-messages">
                        @foreach([1,1,1,1,1,1,1] as $item)
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

        <div id="mws-user-info" class="mws-inset">

            <div id="mws-user-photo">
                <img src="/adminStatic/example/profile.jpg" alt="User Photo">
            </div>

            <div id="mws-user-functions">
                <div id="mws-username">
                    Hello, {{\Auth::guard('admin')->user()->name}}
                </div>
                <ul>
                    <li><a href="/admin/user/me/setting">修改密码</a></li>
                    <li><a href="/admin/logout">退出</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
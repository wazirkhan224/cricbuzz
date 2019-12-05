<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar ps ps--active-y">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu metismenu">
                <li class="app-sidebar__heading">Dashboards</li>

                <li class="app-sidebar__heading">Live Streaming</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-look"></i>
                        Watch Live
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="{{route('admin_live_streaming')}}">
                                <i class="metismenu-icon"></i>
                                visit link
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Videos -->
                <li class="app-sidebar__heading">Videos</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-film"></i>
                        Add
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="{{route('admin_videos')}}">
                                <i class="metismenu-icon"></i>
                                add videos
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end videos category -->

                <!-- Blog -->
                <li class="app-sidebar__heading">Blog</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-chat"></i>
                        Posts
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="{{route('admin_post')}}">
                                <i class="metismenu-icon"></i>
                                Add Posts
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Upcoming Series -->
                <li class="app-sidebar__heading">Upcoming Series</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-airplay"></i>
                        Tournament
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="{{route('admin_upcoming-tour')}}">
                                <i class="metismenu-icon"></i>
                                Categories
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 248px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 90px;"></div></div></div>
    </div>

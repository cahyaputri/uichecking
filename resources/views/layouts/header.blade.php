<?php
?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0; margin-left: 10px; " >
            <a href="{{asset('index')}}" class="site_title">
                <img src="{{asset('images/navbar.png')}}" alt="..." class="profile_img" style="height: 90px; width: 200px; ">
            </a>
        </div>

        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{asset('index')}}">UI Testing</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
<!-- end sidebar menu -->

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">

                <li role="presentation" class="nav-item dropdown open">
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                        aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="{{asset('images/mndr.jpeg')}}" alt="Profile Image"/></span>
                                <span>
                            <span>Elke Cahya</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image"/></span>
                                <span>
                            <span>Elke Cahya</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image"/></span>
                                <span>
                            <span>Elke Cahya</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image"/></span>
                                <span>
                            <span>Elke Cahya</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->


<div class="sidebar">
            <div class="brand">
                <a href="index.html"><img src="klorofil/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{route('dashboard')}}" {{Route::is('dashboard')?'class=active':''}}><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{route('elements')}}" {{Route::is('elements')?'class=active':''}}><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
                        <li><a href="{{route('charts')}}" {{Route::is('charts')?'class=active':''}}><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
                        <li><a href="{{route('panels')}}" {{Route::is('panels')?'class=active':''}}><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
                        <li><a href="{{route('notification')}}" {{Route::is('notification')?'class=active':''}}><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed {{Route::is('profile')?'active':''}}"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{{route('profile')}}" {{Route::is('profile')?'class=active':''}}>Profile</a></li>
                                    <li><a href="{{route('login')}}" {{Route::is('login')?'class=active':''}}>Login</a></li>
                                    <li><a href="{{route('register')}}" {{Route::is('login')?'class=active':''}}>Login</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{route('tables')}}" {{Route::is('tables')?'class=active':''}}><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                        <li><a href="{{route('typography')}}" {{Route::is('typography')?'class=active':''}}><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
                        <li><a href="{{route('icons')}}" {{Route::is('icons')?'class=active':''}}><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
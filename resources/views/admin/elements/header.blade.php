<div class="header-main">
    <div class="logo-w3-agile">
        <h1><a href="dashboard.php">Nhân Huy Travel</a></h1>
    </div>


    <div class="profile_details w3l">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <div class="profile_img">
                        <span class="prfil-img"><img src="{{ asset('public/backend/images/User-icon.png') }}"
                                alt=""> </span>
                        <div class="user-name">
                            <p>Welcome</p>
                            <span><?php $name = Session::get('username');
                            if ($name) {
                                echo $name;
                            }
                            ?></span>
                        </div>
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                        <div class="clearfix"></div>
                    </div>
                </a>
                <ul class="dropdown-menu drp-mnu">
                    <li> <a href="profile_admin.html"><i class="fa fa-user"></i> Profile</a> </li>
                    <li> <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="clearfix"> </div>
</div>

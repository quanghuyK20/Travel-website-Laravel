<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu">
            <li><a href="{{ URL::to('/dashboard') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
                    <div class="clearfix"></div>
                </a></li>

            <li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Quản lý
                        Tour</span> <span class="fa fa-angle-right" style="float: right"></span>
                    <div class="clearfix"></div>
                </a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="{{ URL::to('/themtour') }}">Thêm</a></li>
                    <li id="menu-academico-avaliacoes"><a href="{{ URL::to('/danhsachtour') }}">Danh sách</a></li>
                </ul>
            </li>
            <li id="menu-academico"><a href="{{ URL::to('/manageusers') }}"><i class="fa fa-users"
                        aria-hidden="true"></i><span> Người dùng</span>
                    <div class="clearfix"></div>
                </a></li>
            {{-- <li><a href="{{URL::to('/bookings')}}"><i class="fa fa-list" aria-hidden="true"></i> <span> Đặt tour</span>
					<div class="clearfix"></div>
				</a></li> --}}
            <li><a href="{{ URL::to('/manage-booking') }}"><i class="fa fa-list" aria-hidden="true"></i> <span> Đặt
                        tour</span>
                    <div class="clearfix"></div>
                </a></li>
            <li><a href="{{ URL::to('/ykienkhachhang') }}"><i class="fa fa-table"></i> <span> Khiếu nại</span>
                    <div class="clearfix"></div>
                </a></li>
            <li><a href="{{ URL::to('/yeucau') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span> Yêu
                        cầu</span>
                    <div class="clearfix"></div>
                </a></li>
            <li><a href="{{ URL::to('/manage_gallery') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span> Ảnh gợi ý</span>
                    <div class="clearfix"></div>
                </a></li>
            <li><a href="{{ URL::to('/manage_dichvu') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span> Dịch
                        vụ</span>
                    <div class="clearfix"></div>
                </a></li>
            <li id="menu-academico"><a href="{{ URL::to('/manage-tin-tuc') }}"><i class="fa fa-list-ul"
                        aria-hidden="true"></i><span> Tin tức</span>
                    <div class="clearfix"></div>
                </a>
            <li id="menu-academico"><a href="{{ URL::to('/about') }}"><i class="fa fa-list-ul"
                        aria-hidden="true"></i><span> Giới thiệu</span>
                    <div class="clearfix"></div>
                </a>
            </li>
        </ul>
    </div>
</div>

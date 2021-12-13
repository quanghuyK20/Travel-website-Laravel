@extends('package_layout')
@section('content')
    <link href="https://cafefcdn.com/web_css/cafef.cate.20200619v1.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://cafefcdn.com/frontend/scripts/kby_v1.js" async></script>
    <script type="text/javascript">
        try {
            if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone|webOS)/i) != null) {
                var html = document.getElementById('html');
                if (html && !html.classList.contains('smartphone')) {
                    html.classList.add('smartphone');
                }
            }
        } catch (e) {}
    </script>

    <form method="post" action="" id="form1">
        <div class="content_cate wp1040">
            <div class="left_cate">
                <script type="text/javascript">
                    var _ADM_Channel = '%2ftag%2fdu-lich%2f';
                </script>
                <div class="listTitle tag wow fadeInUp animated">
                    <span>Tin tức, bài viết mới nhất về</span>
                    <h1>du lịch</h1>
                </div>
                <ul class="timelineother wow fadeInUp animated">
                    @foreach ($all_tintuc as $key => $value)
                        <li class="item wow fadeInUp animated">
                            <a class="avatar wow fadeInUp animated"
                                href=" {{ $value->link }}"
                                title="Du lịch Thủ đ&#244; thu về 14 tỷ đồng trong th&#225;ng 10"><img
                                    src="{{ URL::to('public/backend/pacakgeimages/' . $value->image) }}"
                                    alt="Du lịch Nhân Huy"
                                    title="Du lịch Nhân Huy" /></a>
                            <div class="taginfo wow fadeInUp animated">
                                <h2 class="titlehidden wow fadeInUp animated"><a
                                        href="{{ $value->link }}"
                                        title="Du lịch Nhân Huy">
                                        {{ $value->ten_bai_viet }}
                                    </a></h2>
                                <div class="date mgt4 wow fadeInUp animated"> {{ $value->created_at }}</div>
                                <p class="sapo wow fadeInUp animated">
                                    {{ $value->noi_dung_ngan }}
                                </p>
                                {{-- <p class="tags"><strong>Tags: </strong><a href="#">du lịch</a>, <a href="#">khách tham
                                    quan</a>, <a href="#">vườn quốc gia</a>, <a href="#">Vườn quốc gia Ba Vì</a>, <a
                                    href="#">khách du lịch</a>, <a href="#">du lịch nội địa</a></p> --}}
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

        <div class="clearfix"></div>
        <div id="adm_sticky_footer"></div>
        <div class="footer hide-loading">
            <div class="wp1040">
                <div class="clr mgt15">
                    <div id="admzone100"></div>
                    <script>
                        admicroAD.unit.push(function() {
                            admicroAD.show('admzone100')
                        });
                    </script>
                </div>
            </div>
        </div>
    </form>

    <script async src="//static.contineljs.com/js_boxapp/tagsponsorz_40403.js"></script>

@endsection

@extends('package_layout')
@section('content')
    {{-- <section class="w3l-specification-6">
        <!-- /specification-6-->
        <div class="specification-6-mian py-5">
            <div class="container py-lg-5">
                <div class="row story-6-grids text-left">
                    
                    <div class="col-lg-7 story-gd pl-lg-4">
                        <div class="row story-info-content mt-md-5 mt-4">
                            @foreach ($all_infor as $key => $value)
                                <div class="col-md-6 story-info" style="text-align: center;">
                                    <h5> <a href="#">{{ $value->tieu_de }}</a></h5>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $value->image_gt) }}"
                                        class="img-fluid" alt="/">
                                        <p> {{ $value->noi_dung }}</p>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>


    <!--/team-sec--> --}}
 
    <section class="w3l-feature-with-photo-1">
        <div class="feature-with-photo-hny py-5">
            <div class="container py-lg-5">
                <div class="title-content mb-lg-5 mb-4 wow fadeInUp animated">
                    <span class="sub-title">Giới thiệu</span>
                    <h3 class="hny-title"> Nhân Huy Travel</h3>
                </div>
                <div class="feature-with-photo-content">
                    <div class="ab-in-flow row mb-lg-5 mb-3">
                        <div class="col-lg-6 ab-left wow fadeInUp animated">
                            <img src="{{ asset('public/frontend/images/1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 ab-right pl-lg-4 ">
                            <h3 class="hny-title wow fadeInUp animated">
                                Thư ngỏ
                            </h3>
                            <p class="my-4 wow fadeInUp animated">Nhân Huy Travel đã ghi dấu ấn của mình với thông điệp
                                “Nâng tầm giá trị cuộc sống”. Những giá trị mà chúng tôi luôn nỗ lực hướng đến đó là: Giá
                                trị mới mẻ, giá trị lòng tin và giá trị vượt trội.</p>
                            <p class="mb-4 wow fadeInUp animated"> </p>
                        </div>
                    </div>
                    <div class="three-grids d-grid grid-columns-3 mt-lg-5 wow fadeInUp animated">
                        <div class="grid">
                            <h3 class="hny-titlewow fadeInUp animated">Chúng tôi cùng nhau phát triển </h3>
                        </div>
                        <div class="grid wow fadeInUp animated">
                            <h4><a href="#">Tầm nhìn</a></h4>
                            <p>Đưa Nhân Huy Travel trở thành một giá trị cốt lõi trong cuộc sống của người dân Việt Nam.</p>
                        </div>
                        <div class="grid wow fadeInUp animated">
                            <h4><a href="#">Sứ mệnh</a></h4>
                            <p>NGƯỜI TIÊN PHONG</p>
                        </div>
                        <div class="grid wow fadeInUp animated">
                            <h4><a href="#">Giá trị cốt lõi:</a></h4>
                            <p>• Tính chuyên nghiệp <br>
                                • Cảm xúc thăng hoa <br>
                                • Gia tăng giá trị</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-content-4">
        <!-- /content-6-section -->
        <div class="content-4-main py-5">
            <div class="container py-lg-5">
                <div class="content-info-in row">
                    <div class="content-left col-lg-6 text-lg-right pr-lg-3 wow fadeInUp animated">
                        <h3 class="hny-title">
                            Tại sao bạn nên chọn chúng tôi ?</h3>
                        <p>Nhân Huy Travel - Người bạn đồng hành đáng tin cậy
                            Trung thành với triết lý “khách hàng là trung tâm”, công ty luôn đặt mình vào vị trí du khách để
                            thấu hiểu và lắng nghe từ những điều nhỏ nhất. Trên mỗi hành trình, chúng tôi luôn trân trọng,
                            nâng niu từng khoảnh khắc và hoàn thành tốt nhất sứ mệnh phục vụ của mình, để chuyến đi không
                            đơn thuần là kỳ nghỉ hoàn hảo mà còn là dấu ấn khó phai trong lòng lữ khách.</p>
                        <img src="{{ asset('public/frontend/images/1.jpg') }}" class="img-fluid mt-3" alt="">
                    </div>
                    <div class="content-right col-lg-6 pl-lg-4">
                        <div class="row content4-right-grids mb-lg-5 mb-4 wow fadeInUp animated">
                            <div class="col-md-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fa fa-thumbs-o-up"></span>
                                </div>
                            </div>
                            <div class="col-md-10 content4-right-info wow fadeInUp animated">
                                <h6><a href="#">SẢN PHẨM ĐA DẠNG, CHẤT LƯỢNG</a></h6>
                                <p>Hàng năm, Vietravel tung ra rất nhiều chương trình mới để đáp ứng nhu cầu ngày càng cao của du khách.</p>
                            </div>

                        </div>
                        <div class="row content4-right-grids mb-lg-5 mb-4 wow fadeInUp animated">
                            <div class="col-md-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fa fa-tags"></span>
                                </div>
                            </div>
                            <div class="col-md-10 content4-right-info wow fadeInUp animated">
                                <h6><a href="#">LUÔN CÓ MỨC GIÁ TỐT NHẤT</a></h6>
                                <p>Bất kể ngày thường hay mùa lễ Tết, Nhân Huy Travel luôn có mức giá tốt nhất với chất lượng dịch vụ không đổi</p>
                            </div>

                        </div>
                        <div class="row content4-right-grids mb-lg-5 mb-4 wow fadeInUp animated">
                            <div class="col-md-2 content4-right-icon">
                                <div class="content4-icon">
                                    <span class="fa fa-suitcase"></span>
                                </div>
                            </div>
                            <div class="col-md-10 content4-right-info wow fadeInUp animated">
                                <h6><a href="#">ĐỘI NGŨ NHÂN VIÊN CHUYÊN NGHIỆP, TẬN TÌNH</a></h6>
                                <p>Vietravel sở hữu đội ngũ lãnh đạo, cán bộ - nhân viên giỏi và tận tâm với công việc. Với tâm niệm, làm việc bằng tất cả trái tim, những nhân viên cần mẫn không quản ngày đêm.</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="w3l-covers-vv-main">
		<div class="covers-19">
			<div class="container">
				<div class="end-covers-19">
					<div class="midd-cover-19">
						<span class="sub-title">Hãy trải nghiệm nhiều hơn</span>
						<h3 class="hny-title"><a href="services.html">Du lịch - Trải nghiệm - Cuộc sống.
							</a></h3>
						<p>Sự thú vị trong cuộc sống có thể bắt đầu từ những cuộc hành trình đầy thú vị</p>
						<div class="button-6">
							<div class="eff-6"></div>
							<a href="#">Đọc tiếp</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="w3l-team-main">
        <div class="team py-5">
            <div class="container py-lg-5 wow fadeInUp animated">
                <h3 class="hny-title text-center">
                    Team <span></span></h3>
                <div class="row team-row mt-5">
                    <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative wow fadeInUp animated">
                        <a href="#"><img src="{{ asset('public/frontend/images/nhan.jpg') }}"
                                class="team_member img-fluid" alt="Team Member"></a>
                        <div class="team_info mt-3 position-absolute">
                            <h3><a href="#" class="team_name wow fadeInUp animated">Trần Viết Nhân</a></h3>
                            <span class="team_role wow fadeInUp animated">Marketing </span>
                        </div>
                    </div>
                    <!-- end team member -->
                    <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative wow fadeInUp animated">
                        <a href="#"><img src="{{ asset('public/frontend/images/nhanhuy.png') }}"
                                class="team_member img-fluid" alt="Team Member"></a>
                        <div class="team_info mt-3 position-absolute">
                            <h3><a href="#" class="team_name"></a></h3>
                            <span class="team_role"></span>
                        </div>
                    </div>
                    <!-- end team member -->
                    <div class="col-lg-4 col-sm-6 team-wrapper position-relative wow fadeInUp animated">
                        <a href="#"><img src="{{ asset('public/frontend/images/huy.jpg') }}" class="team_member img-fluid"
                                alt="Team Member"></a>
                        <div class="team_info mt-3 position-absolute">
                            <h3><a href="#" class="team_name">Lê Quang Huy</a></h3>
                            <span class="team_role">Founder & CEO</span>
                        </div>
                    </div>
                    <!-- end team member -->
                </div>
            </div>
    </section>
@endsection

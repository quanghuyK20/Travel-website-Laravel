<?php
    $contact_message = Session::get('contact_message');
    if ($contact_message) {
        echo '<script language="javascript">';
        echo 'alert("Gửi thông tin thành công")';
        echo '</script>';
        Session::put('contact_message', null);
    }
    ?>
@extends('package_layout')
@section('content')
    {{-- <div class="banner">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay="0s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> HN TRAVEL - Contact</h1>
        </div>
    </div> --}}
    <!-- contacts -->
    <section class="w3l-contacts-8">
        <div class="contacts-9 section-gap py-5">
            <div class="container py-lg-5">
                <div class="row top-map">
                    <div class="col-lg-6 partners">
                        <div class="cont-details ">
                            <h3 class="hny-title mb-0 wow fadeInUp animated" data-wow-delay=".5s">Liên <span>Hệ</span></h5>
                                <p class="mb-5 wow fadeInUp animated" data-wow-delay=".5s">Nếu có thắc mắc hãy liên hệ ngay
                                    với chúng tôi !</p>
                                <p class="margin-top wow fadeInUp animated" data-wow-delay=".5s"><span
                                        class="texthny wow fadeInUp animated" data-wow-delay=".5s">Số điện thoại : </span> <a
                                        href="tel:+(21) 255 999 8899">+(21)
                                        0914 888 999</a></p>
                                <p class="wow fadeInUp animated" data-wow-delay=".5s"> <span
                                        class="texthny wow fadeInUp animated" data-wow-delay=".5s">Email : </span> <a
                                        href="mailto:info@example.com">
                                        nhanhuy@gmail.com</a></p>
                                <p class="margin-top wow fadeInUp animated" data-wow-delay=".5s">Địa chỉ: Số 147 Lê Văn
                                    Hiến, quận Ngũ Hành Sơn, Đà Nẵng </p>
                        </div>
                        <div class="hours wow fadeInUp animated" data-wow-delay=".5s">
                            <h3 class="hny-title wow fadeInUp animated" data-wow-delay=".5s"> Hỗ <span>trợ</span></h5>
                                <p> Chăm sóc khách hàng : 090 010 999 </p>
                                <p> Đặt tour online : 090 010 888 </p>
                                <p> Khiếu nại: 010 555 999</p>
                                <p> Hợp tác: nhanhuy@gmail.com</p>
                                <p> Thời gian : Thứ Hai đến Thứ Sáu, 8h00 - 17h00</p>
                        </div>
                    </div>
                    <div class="col-lg-6 map wow fadeInUp animated">
                        <iframe class="wow fadeInUp animated" data-wow-delay=".5s"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.738711613766!2d108.2510487152692!3d15.975015746198197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1632839603165!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <section class="w3l-contact-section-form" style="margin-top: -100px;">
            <div class="contact-sec-inner py-5">
                <div class="container py-lg-5">
                    <div class="contact-form-mainv">
                        <span class="sub-title wow fadeInUp animated" data-wow-delay=".5s">Đăng kí nhận thông tin</span>
                        <h3 class="hny-title wow fadeInUp animated" data-wow-delay=".5s">Tận hưởng dịch vụ từ Nhân Huy
                            Travel</h3>
                        <p class="para-contact mb-lg-5 mb-4 wow fadeInUp animated" data-wow-delay=".5s">Hân hạnh được hỗ trợ
                            bạn
                        </p>
                        <form  action="{{ URL::to('/contact-us') }}" method="post" name="enquiry">
                            {{ csrf_field() }}
                            <div class="row wow fadeInUp animated" data-wow-delay=".5s">
                                <div class="col-lg-4 form-group">
                                    <label for="w3lName">Tên bạn</label>
                                    <input type="text" name="contact_name" id="w3lName">
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label for="w3lSender">Email</label>
                                    <input type="text" name="email" id="w3lSender">
                                </div>
                                <div class="col-lg-4 form-group">
                                    <label for="w3lSubject">Điều bạn quan tâm</label>
                                    <input type="text" name="content" id="w3lSubject">
                                </div>
                            </div>
                            <div class="form-group wow fadeInUp animated" data-wow-delay=".5s">
                                <label for="w3lSubject">Nội dung</label>
                                <textarea name="main_content" placeholder="" required=""></textarea>
                            </div>
                            <div class="form-submit text-right mt-4 wow fadeInUp animated" data-wow-delay=".5s">
                                <button type="submit" class="btn submit" name="contact_submit">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- //contacts -->
@endsection

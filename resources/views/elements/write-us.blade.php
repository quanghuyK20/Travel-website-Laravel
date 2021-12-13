

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<section>
				<form name="help" action="{{URL::to('/y-kien')}}" method="post">
					{{ csrf_field() }}
					<div class="modal-body modal-spa">
						<div class="writ">
							<h4>Chúng tôi ghi nhận sự đóng góp từ bạn</h4>
							<ul>
								<li class="na-me">
									<select id="country" name="issue" class="frm-field required sect" required="">
										<option value="">Chọn vấn đề</option>
										<option value="Trải nghiệm">Trải nghiệm</option>
										<option value="Dịch vụ">Dịch vụ</option>
										<option value="Chi phí">Chi phí</option>
										<option value="Địa điểm du lịch">Địa điểm du lịch</option>
										<option value="Other">Khác</option>
									</select>
								</li>

								<li class="descrip">
									<input class="special" type="text" placeholder="Nội dung" name="noi_dung" required="">
								</li>
								<div class="clearfix"></div>
							</ul>
							<div class="sub-bn">
								<form>
									<button type="submit" name="submit" class="subbtn">Gửi</button>
								</form>
							</div>
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
</div>
<div class="bottom inner">
	<div class="contain_bottom">
		<div class="item_bottom_hethong">
			<div class="title_bottom"><span>Hệ thống đối tác</span></div>
			<div class="content_bottom_doitac">
				<?php foreach($hethongdoitac as $key => $value) { ?>
					<div class="item_doitac_index">
						<h3><?=$value['ten_vi']?></h3>
						<p><?=$value['mota_vi']?></p>
					</div>
				<?php } ?>
			</div><!--end content bottom-->
		</div><!--item bottom-->
		<div class="item_bottom_lienhe">
			<div class="title_bottom"><span>Liên hệ trở thành đối tác</span></div>
			<div class="content_bottom_lienhe">
				<p>Hãy nhanh tay liên hệ để trở thành đối tác của chúng tôi, bạn còn chờ gì nữa !</p>
				<?php include _template.'form/form_dathang.php'; ?>
			</div><!--end content bottom-->
		</div><!--item bottom-->
		<div class="item_bottom_hinhanh">
			<div class="content_bottom">
				<?php foreach($album_index as $key => $value) { ?>
					<div class="img_album"><img src="<?=thumb($value['photo'],_upload_album_l,$value['tenkhongdau'],306,390)?>" alt="<?=$value['ten_'.$lang]?>" class="w100 trs03"/></div>
				<?php } ?>
			</div><!--end content bottom-->
		</div><!--item bottom-->
	</div><!--end contain bottom-->
</div><!--bottom-->
<div class="background_taisao" style="background:url(<?=_upload_hinhanh_l.$bg_taisao['photo_vi']?>)">
	<div class="inner">
		<div class="title_taisao"><h3>Sữa Chua Nếp Cẩm Lâm 90</h3></div>
	<div class="row_p">
	<div class="owl_taisao">
		<?php foreach($taisao_index as $key => $value) { ?>
			<div class="col_taisao col-md-12 col-sm-12 col-smx-12 col-xs-12">
				<div class="box_taisao">
					<div class="img_taisao"><a href="tai-sao-chon-chung-toi/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html"><img src="<?=thumb($value['photo'],_upload_baiviet_l,$value['tenkhongdau'],62,62)?>" alt="<?=$value['ten_'.$lang]?>" class="w100 trs03"/></div>
					<div class="desc_taisao">
						<a href="tai-sao-chon-chung-toi/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html"><h3><?=$value['ten_vi']?></h3></a>
						<p><?=$value['mota_vi']?></p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	</div>
	</div>
</div>
<div class="background_hinhanh">
	<div class="inner">
		<div class="title_main"><span>Hình ảnh khách hàng</span></div>
		<div class="content_main">
			<div class="left_kh">
				<div class="img_kh">
					<img src="<?=thumb($hinhanhkhachhang[0]['photo'],_upload_album_l,$hinhanhkhachhang[0]['tenkhongdau'],285,230)?>" alt="<?=$hinhanhkhachhang[0]['ten_'.$lang]?>" class="w100 trs03"/>
					<div class="name_kh"><a href="khach-hang/<?=$hinhanhkhachhang[0]['tenkhongdau']?>-<?=$hinhanhkhachhang[0]['id']?>.html"><h3><?=$hinhanhkhachhang[0]['ten_vi']?></h3></a></div>
				</div>
				<div class="img_kh">
					<img src="<?=thumb($hinhanhkhachhang[1]['photo'],_upload_album_l,$hinhanhkhachhang[1]['tenkhongdau'],285,230)?>" alt="<?=$hinhanhkhachhang[1]['ten_'.$lang]?>" class="w100 trs03"/>
					<div class="name_kh"><a href="khach-hang/<?=$hinhanhkhachhang[1]['tenkhongdau']?>-<?=$hinhanhkhachhang[1]['id']?>.html"><h3><?=$hinhanhkhachhang[1]['ten_vi']?></h3></a></div>
				</div>
			</div>
			<div class="mid_kh">
				<div class="img_kh">
					<img src="<?=thumb($hinhanhkhachhang[2]['photo'],_upload_album_l,$hinhanhkhachhang[2]['tenkhongdau'],590,476)?>" alt="<?=$hinhanhkhachhang[2]['ten_'.$lang]?>" class="w100 trs03"/>
					<div class="name_kh"><a href="khach-hang/<?=$hinhanhkhachhang[2]['tenkhongdau']?>-<?=$hinhanhkhachhang[2]['id']?>.html"><h3><?=$hinhanhkhachhang[2]['ten_vi']?></h3></a></div>
				</div>
			</div>
			<div class="right_kh">
				<div class="img_kh">
					<img src="<?=thumb($hinhanhkhachhang[3]['photo'],_upload_album_l,$hinhanhkhachhang[3]['tenkhongdau'],285,230)?>" alt="<?=$hinhanhkhachhang[3]['ten_'.$lang]?>" class="w100 trs03"/>
					<div class="name_kh"><a href="khach-hang/<?=$hinhanhkhachhang[3]['tenkhongdau']?>-<?=$hinhanhkhachhang[3]['id']?>.html"><h3><?=$hinhanhkhachhang[3]['ten_vi']?></h3></a></div>
				</div>
				<div class="img_kh">
					<img src="<?=thumb($hinhanhkhachhang[4]['photo'],_upload_album_l,$hinhanhkhachhang[4]['tenkhongdau'],285,230)?>" alt="<?=$hinhanhkhachhang[4]['ten_'.$lang]?>" class="w100 trs03"/>
					<div class="name_kh"><a href="khach-hang/<?=$hinhanhkhachhang[4]['tenkhongdau']?>-<?=$hinhanhkhachhang[4]['id']?>.html"><h3><?=$hinhanhkhachhang[4]['ten_vi']?></h3></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once _template.'layout/cuahang.php';?>
<div class="clear"></div>
<div class="bottom_footer">
	<div class="inner">
		<div class="left_tintuc">
			<div class="title_bottom"><span>Tin tức nổi bật</span></div>
			<div class="box_tintuc_bottom">
				<div class="img_tintuc_0"><img src="<?=thumb($tintuc_index[0]['photo'],_upload_baiviet_l,$tintuc_index[0]['tenkhongdau'],205,165)?>" alt="<?=$tintuc_index[0]['ten_'.$lang]?>" class="w100 trs03"></div>
				<div class="desc_tintuc_0">
					<a href="tin-tuc/<?=$tintuc_index[0]['tenkhongdau']?>-<?=$tintuc_index[0]['id']?>.html"><h3><?=$tintuc_index[0]['ten_vi']?></h3></a>
					 <div class="box_news_date"><i class="fa fa-calendar"></i> <?=date('d-m-Y',$tintuc_index[0]['ngaytao'])?></div>
					<p><?=_substr(stripcslashes($tintuc_index[0]['mota_'.$lang]),250)?></p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="owl_tintuc row_p">
				<?php foreach($tintuc_index as $key => $value) { ?>
					<div class="col_tintuc col-md-12 col-sm-12 col-smx-12 col-xs-1">
						<div class="box_tintuc">	
							<div class="img_tintuc">
								<img src="<?=thumb($value['photo'],_upload_baiviet_l,$value['tenkhongdau'],205,140)?>" alt="<?=$value['ten_'.$lang]?>" class="w100 trs03"/>
							</div>
							<div class="desc_tintuc">
								<a href="tin-tuc/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html"><h3><?=$value['ten_vi']?></h3></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="right_tintuc">
			<div class="title_bottom"><span>Video</span></div>
			<?php include_once _template."layout/module/video.php"; ?>
		</div>
	</div>
</div>
<div class="clear"></div>
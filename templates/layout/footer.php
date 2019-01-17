<div id="footer">
	<div class="inner">
		<div class="left_footer">
			<div class="title_footer">Thống kê truy cập</div>
			<div class="content_footer">
				<?=$footer['noidung']?>
			</div>
		</div><!--left footer-->
		<div class="center_footer">
				<div class="title_footer">Fanpage facebook</div>
			<div class="content_footer">
				<div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-tabs="timeline" data-width="285" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$row_setting['facebook']?>" class="fb-xfbml-parse-ignore"><a href="<?=$row_setting['facebook']?>">Facebook</a></blockquote></div>
			</div>
		</div><!--left footer-->

		<div class="mid_footer">
			<div class="title_footer">Chăm sóc khách hàng</div>
			<div class="content_footer">
				<ul>
					<?php foreach($chinhsach as $key => $value) { ?>
						<li><a href="chinh-sach/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html">- <?=$value['ten_vi']?></a></li>
					<?php } ?>
				</ul>
				<div class="social-footer">
				<div class="title_footer">Follow us:</div>
				<?php for ($i=0; $i < count($mxh) ; $i++) { ?>
	            <a href="<?=$mxh[$i]['url']?>" target="blank" class="my_rtt360l"><img src="<?=_upload_hinhanh_l.$mxh[$i]['photo']?>" alt="<?=$mxh[$i]['ten']?>"></a>
	            <?php } ?>
			</div>	
			</div>	
		</div><!--mid footer-->

		<div class="right_footer">
			<div class="title_footer">Thống kê truy cập</div>
			<div class="content_footer">
				<?php include_once _template.'layout/module/thongke.php'; ?>
			</div>
		</div><!--right foooter-->
	</div><!--inner footer-->
	<div class="clear"></div>
</div><!--footer-->
<div id="copyright">
	<div class="inner clearfix">
		Copyright © 2018 <span>SỮA CHUA NẾP CẨM</span> .Designed by <span>Nina.,ltd</span>
		
	</div>
</div>
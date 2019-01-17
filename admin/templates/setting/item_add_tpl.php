<script type="text/javascript">		
	$(document).ready(function() {
		$('.chonngonngu li a').click(function(event) {
			var lang = $(this).attr('href');
			$('.chonngonngu li a').removeClass('active');
			$(this).addClass('active');
			$('.lang_hidden').removeClass('active');
			$('.lang_'+lang).addClass('active');
			return false;
		});
	});

</script>
<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a href="index.php?com=setting&act=capnhat"><span>Thiết lập hệ thống</span></a></li>
            <li class="current"><a href="#" onclick="return false;">Cấu hình website</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">		
	function TreeFilterChanged2(){		
				$('#validate').submit();		
	}
</script>
<form name="supplier" id="validate" class="form" action="index.php?com=setting&act=save&curPage=<?=$_REQUEST['curPage']?>" method="post" enctype="multipart/form-data">
	

<!--phan ngon ngu-->
<div class="widget">
	<div class="formRow">
			<label>Ngôn ngữ mặc định</label>
			<div class="formRight">
				<?php
				foreach ($config['lang'] as $key => $value) { ?>
					<label for="<?=$key?>"><input type="radio" name="lang" value="<?=$key?>" id="<?=$key?>" <?=$item['lang']==''||$item['lang']==$key?'checked="checked"':''?> /><?=$value?></label>
				<? }
				?>
			</div>
			<div class="clear"></div>
		</div>
<?php
 if(count($config['lang'])>1) {?>
	<div class="title chonngonngu">
		<ul>
		<?php foreach ($config['lang'] as $key => $value) { ?>
			<li><a href="<?=$key?>" class="<?=$key==$config['lang_active']?'active':''?> tipS validate[required]" title="Chọn <?=$value?>"><?=$value?></a></li>
		<?php } ?>
		</ul>
	</div>
<?php } ?>

<?php foreach ($config['lang'] as $key => $value) { ?>
<div class="contain_lang_<?=$key?> contain_lang <?=$key==$config['lang_active']?'active':''?>">
	<div class="formRow">
		<label>Tên Công Ty <?=$key!=$config['lang_active']?'('.$key.')':''?></label>
		<div class="formRight">
            <input type="text" name="data[ten_<?=$key?>]" title="Nhập tên công ty" id="ten_<?=$key?>" class="tipS validate[required]" value="<?=@$item['ten_'.$key]?>" />
		</div>
		<div class="clear"></div>
	</div>

	<?php /* ?>
	<div class="formRow">
			<label>Tải hình đại diện:</label>
			<div class="formRight">
            	<div class="fileinput fileinput-new" data-provides="fileinput">
				    <span class="btn btn-default btn-file"><span>Choose file</span><input type="file" name="file" /></span>
				    <span class="fileinput-filename"></span><span class="fileinput-new">No file chosen</span>
				</div>
				<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
				<div class="note"> width : auto px , Height : auto px </div>
			</div>
			<div class="clear"></div>
		</div>
       
		<div class="formRow">
			<label>Hình đại diện Hiện Tại :</label>
			<div class="formRight">
			
			<div class="mt10"><img src="<?=_upload_hinhanh.$item['photo']?>"  alt="NO PHOTO" width="100" /></div>

			</div>
			<div class="clear"></div>
		</div>
	<?php */ ?>


	<div class="formRow">
		<label>Slogan <?=$key!=$config['lang_active']?'('.$key.')':''?></label>
		<div class="formRight">
            <input type="text" name="data[slogan_<?=$key?>]" title="Nhập slogan" id="slogan_<?=$key?>" class="tipS validate[required]" value="<?=@$item['slogan_'.$key]?>" />
		</div>
		<div class="clear"></div>
	</div>
	<div class="formRow">
		<label>Địa chỉ <?=$key!=$config['lang_active']?'('.$key.')':''?></label>
		<div class="formRight">
            <input type="text" name="data[diachi_<?=$key?>]" title="Nhập địa chỉ công ty" id="diachi_<?=$key?>" class="tipS validate[required]" value="<?=@$item['diachi_'.$key]?>" />
		</div>
		<div class="clear"></div>
	</div>
</div><!--lang-->
<?php } ?>

<?php /* ?>
 <div class="widget">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
			<h6>Cấu hình page & app facebook</h6>
		</div>			
		
        <div class="formRow">
			<label>ID app (appId)</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['face_appid']?>" name="data[face_appid]" title="Id của app facebook" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>		
		
		<div class="formRow">
			<label>Secret app (secret)</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['face_secret']?>" name="data[face_secret]" title="Secret của app facebook" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>		
		
		<div class="formRow">
			<label>Ip page</label>
			<div class="formRight">
				<input type="text" value="<?=$item['face_pageid']?>" name="data[face_pageid]" title="Id của page up bài" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Access token (secret)</label>
			<div class="formRight">
			<textarea rows="8" cols="" title="Access token" class="tipS" name="data[face_accesstoken]"><?=@$item['face_accesstoken']?></textarea>
				
				<br />
				Lưu ý mỗi access token chỉ có thời hạn trong vòng 60 ngày<br />
				Trong trường hợp bị lỗi mong quý khách lấy lại code access token để tiếp tục<br />
				<a href="get_accesstoken.php">Lấy mã code access token</a>
			</div>
			<div class="clear"></div>
		</div>			
		
		
	</div><!--end config facebook-->
<?php */ ?>

<div class="formRow">
			<label>Email</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['email']?>" name="email" title="Nhập địa chỉ email" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Hotline</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['hotline']?>" name="hotline" title="Nhập hotline" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>
        
        <div class="formRow">
			<label>Điện thoại</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['dienthoai']?>" name="dienthoai" title="Nhập số điện thoại" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>

<div class="formRow">
			<label>Website</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['website']?>" name="website" title="Nhập địa chỉ website" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Tọa độ bản đồ</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['toado']?>" name="toado" title="Nhập tọa độ vị trí công ty" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>FanPage Facebook</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['facebook']?>" name="facebook" title="Nhập link fanpage facebook" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>

</div>
<!--end phan ngon ngu-->

    <div class="widget">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
			<h6>Nội dung seo</h6>
		</div>			
		
        <div class="formRow">
			<label>Title</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['title']?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Từ khóa</label>
			<div class="formRight">
				<input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho website" class="tipS" />
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="formRow">
			<label>Description:</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS" name="description"><?=@$item['description']?></textarea>
                <input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="des_char" value="<?=@$item['des_char']?>" /> ký tự <b>(Tốt nhất là 160 ký tự)</b>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Analytics:</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Code Analytics" class="tipS" name="analytics"><?=@$item['analytics']?></textarea>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>V chat :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Code vchat" class="tipS" name="vchat"><?=@$item['vchat']?></textarea>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Meta :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Code meta" class="tipS" name="meta"><?=@$item['meta']?></textarea>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Script top :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Script top" class="tipS" name="script_top"><?=@$item['script_top']?></textarea>
			</div>
			<div class="clear"></div>
		</div>	

		<div class="formRow">
			<label>Script bottom :</label>
			<div class="formRight">
				<textarea rows="8" cols="" title="Script bottom" class="tipS" name="script_bottom"><?=@$item['script_bottom']?></textarea>
			</div>
			<div class="clear"></div>
		</div>	

        <div class="formRow">
			<div class="formRight">
                <input type="hidden" name="id" id="id_this_setting" value="<?=@$item['id']?>" />
            	<input type="submit" class="btn btn-primary"  value="Hoàn tất" />
			</div>
			<div class="clear"></div>
		</div> 			
	</div>
    
      
</form>   
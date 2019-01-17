<?php
    $show_check_form=true;
?>
<form method="post" name="frm1" id="frm1" action="dang-ky-doi-tac.html" enctype="multipart/form-data">
		<div class=" tablelienhe" style="width:100%">    	
            <div class="box_input_form has_notify">
                <input name="ten" type="text" class="input_form input_form1" id="ten" size="50" required placeholder="<?=_hovaten?>" value="<?=$_POST['ten']?>"/>
            </div><!--box input contact-->
			<div class="box_input_form has_notify">
        	   <input name="dienthoai" type="text" class="input_form input_form1" id="dienthoai" required size="50" placeholder="<?=_dienthoai?>"/>
            </div><!--box input contact-->
            <div class="box_input_form has_notify">
        	   <input name="diachi" type="text"  class="input_form input_form1" size="50" required id="diachi" placeholder="<?=_diachi?>"/>
            </div><!--box input contact-->
            <div class="box_input_form">
                <textarea name="noidung" cols="50" rows="7"  class="input_form input_form_normal" style="height:85px;" placeholder="<?=_noidung?>"></textarea>
            </div><!--box input contact-->
            <div class="box_input_form">
            	<a class="button transitionAll03" onclick="js_submit('frm1');">Đăng ký</a>
            </div><!--box input contact-->
    </div><!--end table lien he-->
</form>
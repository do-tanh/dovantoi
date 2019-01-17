
<div id="header" style="background-image:url(<?=_upload_hinhanh_l.$banner_top['photo_vi']?>)">
  <div id="banner">
    <div class="inner">
      <?php if(!$_GET['id']){ ?>
      <h1 class="vcard"><?=$row_setting['ten_'.$lang]?></h1>
      <?php } ?>
        <div class="logo">
          <a href=""><img src="<?=_upload_hinhanh_l.$logo['photo_'.$lang]?>" alt="<?=$row_setting['ten_'.$lang]?>" class="mw100"/></a>
        </div><!--end logo-->
		 <div class="logo_right">
          <a href=""><img src="<?=_upload_hinhanh_l.$logo_right['photo_'.$lang]?>" alt="<?=$row_setting['ten_'.$lang]?>" class="mw100"/></a>
        </div><!--end logo-->
  </div>
     </div><!-- #banner-->
  <div class="clear"></div>
</div>
<!-- #header -->
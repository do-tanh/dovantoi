<div class="sub_main">
    <div class="title_main"><span><?=$title_detail?></span></div>
    <div class="content_main">
        <?php if($album){
         foreach ($album as $key => $value) { 
        ?>
                <div class="col_album col-md-3 col-sm-4 col-xs-6">
                    <div class="box_album">
                        <div class="img_album">
                         <a href="<?=$com?>/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html" title="<?=$value['ten_'.$lang]?>">
                             <img src="<?=thumb($value['photo'],_upload_album_l,$value['tenkhongdau'],280,200)?>" alt="<?=$value['ten_'.$lang]?>" class="w100 trs03"/>
                        </a>
                       

                        </div><!--img-->
                        <div class="name_album">
                             <h3><a href="<?=$com?>/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html" title="<?=$value['ten_'.$lang]?>">
                                <?=$value['ten_'.$lang]?>
                            </a></h3>
                        </div><!--name-->
                    </div><!--box album-->
                </div><!--col album-->
        <?php } ?>
        
    <?php } else { ?><div style="text-align:center; color:#FF0000; font-weight:900; font-size:22px; text-transform:uppercase;" ><?=_noidungchuacapnhat?></div> <?php }?>

        <div class="clear"></div>
        <?=$paging?>
    </div>
</div><!--sub main-->

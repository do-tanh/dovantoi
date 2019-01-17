<?php
	
 ?>


    <div class="box_map_chinhanh">
    <div class="sub_main">
        <div class="content_main">
            
    <div class="contain_shop col-md-3 col-sm-6 col-xs-12 padding_left0 padding_min">

        <div class="contain_list_shop">
            <ul class="list_shop">
                <?php
                    for($i=0;$i<count($shop);$i++){ ?>
					<div class="shop_box col-md-12 col-sm-12 col-xs-12">
					<div class="shop_index">
                        <li>
                            <a href="javascript:" class="href_shop" data-id="<?=$shop[$i]['id']?>">
                                <div class="name_shop"><b><?=$shop[$i]['ten_vi']?></b></div>
                                <div class="diachi_shop"><?=$shop[$i]['diachi_vi']?></div>
                            </a>
                        </li>
						</div>
						</div>
                    <? }
                ?>
            </ul><!--end list shop-->
        </div><!--end contain list shop-->
    </div><!--end contain shop-->


    <div class="contain_map_shop  col-md-9 col-sm-6 col-xs-12 padding_right0 padding_min">
		  				 
        				   <div id="map_canvas2" style="width:100%;height: 410px;"></div>
			<!--map-->
    </div><!--end contain map shop-->
<div class="clear"></div>

        </div><!--content main-->
    </div><!--end sub main-->
    </div><!--end sub main-->


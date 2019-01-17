<li <?=$_GET['com']==''||$_GET['com']=='index'?'class="menu_active"':''?>><a href="index.html"><?=_trangchu?></a></li>
<li <?=$_GET['com']=='gioi-thieu'?'class="menu_active"':''?>><a href="http://<?=$config_url?>/gioi-thieu.html"><?=_gioithieu?></a></li>
<li <?=$_GET['com']=='san-pham'?'class="menu_active"':''?>><a href="san-pham.html">Menu</a>
  <ul> 
    <?php for($i=0;$i<count($list);$i++) { ?>
    <li><a href="san-pham/<?=$list[$i]['tenkhongdau']?>-<?=$list[$i]['id']?>/"><?=$list[$i]['ten_'.$lang]?></a>
      <?php
      $d->reset();
      $d->query("select * from #_product_cat where hienthi=1 and id_list=".$list[$i]['id']." order by stt asc,id desc");
      $cat_menu=$d->result_array();
      $count_cat_menu=count($cat_menu);
      if($count_cat_menu>0){ 
      ?>
      <ul>
          <?php for ($j=0; $j <$count_cat_menu ; $j++) { ?> 
           <li><a href="san-pham/<?=$cat_menu[$j]['tenkhongdau']?>-<?=$cat_menu[$j]['id']?>/"><?=$cat_menu[$j]['ten_'.$lang]?></a></li>
          <?php } ?>
      </ul>
      <?php } ?>
    </li>
    <?php } ?>                
  </ul><!--navigation_list-->
</li><!--end li san pham-->
<li <?=$_GET['com']=='chi-nhanh'?'class="menu_active"':''?>><a href="chi-nhanh.html">Chi nhánh</a></li><!--end li tin tuc-->
<li <?=$_GET['com']=='doi-tac'?'class="menu_active"':''?>><a href="doi-tac.html">Đối tác</a></li><!--end li tin tuc-->
<li <?=$_GET['com']=='thu-vien'?'class="menu_active"':''?>><a href="thu-vien-anh.html"><?=_hinhanh?></a></li>
<li <?=$_GET['com']=='tin-tuc'?'class="menu_active"':''?>><a href="tin-tuc.html">Tin tức</a></li>
<li <?=$_GET['com']=='video'?'class="menu_active"':''?>><a href="video.html">Video</a></li>
<!--<li <?=$_GET['com']=='lien-he'?'class="menu_active"':''?>><a href="lien-he.html"><?=_lienhe?></a></li>-->
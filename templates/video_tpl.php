<div class="sub_main">
  <div class="title_main"><span><?=$title_detail?></span></div>
  <div class="content_main">
       <div class="row_sanpham">
            <?php
              if(count($tintuc)>0){
              foreach ($tintuc as $key => $value) { 
                $id_y=id_youtube($value['links']);
              ?>
              <div class="col_sanpham col-md-3 col-sm-4 col-xs-6">
                 <div class="box_sanpham ">
                      <div class="img_sanpham">
                          <a href="video/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html" title="<?=$value['ten_vi']?>">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?=$id_y?>" frameborder="0" allowfullscreen></iframe>
                          </a>
                      </div><!--end img sanpham-->
                      <div class="name_sanpham">
                          <a href="video/<?=$value['tenkhongdau']?>-<?=$value['id']?>.html" title="<?=$value['ten_vi']?>">
                              <h2><?=$value['ten_'.$lang]?></h2>
                          </a>
                      </div><!--end ten sanpham-->
                  </div><!--box san pham-->
                </div><!--col sản phẩm-->
             
            <? } 
        } ?>
        </div><!--end row san pham-->
  </div><!--end content main-->
</div><!--end sub main-->
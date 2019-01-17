<?php

    $d->reset();
    $sql= "select * from #_photo where type='logo'";
    $d->query($sql);
    $logo = $d->fetch_array();

    $d->reset();
    $sql= "select * from #_photo where type='banner'";
    $d->query($sql);
    $banner_top = $d->fetch_array();
	
	$d->reset();
    $sql= "select * from #_photo where type='logo_right'";
    $d->query($sql);
    $logo_right = $d->fetch_array();
	
	$d->reset();
    $sql= "select * from #_photo where type='bg_taisao'";
    $d->query($sql);
    $bg_taisao = $d->fetch_array();
	
	$d->reset();
    $sql= "select * from #_photo where type='bg_menu'";
    $d->query($sql);
    $bg_menu = $d->fetch_array();

    $d->reset();
    $sql = "select * from #_lkweb where hienthi=1 and type='mxh' order by stt asc,id desc";
    $d->query($sql);
    $mxh = $d->result_array();

    $d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product' order by stt,id desc";
    $d->query($sql);
    $list = $d->result_array();

    $d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='slider' order by stt asc,id desc";
    $d->query($sql);
    $slider = $d->result_array();


    $d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='doitac' order by id asc";
    $d->query($sql);
    $doitac = $d->result_array();

	$d->reset();
    $sql = "select * from #_album where hienthi=1 and type='khachhang' order by stt,id desc";
    $d->query($sql);
    $khachhang_index = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_album where hienthi=1 and type='album' order by stt,id desc";
    $d->query($sql);
    $album_index = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_baiviet where hienthi=1 and type='hethongdoitac' order by stt,id desc";
    $d->query($sql);
    $hethongdoitac = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_album where hienthi=1 and type='khachhang' order by stt,id desc";
    $d->query($sql);
    $hinhanhkhachhang = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_baiviet where hienthi=1 and type='tintuc' and noibat=1 order by stt,id desc";
    $d->query($sql);
    $tintuc_index = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_baiviet where hienthi=1 and type='chinhsach' order by stt,id desc";
    $d->query($sql);
    $chinhsach = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_baiviet where hienthi=1 and type='taisao' order by stt,id desc";
    $d->query($sql);
    $taisao_index = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_chinhanh where hienthi=1 and type='chinhanh' order by stt asc,id desc";
    $d->query($sql);
    $shop = $d->result_array();
	

?>
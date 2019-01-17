<?php

	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_share.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();
	
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang']=$row_setting['lang'];
	}
	$lang=$_SESSION['lang'];
	include_once _source."lang_$lang.php";	
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php"; 
	include_once _source."template.php";

	

$header_xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<urlset xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">

<author>".$row_setting['ten_'.$lang]."</author>";
$footer_xml = "<author>".$row_setting['ten_'.$lang]."</author></urlset>";
$file_topic = $header_xml;
$file_topic.=( "<url><loc>http://".$config_url."/trang-chu.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
$file_topic.=( "<url><loc>http://".$config_url."/gioi-thieu.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
$file_topic.=( "<url><loc>http://".$config_url."/san-pham.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
$file_topic.=( "<url><loc>http://".$config_url."/du-an.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
$file_topic.=( "<url><loc>http://".$config_url."/lien-he.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
$file_topic.=( "<url><loc>http://".$config_url."/blog.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
$file_topic.=( "<url><loc>http://".$config_url."/hinh-anh.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");
$file_topic.=( "<url><loc>http://".$config_url."/dich-vu.html</loc><lastmod>".date("c",time())."</lastmod><changefreq>daily</changefreq><priority>0.1</priority></url>");


$d->reset();
$sql="select DISTINCT type from #_baiviet";
$d->query($sql);
$type_baiviet=$d->result_array(); 

for ($i=0; $i <count($type_baiviet) ; $i++) { 
	$d->reset();
	$sql = "select * from #_baiviet where type='".$type_baiviet[$i]['type']."' order by stt,id desc ";
	$d->query($sql);
	$baiviet = $d->result_array();

	if($baiviet){
		foreach ($baiviet as $key => $value) {
			if(get_com_by_type($value['type'])){
			$file_topic.=( "<url><loc>http://".$config_url."/".get_com_by_type($value['type'])."/".$value['tenkhongdau']."-".$value['id'].".html</loc><lastmod>".date('c',$value['ngaytao'])."</lastmod><changefreq>daily</changefreq><priority>1</priority></url>");
			}
		}
	}
	
}
$d->reset();
$sql="select DISTINCT type from #_product";
$d->query($sql);
$type_product=$d->result_array(); 
for ($i=0; $i <count($type_product) ; $i++) { 
	$d->reset();
	$sql = "select * from #_baiviet where type='".$type_product[0]['type']."' order by stt,id desc ";
	$d->query($sql);
	$product = $d->result_array();

	if($product){
		foreach ($product as $key => $value) {
			$file_topic.=( "<url><loc>http://".$config_url."/".get_com_by_type($value['type'])."/".$value['tenkhongdau']."-".$value['id'].".html</loc><lastmod>".date('c',$value['ngaytao'])."</lastmod><changefreq>daily</changefreq><priority>1</priority></url>");
		}
	}
	
}

header("Cache-Control: no-cache");
header("Cache-Control: private");
header("Pragma: no-cache");
header('Content-type: text/xml');
echo $file_topic.$footer_xml;
exit();
 
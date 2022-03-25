<?php  
    if(!defined('SOURCES')) die("Error");
    $popup = $d->rawQueryOne("select ten$lang, photo, link, hienthi from #_photo where type = ? and act = ? limit 0,1",array('popup','photo_static'));
    $slider = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide'));
    
    $partner = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('doitac'));
    
    $about = $d->rawQueryOne("select ten$lang, id, photo,photo1, mota$lang  from #_static where type = ? limit 1",array('gioi-thieu'));
    $tieuchi = $d->rawQuery("select ten$lang, mota$lang,  id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('tieu-chi'));        
    
    $product_listnb = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen,mota$lang,id,page from #_product_list where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));
    
    //$congtrinh = $d->rawQuery("select ten$lang,tenkhongdauvi, tenkhongdauen, mota$lang,noidung$lang, id, photo from #_news where noibat > 0 and type = ? and hienthi > 0 order by stt,id desc",array('cong-trinh'));
    $dichvu = $d->rawQuery("select ten$lang,tenkhongdauvi, tenkhongdauen, mota$lang,noidung$lang, id, photo from #_news where noibat > 0 and type = ? and hienthi > 0 order by stt,id desc",array('dich-vu'));
    $video = $d->rawQuery("select ten$lang,tenkhongdauvi, tenkhongdauen, mota$lang,noidung$lang, id, photo from #_news where noibat > 0 and type = ? and hienthi > 0 order by stt,id desc",array('video'));
   
 
    $chinhanh = $d->rawQuery("select ten$lang, mota$lang, noidung$lang from #_news where type = ?  and hienthi > 0 order by stt,id desc limit 1",array('chi-nhanh'));  
    /* SEO */
    $seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
    $seo->setSeo('url',$func->getPageURL());
    $img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $logo['photo']))
    {
        $img_json_bar = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$logo['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$config_base.THUMBS.'/600x400x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->setSeo('photo:width',600);
        $seo->setSeo('photo:height',400);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }
?>
<base href="<?=$config_base?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1250">
<title><?=$seo->getSeo('title')?></title>
<meta name="keywords" content="<?=$seo->getSeo('keywords')?>"/>
<meta name="description" content="<?=$seo->getSeo('description')?>"/>
<meta name="theme-color" content="#1E88EC" />
<meta name="robots" content="index,follow" />
<link href="<?=UPLOAD_PHOTO_L.$favicon['photo']?>" rel="shortcut icon" type="image/x-icon" />
<?=htmlspecialchars_decode($setting['mastertool'])?>
<?php $toado_set=explode(',', $optsetting['toado']);?>
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="<?=$optsetting['placename']?>" />
<meta name="geo.position" content="<?=$toado_set[0].';'.$toado_set[1]?>" />
<meta name="ICBM" content="<?=$toado_set[0].','.$toado_set[1]?>" />
<meta name='revisit-after' content='1 days' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="<?=$setting['ten'.$lang]?>" />
<meta name="copyright" content="<?=$setting['ten'.$lang]." - [".$optsetting['email']."]"?>" />
<meta property="og:type" content="<?=$seo->getSeo('type')?>" />
<meta property="og:site_name" content="<?=$setting['ten'.$lang]?>" />
<meta property="og:title" content="<?=$seo->getSeo('title')?>" />
<meta property="og:description" content="<?=$seo->getSeo('description')?>" />
<meta property="og:url" content="<?=$seo->getSeo('url')?>" />
<meta property="og:image" content="<?=$seo->getSeo('photo')?>" />
<meta property="og:image:alt" content="<?=$seo->getSeo('title')?>" />
<meta property="og:image:type" content="<?=$seo->getSeo('photo:type')?>" />
<meta property="og:image:width" content="<?=$seo->getSeo('photo:width')?>" />
<meta property="og:image:height" content="<?=$seo->getSeo('photo:height')?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="<?=$optsetting['email']?>" />
<meta name="twitter:creator" content="<?=$setting['ten'.$lang]?>" />
<meta property="og:url" content="<?=$seo->getSeo('url')?>" />
<meta property="og:title" content="<?=$seo->getSeo('title')?>" />
<meta property="og:description" content="<?=$seo->getSeo('description')?>" />
<meta property="og:image" content="<?=$seo->getSeo('photo')?>" />
<link rel="canonical" href="<?=$func->getCurrentPageURL()?>" />
<meta name="format-detection" content="telephone=no">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Mulish:wght@300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
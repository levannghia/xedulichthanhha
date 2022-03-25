<?php
 
 
    /* Config type - Newsletter */
    require_once LIBRARIES.'type/config-type-product.php'; 

    /* Config type - News */
    require_once LIBRARIES.'type/config-type-news.php';
 

    /* Config type - Static */
    require_once LIBRARIES.'type/config-type-static.php';
    require_once LIBRARIES.'type/config-type-newsletter.php';

    /* Config type - Photo */
    require_once LIBRARIES.'type/config-type-photo.php';

    /* Seo page */
    $config['seopage']['page'] = array( 
        "san-pham" => "Sản phẩm",
        "bnag-gia" => "Bảng giá",
        "video" => "Video",
        "dich-vu" => "Dịch vụ",
        "tin-tuc" => "Tin tức",
        "lien-he" => "Liên hệ"
    );
    $config['seopage']['width'] = 600;
    $config['seopage']['height'] = 400;
    $config['seopage']['thumb'] = '600x400x2';
    $config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Setting */
    $config['setting']['diachi'] = true;
    $config['setting']['dienthoai'] = true;
    $config['setting']['hotline'] = true;
    $config['setting']['zalo'] = true;
    $config['setting']['oaidzalo'] = true;
    $config['setting']['email'] = true;
    $config['setting']['website'] = true;
    $config['setting']['fanpage'] = true;
    $config['setting']['toado'] = true;
    $config['setting']['toado_iframe'] = true;
 

?>
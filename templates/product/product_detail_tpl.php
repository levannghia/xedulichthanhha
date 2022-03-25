<div class="grid-pro-detail w-clear">
    <div class="left-pro-detail w-clear">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= WATERMARK ?>/product/810x690x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/810x690x2/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/810x690x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
        <?php if ($hinhanhsp) {
            if (count($hinhanhsp) > 0) { ?>
                <div class="gallery-thumb-pro">
                    <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                    <div class="owl-carousel owl-theme owl-thumb-pro">
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= WATERMARK ?>/product/810x690x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/810x690x2/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/810x690x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
                        <?php foreach ($hinhanhsp as $v) { ?>
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= WATERMARK ?>/product/810x690x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>">
                                <img onerror="this.src='<?= THUMBS ?>/810x690x2/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/810x690x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>">
                            </a>
                        <?php } ?>
                    </div>
                    <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
                </div>
        <?php }
        } ?>
    </div>

    <div class="right-pro-detail w-clear">
        <p class="title-pro-detail"><?= $row_detail['ten' . $lang] ?></p>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>

        <ul class="attr-pro-detail">
            <li class="w-clear">
                <div class="desc-pro-detail"><?= (isset($row_detail['mota' . $lang]) && $row_detail['mota' . $lang] != '') ? htmlspecialchars_decode($row_detail['mota' . $lang]) : '' ?></div>
            </li>
            <li class="w-clear">
                <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                <div class="attr-content-pro-detail"><?= $row_detail['luotxem'] ?></div>
            </li>
            <?php if (isset($pro_brand['id']) && $pro_brand['id'] > 0) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= thuonghieu ?>:</label>
                    <div class="attr-content-pro-detail"><a class="text-decoration-none" href="<?= $pro_brand[$sluglang] ?>" title="<?= $pro_brand['ten' . $lang] ?>"><?= $pro_brand['ten' . $lang] ?></a></div>
                </li>
            <?php } ?>
            <!-- <li class="w-clear">
                <label class="attr-label-pro-detail"><?= gia ?>:</label>
                <div class="attr-content-pro-detail">
                    <?php if ($row_detail['giamoi']) { ?>
                        <span class="price-new-pro-detail"><?= $func->format_money($row_detail['giamoi']) ?></span>
                        <span class="price-old-pro-detail"><?= $func->format_money($row_detail['gia']) ?></span>
                    <?php } else { ?>
                        <span class="price-new-pro-detail"><?= ($row_detail['gia']) ? $func->format_money($row_detail['gia']) : '<a href="tel:' . preg_replace('/[^0-9]/', '', $optsetting['hotline']) . '" class="btn btn-danger"><i class="fa fa-phone"></i> ' . $optsetting['hotline'] . '</a>' ?></span>
                    <?php } ?>
                </div>
            </li> -->
            <li class="w-clear"> 
                 <a class="nutgoi" href="tel:0914860855" title="title"><img src="assets/images/icon-t1.png" alt="images">
                    <span>0914860855</span>
                </a>
            </li>
        </ul>

    </div>

    <div class="clear"></div>

    <div class="tabs-pro-detail">
        <ul class="ul-tabs-pro-detail w-clear">
            <li class="active transition" data-tabs="info-pro-detail"><?= thongtinsanpham ?></li>
            <li class="transition" data-tabs="commentfb-pro-detail"><?= binhluan ?></li>
        </ul>
        <div class="content-tabs-pro-detail info-pro-detail active"><?= (isset($row_detail['noidung' . $lang]) && $row_detail['noidung' . $lang] != '') ? htmlspecialchars_decode($row_detail['noidung' . $lang]) : '' ?></div>
        <div class="content-tabs-pro-detail commentfb-pro-detail">
            <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
        </div>
    </div>
</div>
<?php if (isset($product) && count($product) > 0) {  ?>
    <div class="title-main"><span><?= sanphamcungloai ?></span></div>
    <div class="grid-page-in">

        <?php foreach ($product as $key => $value) { ?>
            <div class="product">
                <a class="box-product text-decoration-none" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">
                    <div class="pic-product scale-img effect-2">
                        <img onerror="this.src='<?= THUMBS ?>/270x230x2/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/270x230x1/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" />

                    </div>
                    <h3 class="name-product text-split"><?= $value['ten' . $lang] ?></h3>
                    <p class="price-product">
                        <span class="price-new">Chi tiết</span>

                    </p>
                </a>

            </div>

        <?php } ?>


    </div>
    <div class="clear"></div>
    <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
<?php   }  ?>
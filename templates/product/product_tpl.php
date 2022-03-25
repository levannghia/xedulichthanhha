<div class="title-main"><span><?=(@$title_cat!='')?$title_cat:@$title_crumb?></span></div>

<?php if($row_detail['noidung'.$lang] != '') {?>
<div class="content-main w-clear content-ck"><?=(isset($row_detail['noidung'.$lang]) && $row_detail['noidung'.$lang] != '') ? htmlspecialchars_decode($row_detail['noidung'.$lang]) : ''?></div>
<?php } ?>
<div class="content-main w-clear">
    <?php if(isset($product) && count($product) > 0) {?>
    <?php foreach ((array)$product as $key => $value) { ?> 
         <div class="product">
             <a class="box-product text-decoration-none" href="<?=$value[$sluglang]?>" title="<?=$value['ten'.$lang]?>">
             <p class="pic-product scale-img"><img onerror="this.src='<?=THUMBS?>/270x230x2/assets/images/noimage.png';" src="<?=WATERMARK?>/product/270x230x1/<?=UPLOAD_PRODUCT_L.$value['photo']?>" alt="<?=$value['ten'.$lang]?>"/></p>
                 <h3 class="name-product text-split"><?=$value['ten'.$lang]?></h3>
                 <p class="xemthem"><a class="box-product text-decoration-none" href="<?=$value[$sluglang]?>" title="<?=$value['ten'.$lang]?>"></a><a href="<?=$value[$sluglang]?>">Đặt xe</a></p>
             </a>
              
         </div>
    <?php } ?>
    <?php  } else { ?>
        <?php if($row_detail['noidung'.$lang]=='') {?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
        <?php } ?>
    <?php } ?>
    
</div>
<div class="clear"></div>
<div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
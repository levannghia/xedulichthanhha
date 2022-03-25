<div class="title-main main-in"><span><?=$row_detail['ten'.$lang]?></span></div>
 
<?php if(count($hinhanhtt) > 0){ ?>
<div class="box_fotorama">
    <div class="fotorama"  data-width="100%" data-thumbmargin="5" data-ratio="1200/500" data-thumbwidth="100" data-thumbheight="85" data-allowfullscreen="false" data-nav="thumbs" >
        <?php foreach ($hinhanhtt as $key => $value) { ?>
        <img onerror="this.src='<?=THUMBS?>/1200x500x2/assets/images/noimage.png';" src="<?=UPLOAD_NEWS_L.$value['photo']?>" alt="<?=$value['ten'.$lang]?>">
        <?php } ?>
    </div>
</div>
<?php } ?>
<?php if(isset($row_detail['noidung'.$lang]) && $row_detail['noidung'.$lang] != '') { ?>
    
    <div class="content-main w-clear" id="toc-content"><?=htmlspecialchars_decode($row_detail['noidung'.$lang])?></div>
    <div class="share">
        <b><?=chiase?>:</b>
        <div class="social-plugin w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
    </div>
<?php }  ?>
     
<div class="share othernews">
    <b><?=baivietkhac?>:</b>
    <ul class="list-news-other">
        <?php if(isset($news) && count($news) > 0) { for($i=0;$i<count($news);$i++) { ?>
            <li><a class="text-decoration-none" href="<?=$news[$i][$sluglang]?>" title="<?=$news[$i]['ten'.$lang]?>">
                <?=$news[$i]['ten'.$lang]?> - <?=date("d/m/Y",$news[$i]['ngaytao'])?>
            </a></li>
        <?php } } ?>
    </ul>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>
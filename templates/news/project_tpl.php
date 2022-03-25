<div class="title-main"><span><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></span></div>
<div class="content-main w-clear">
    <?php foreach ((array)$news as $key => $value) { ?>
        <a class="news text-decoration-none w-clear" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">
            <p class="pic-news scale-img"><img onerror="this.src='thumbs/160x120x2/assets/images/noimage.png';" src="<?= THUMBS ?>/260x220x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>"  alt="<?= $value['ten' . $lang] ?>"></p>
            <div class="info-news">
                <h3 class="name-news"><?= $value['ten' . $lang] ?></h3>
                <p class="time-news">Ngày đăng: <?=date("d/m/Y h:i A",$value['ngaytao'])?></p>
                <div class="desc-news text-split"></div>
            </div>
        </a>
        <!-- <div class="wrap">

            <div class="pic-product ">
                <a class="scale-img effect-2" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">
                    <img onerror="this.src='<?= THUMBS ?>/260x220x2/assets/images/noimage.png';" src="<?= THUMBS ?>/260x220x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" />
                </a>
            </div>
            <div class="inf_">

                <h3 class="name-product text-split"><a href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>"><?= $value['ten' . $lang] ?></a></h3>
                <div class="desc"><?= $value['mota' . $lang] ?></div>
                <a href="<?= $value[$sluglang] ?>" class="viewmore">Xem Thêm</a>
            </div>

        </div> -->
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
</div>
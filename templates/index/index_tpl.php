<!-- <div class="box-about">
  <div class="wrap-content">
    <div class="about-left ">
      <h2><a href="gioi-thieu"><?= $about['ten' . $lang] ?></a></h2>
      <div class="desc"><?= htmlspecialchars_decode($about["mota$lang"]) ?></div>
      <div class="box_why">
        <div class="slider_tc">
          <?php foreach ((array)$tieuchi as $key => $value) { ?>
            <div class="item_tc">
              <div class="wrap clearfix">
                <div class="img"> <img onerror="this.src='thumbs/65x65x1/assets/images/noimage.png';" src="<?= THUMBS ?>/65x65x2/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value["ten$lang"] ?>"> </div>
                <div class="inf_">
                  <h3> <?= $value["ten$lang"] ?> </h3>
                  <div class="desc"> <?= $value["mota$lang"] ?></div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="about-right">
      <div class="wrap">
        <a href="gioi-thieu" class="effect-3">
          <img onerror="this.src='thumbs/555x460x1/assets/images/noimage.png';" src="thumbs/555x460x1/<?= UPLOAD_NEWS_L . $about['photo'] ?>" alt="<?= $about['ten' . $lang] ?>">
        </a>
      </div>
    </div>
  </div>
</div> -->
<div class="wrap-product wrap-content">
<!-- <div class="title-main">
  <span>Dịch vụ du lịch <span>thanh hà</span></span>
  <br>
  <p>Chuyên cung cấp dịch vụ đưa đón sân bay, du lịch &amp; tham quan các tỉnh </p>
</div> -->
<!-- ./ -->
  <?php foreach ((array)$product_listnb as $k => $v) {
  ?>
        <!-- <div class="product">
              <a class="box-product text-decoration-none" href="" title="">

              </a>
        </div> -->
        <div class="title-main">
          <span><?= $v['ten' . $lang] ?></span>
          <div class="des_title"><?= $v['mota' . $lang] ?></div>
        </div>
        <div class="paging-product paging-product-category-<?= $v['id'] ?>" data-list="<?= $v['id'] ?>" data-cat=""></div>
  <?php } ?>
</div>  
<!-- ./ -->
<!-- <div class="box_projects">
  <div class="wrap-content">
    <div class="title-main">
      <span>Dự án công trình</span>
    </div>
    <div class="grid-page-project">
      <?php foreach ((array)$congtrinh as $key => $value) { ?>
        <div class="project_it_home">
          <div class="wrap">
            <div class="pic-project ">
              <a class="effect-2" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">
                <img onerror="this.src='<?= THUMBS ?>/585x305x2/assets/images/noimage.png';" src="<?= THUMBS ?>/585x305x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" />
              </a>
            </div>
            <div class="inf_">
              <h3 class="name-project text-split"><a href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>"><?= $value['ten' . $lang] ?></a></h3>
              <div class="desc"><?= $value['mota' . $lang] ?></div>
              <a href="<?= $value[$sluglang] ?>" class="viewmore">Xem Thêm</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div> -->
<!-- ./ -->
<?php if (!empty($dichvu)) { ?>
  <div class="wrap-brand sec2">
    <div class="wrap-content">
      <!-- <div class="title-main">
        <span>Dịch vụ của chúng tôi</span>
      </div> -->
      <div class="row">
        <?php foreach ($dichvu as $key => $value) { ?>
          <div class="col-md-6">
            <!-- <div class=""> -->
              <a class="brand text-decoration-none relative" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">
                <img style="height: 274px;" onerror="this.src='<?= THUMBS ?>/280x280x2/assets/images/noimage.png';" src="<?= THUMBS ?>/280x280x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" />
              </a>
              <!-- <h3 class="name-product text-split"><a href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>"><?= $value['ten' . $lang] ?></a></h3>
              <div class="desc"><?= $value['mota' . $lang] ?></div> -->
            <!-- </div> -->
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>
<!-- ./ -->


<?php if (count($partner)) { ?>
    <div class="wrap-partner">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <!-- <p class="control-carousel prev-carousel prev-partner transition"><i class="fas fa-chevron-left"></i></p> -->
            <div class="owl-carousel owl-theme owl-partner">
                <?php foreach ($partner as $v) { ?>
                    <div>
                        <a class="partner text-decoration-none" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>">
                            <img onerror="this.src='<?= THUMBS ?>/185x90x2/assets/images/noimage.png';" src="<?= THUMBS ?>/185x90x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
            <!-- <p class="control-carousel next-carousel next-partner transition"><i class="fas fa-chevron-right"></i></p> -->
        </div>
    </div>
<?php } ?>
<div class="footer">
<a href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>" class="tell-me"><?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?></a>
    <div class="footer-article relative">
        <div class="wrap-content d-flex align-items-start res justify-content-between">
            <!-- <div class="footer-news">
                <h2 class="title-footer"><?= $footer['ten' . $lang] ?></h2>
                <div class="info-footer" style="font-size:16px;"><?= htmlspecialchars_decode($footer['noidung' . $lang]) ?></div>
                <ul class="social">
                    <?php for ($i = 0; $i < count($mxh2); $i++) { ?>
                        <li><a href="<?= $mxh2[$i]['link'] ?>" target="_blank"><img src="<?= THUMBS ?>/40x40x2/<?= UPLOAD_PHOTO_L . $mxh2[$i]['photo'] ?>" alt="<?= $mxh2[$i]['ten' . $lang] ?>"></a></li>
                    <?php } ?>
                </ul>
            </div> -->
            <div class="footer-news">
                <h2 class="title-footer"><?= $footer['ten' . $lang] ?></h2>
                <div class="info-footer">
                <?= htmlspecialchars_decode($footer['noidung' . $lang]) ?>
                </div>
            </div>

            <div class="footer-news">
                <div class="title-footer">V??? THL</div>
                <ul class="footer-ul">
                    <li><a class="text-decoration-none" href="" title="Trang ch???">Trang ch???</a></li>
                    <li><a class="text-decoration-none" href="gioi-thieu" title="Gi???i thi???u">Gi???i thi???u</a></li>
                    <li><a class="text-decoration-none" href="dich-vu" title="DV thu?? xe">DV thu?? xe</a></li>
                    <li><a class="text-decoration-none" href="bang-gia" title="B???ng gi??">B???ng gi??</a></li>
                    <li><a class="text-decoration-none" href="video" title="Video xe">Video xe</a></li>
                </ul>
            </div>
            <div class="footer-news">
                <h2 class="title-footer">Ch??nh s??ch</h2>
                <ul class="footer-ul">
                    <li><a class="text-decoration-none" href="ho-tro-dat-hang" title="H??? tr??? ?????t h??ng">H??? tr??? ?????t h??ng</a></li>
                    <li><a class="text-decoration-none" href="chinh-sach-tra-hang" title="Ch??nh s??ch tr??? h??ng">Ch??nh s??ch tr??? h??ng</a></li>
                    <li><a class="text-decoration-none" href="chinh-sach-bao-hanh" title="Ch??nh s??ch b???o h??nh">Ch??nh s??ch b???o h??nh</a></li>
                    <li><a class="text-decoration-none" href="chinh-sach-nguoi-dung" title="Ch??nh s??ch ng?????i d??ng">Ch??nh s??ch ng?????i d??ng</a></li>
                    <li><a class="text-decoration-none" href="chinh-sach-mua-hang" title="Ch??nh s??ch mua h??ng">Ch??nh s??ch mua h??ng</a></li>
                </ul>
            </div>
            <div class="footer-news">
                <h2 class="title-footer">????ng k??</h2>
                <p class="slogan-newsletter">????ng k?? nh???n tin t??? ch??ng t??i ????? nh???n th??ng tin th???ng b??o m???i nh???t t??? ch??ng t??i</p>
                <form class="form-newsletter validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="newsletter-input relative">
                        <input type="email" class="form-control" id="email-newsletter" name="email-newsletter" placeholder="<?= nhapemail ?>" required />
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                        <div class="newsletter-button">
                            <input type="submit" name="submit-newsletter" value="G???i" disabled>
                            <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletters">
                        </div>
                    </div>
                </form>
                <?php for ($i = 0; $i < count($mxh2); $i++) { ?>
                        <a class="social-icon" href="<?= $mxh2[$i]['link'] ?>" target="_blank"><img src="<?= THUMBS ?>/40x40x2/<?= UPLOAD_PHOTO_L . $mxh2[$i]['photo'] ?>" alt="<?= $mxh2[$i]['ten' . $lang] ?>"></a>
                <?php } ?>
                <!-- <a class="social-icon" href=""><img src="upload/photo/s1-4925.png" alt=""></a><a class="social-icon" href=""><img src="upload/photo/s2-8974.png" alt=""></a><a class="social-icon" href=""><img src="upload/photo/s3-9269.png" alt=""></a><a class="social-icon" href=""><img src="upload/photo/s4-7345.png" alt=""></a> -->
            </div>
        </div>


        <div class="footer-news">

            <?= $addons->setAddons('fanpage-facebook', 'fanpage-facebook', 10); ?>
        </div>
        <div class="footer-powered">
            <div class="wrap-content d-flex align-items-center">
                <p class="copyright">Copyright ?? 2022 Nh??m K??nh L??m ?????ng. All rights reserved. Design by Sota Group Co.,Ltd</p>
                <p class="statistic">
                    <span><?= dangonline ?>: <?= $online ?></span>

                    <span><?= trongtuan ?>: <?= $counter['week'] ?></span>

                    <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
                </p>
            </div>
        </div>
    </div>

</div>
<div id="footer-map">
<?php foreach ((array)$chinhanh as $key => $value) {?>
          <div class="map-item">           
            <div class="map-i">
                <?=htmlspecialchars_decode($value['noidung'.$lang])?> 
            </div>
          </div>
<?php } ?>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62671.54917655389!2d106.8634432!3d10.9654993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174ddf325802c41%3A0xdee4b00cfe5b960!2zQ2hpIE5ow6FuaCBOaMOgIHhlIFRoYW5oIEjDoA!5e0!3m2!1svi!2s!4v1624860264361!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
</div>


<?= $addons->setAddons('messages-facebook', 'messages-facebook', 10); ?>


<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/zl.png" alt="Zalo"></i>
</a>

<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>" title="<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    
    <i><img src="assets/images/hl.png" alt="Hotline"> </i>
</a>

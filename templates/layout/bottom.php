<?php if ($source == 'index') { ?>

    <!-- ./ -->
    <div class="wrap-intro">
        <div class="title-main">
            <span>Tin tức & sự kiện</span>
            <br>
            <img src="assets/images/linered.png" alt="">
        </div>
        <div class="wrap-content d-flex align-items-start justify-content-between">
            <div class="right-intro">
                <?php if (count($newsnb) > 0) { ?>
                    <a class="newshome-best text-decoration-none relative" href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['ten' . $lang] ?>">
                        <p class="pic-newshome-best scale-img"><img onerror="this.src='<?= THUMBS ?>/360x200x2/assets/images/noimage.png';" src="<?= THUMBS ?>/360x200x1/<?= UPLOAD_NEWS_L . $newsnb[0]['photo'] ?>" alt="<?= $newsnb[0]['ten' . $lang] ?>"></p>
                        <h3 class="name-newshome text-split"><?= $newsnb[0]['ten' . $lang] ?></h3>
                    </a>
                <?php } ?>
            </div>
            <div class="left-intro">
                <div class="newshome-intro w-clear">
                    <div class="newshome-scroll">
                        <div class="slider-news">
                            <?php
                            if (count($newsnb) > 1) {
                                foreach ($newsnb as $key => $value) {
                            ?>
                                    <a class="newshome-normal-1 text-decoration-none w-clear" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">
                                        <p class="pic-newshome-normal scale-img effect-2"><img onerror="this.src='<?= THUMBS ?>/300x200x2/assets/images/noimage.png';" src="<?= THUMBS ?>/300x200x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>"></p>
                                        <div class="info-newshome-normal">
                                            <h3 class="name-newshome text-split"><?= $value['ten' . $lang] ?></h3>
                                            <p class="desc-newshome text-split"><?= $newsnb[0]['mota' . $lang] ?></p>
                                        </div>
                                    </a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="fanpage-home-right"> -->
            <!-- <div class="title-intro">
                    <span>Form liên hệ</span>  
                </div>
                <div class="contact_home">
                    <form class="form-contact validation-contact" novalidate method="post" action="lien-he" enctype="multipart/form-data">
                        <div class="input-contact">
                            <input type="text" class="form-control" id="ten" name="ten" placeholder="<?= hoten ?>" required />
                            <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                        </div>
                        <div class="grid_frm">
                            
                            <div class="input-contact">
                                <input type="number" class="form-control" id="dienthoai" name="dienthoai" placeholder="<?= sodienthoai ?>" required />
                                <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                            </div>         
                            <div class="input-contact">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                                <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="input-contact">
                            <input type="text" class="form-control" id="tieude" name="tieude" placeholder="<?= chude ?>" required />
                            <div class="invalid-feedback"><?= vuilongnhapchude ?></div>
                        </div>
                        <div class="input-contact">
                            <textarea class="form-control" id="noidung" name="noidung" placeholder="<?= noidung ?>" required /></textarea>
                            <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                        </div>
                         
                        <input type="submit" class="btn btn-primary" name="submit-contact" value="<?= gui ?>" disabled />
                        
                        <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                    </form>
                </div> -->
            <!-- </div> -->
        </div>
    </div>
    <div class="sec-video">
        <div class="title-main">
            <span>Video clips</span>
            <br>
            <img src="assets/images/linered.png" alt="">
        </div>


        <div class="wrap-content video1">
            <div class="owl-carousel  owl-theme owl-video" id="">
                <div class="item">
                    <div class="brand text-decoration-none relative">
                        <iframe width="100%" height="254px" src="//www.youtube.com/embed/8N-yMfTtiS4" frameborder="0" allowfullscreen></iframe>

                        <a href="https://www.youtube.com/embed/8N-yMfTtiS4" target="_blank">
                            <div class="play">
                                Click to play
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand text-decoration-none relative">
                        <iframe width="100%" height="254px" src="//www.youtube.com/embed/IwxfdZ-34LU" frameborder="0" allowfullscreen></iframe>

                        <a href="https://www.youtube.com/embed/IwxfdZ-34LU" target="_blank">
                            <div class="play">
                                Click to play
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand text-decoration-none relative">
                        <iframe width="100%" height="254px" src="//www.youtube.com/embed/Qy_e8hF2at4" frameborder="0" allowfullscreen></iframe>

                        <a href="https://www.youtube.com/embed/Qy_e8hF2at4" target="_blank">
                            <div class="play">
                                Click to play
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand text-decoration-none relative">
                        <iframe width="100%" height="254px" src="//www.youtube.com/embed/ir4W5S0MJYA" frameborder="0" allowfullscreen></iframe>

                        <a href="https://www.youtube.com/embed/ir4W5S0MJYA" target="_blank">
                            <div class="play">
                                Click to play
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- ./ -->
        <!-- <div class="box-maps">
      <div class="wrap-content">
         
        <div class="box-branch">
          <?php foreach ((array)$chinhanh as $key => $value) { ?>
          <div class="map-item">
            
            <div class="map-i">
                <?= htmlspecialchars_decode($value['noidung' . $lang]) ?>
                <div class="inf_">
                  <div>
                      <h3><?= $value['ten' . $lang] ?></h3>
                      <div class="desc"><?= nl2br($value['mota' . $lang]) ?></div>
                  </div>
                </div>    
            </div>

          </div>
          <?php } ?>
        </div>
      </div>
    </div> -->

    <?php } ?>
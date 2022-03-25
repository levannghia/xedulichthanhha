<?php if ($source == 'index') { ?>
    <?php if (count($slider)) { ?>
        <div class="slider wrap-content">
            <div class="slideshow">
                <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
                <div class="owl-carousel owl-theme owl-slideshow">
                    <?php foreach ($slider as $v) { ?>
                        <div>
                            <a href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>"><img style="height: 400px;" onerror="this.src='<?= THUMBS ?>/1366x510x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1366x510x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" /></a>
                        </div>
                    <?php } ?>
                </div>
                <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
            </div>
            <div class="datxe">
                <ul>
                    <li class="active btnTCD" id="btnDX" data-id="">Xe đi tỉnh</li>
                    <li data-id="2" class="btnXDT">Tuyến cố định</li>
                </ul>

                <form class="validation-contact" novalidate method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="loaixe" class="loaixe" value="Xe đi tỉnh" />

                    <div class="input-contact">
                        <input type="text" class="form-control" id="dienthoai" name="dienthoai" placeholder="Số điện thoại" required />
                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                    </div>

                    <div class="load_d">
                        <div class="input-contact">
                            <select class="select-city-cart custom-select" required id="diemdi" name="diemdi">
                                <option value="">Điểm đi</option>
                                <option value="Vũng Tàu">Vũng Tàu</option>
                                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                            </select>
                            <div class="invalid-feedback">Chọn điểm đi</div>
                        </div>

                        <div class="input-contact">
                            <select class="select-city-cart custom-select" required id="diemden" name="diemden">
                                <option value="">Điểm đến</option>
                                <option value="Nha trang">Nha trang</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                            </select>
                            <div class="invalid-feedback">Chọn điểm đến</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-contact col-sm-6">
                            <input type="text" class="form-control" id="ngay" name="ngay" placeholder="Ngày" required />
                            <div class="invalid-feedback">Vui lòng chọn ngày</div>
                        </div>
                        <div class="input-contact col-sm-6">
                            <div class="quantity-pro-detail">
                                <span class="quantity-minus-pro-detail">-</span>
                                <input type="number" class="soluong" name="soluong" min="1" value="1" readonly="">
                                <span class="quantity-plus-pro-detail">+</span>
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit-contact" value="Đặt vé ngay" disabled />
                    <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">

                </form>
                <p>Cập nhật thông tin khuyến mãi trong quản trị nhé</p>
            </div>
        </div>
    <?php } ?>
<?php } else { ?>

    <?php if (!empty($hinhanhsp_list)) { ?>
        <div class="qc_box">
            <?php foreach ($hinhanhsp_list as $key => $value) { ?>
                <div class="qc_item"><a href="<?= $value['tenvi'] ?>" target="_blank"><img src="<?= THUMBS ?>/1366x310x1/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value["ten"] ?>"></a></div>
            <?php } ?>
        </div>
    <?php } ?>

<?php } ?>
<div class="menu" style="left: 0px; right: 0px; top: 0px;z-index: 999;">

    <ul class="d-flex align-items-center justify-content-between wrap-content">
        <li><a class="transition <?php if ($source == 'index') echo 'active'; ?>" href="" title="<?= trangchu ?>"><h2><?= trangchu ?></h2></a></li>
        <li class="line"></li>
        <li><a class="transition <?php if ($com == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?= gioithieu ?>"><h2><?= gioithieu ?></h2></a></li>
        <li class="line"></li>

        <li>
            <a class="transition <?php if ($com == 'dich-vu' && $idl == '') echo 'active'; ?>" href="san-pham" title="Sản phẩm"><h2>Sản phẩm</h2></a>
            <?php if (count($pro_listmenu)) { ?>
                <ul>
                    <?php for ($i = 0; $i < count($pro_listmenu); $i++) {
                        $pro_cat = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list= ? and type = ? and hienthi > 0 order by stt asc,id desc", array($pro_listmenu[$i]['id'], 'san-pham'));
                    ?>
                        <li>
                            <a class="transition" title="<?= $pro_listmenu[$i]['ten' . $lang] ?>" href="<?= $pro_listmenu[$i][$sluglang] ?>">
                                <h2><?= $pro_listmenu[$i]['ten' . $lang] ?></h2>
                            </a>
                            <!-- <?php if (count($pro_cat)) { ?>
                                <ul>
                                    <?php for ($j = 0; $j < count($pro_cat); $j++) {
                                        $pro_item = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_item where id_cat= ? and type = ? and hienthi > 0 order by stt asc,id desc", array($pro_cat[$j]['id'], 'san-pham'));
                                    ?>
                                        <li>
                                            <a class="transition" title="<?= $pro_cat[$j]['ten' . $lang] ?>" href="<?= $pro_cat[$j][$sluglang] ?>">
                                                <?= $pro_cat[$j]['ten' . $lang] ?>
                                            </a>
                                            <?php if (count($pro_item)) { ?>
                                                <ul>
                                                    <?php for ($k = 0; $k < count($pro_item); $k++) {
                                                    ?>
                                                        <li>
                                                            <a class="transition" title="<?= $pro_item[$k]['ten' . $lang] ?>" href="<?= $pro_item[$k][$sluglang] ?>">
                                                                <?= $pro_item[$k]['ten' . $lang] ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?> -->
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <li class="line"></li>
        <li> <a class="transition <?php if ($com == 'video') echo 'active'; ?>" href="video" title="Video"><h2>Video</h2></a> </li>
        <li class="line"></li>
        <li> <a class="transition <?php if ($com == 'bang-gia') echo 'active'; ?>" href="bang-gia" title="Bảng giá"><h2>Bảng giá</h2></a> </li>
        <li class="line"></li>
        <li> <a class="transition <?php if ($com == 'tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức"><h2>Tin tức</h2></a> </li>
        <li class="line"></li>
        <li><a class="transition <?php if ($com == 'lien-he') echo 'active'; ?>" href="lien-he" title="<?= lienhe ?>"><h2><?= lienhe ?></h2></a></li>
        <li class="line"></li>
        <div class="search w-clear">
            <input type="text" id="keyword" placeholder="Nhập từ khóa cần tìm..." onkeypress="doEnter(event,'keyword');" />
            <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
        </div>
    </ul>

</div>
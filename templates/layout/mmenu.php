<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword2');"/>
                <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
           <li><a class="transition <?php if($source=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><?=trangchu?></a></li>
           <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>
           <?php foreach ((array)$listmenu as $key => $value) {?>
           <li><a class="transition <?php if($idl==$value['tenkhongdauvi']) echo 'active'; ?>" href="<?=$value['tenkhongdauvi']?>" title="<?=$value['ten'.$lang]?>"><?=$value['ten'.$lang]?></a></li>
           <?php } ?>
           <li>
               <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="Sản phẩm">Sản phẩm</a>
               <?php if(count($pro_listmenu)) { ?>
                   <ul>
                       <?php for($i=0;$i<count($pro_listmenu); $i++) {
                           $pro_cat = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_cat where id_list= ? and type = ? and hienthi > 0 order by stt asc,id desc",array($pro_listmenu[$i]['id'],'san-pham'));
                            ?>
                           <li >
                               <a class="transition" title="<?=$pro_listmenu[$i]['ten'.$lang]?>" href="<?=$pro_listmenu[$i][$sluglang]?>">
                                   <?=$pro_listmenu[$i]['ten'.$lang]?>
                               </a>
                               <?php if(count($pro_cat)) { ?>
                                   <ul>
                                       <?php for($j=0;$j<count($pro_cat); $j++) {
                                                $pro_item = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_item where id_cat= ? and type = ? and hienthi > 0 order by stt asc,id desc",array($pro_cat[$j]['id'],'san-pham'));
                                            ?>
                                           <li >
                                               <a class="transition" title="<?=$pro_cat[$j]['ten'.$lang]?>" href="<?=$pro_cat[$j][$sluglang]?>">
                                                   <?=$pro_cat[$j]['ten'.$lang]?>
                                               </a>
                                               <?php if(count($pro_item)) { ?>
                                                   <ul>
                                                       <?php for($k=0;$k<count($pro_item); $k++) {
                                                            ?>
                                                           <li >
                                                               <a class="transition" title="<?=$pro_item[$k]['ten'.$lang]?>" href="<?=$pro_item[$k][$sluglang]?>">
                                                                   <?=$pro_item[$k]['ten'.$lang]?>
                                                               </a>
                                                           </li>
                                                       <?php } ?>
                                                   </ul>
                                               <?php } ?>
                                           </li>
                                       <?php } ?>
                                   </ul>
                               <?php } ?>
                           </li>
                       <?php } ?>
                   </ul>
               <?php } ?>
           </li>
           <li> <a class="transition <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" title="Dịch vụ">Dịch vụ</a> </li>
           <li> <a class="transition <?php if($com=='cong-trinh') echo 'active'; ?>" href="cong-trinh" title="Công trình">Công trình</a> </li>
           <li> <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức">Tin tức</a> </li>
           <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
        </ul>
    </nav>
</div>
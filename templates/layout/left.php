<!-- <div id="main_left">
	<div class="box_sticky">
		<div class="box_left">
			<div class="title-left">  Danh mục sản phẩm </div>
			<div class="box_left_content menu_right">
				<ul>
					<?php if(count($pro_listmenu)) { for($i=0;$i<count($pro_listmenu); $i++) { ?>
						<li><a class="transition" title="<?=$pro_listmenu[$i]['ten'.$lang]?>" href="<?=$pro_listmenu[$i][$sluglang]?>">  <?=$pro_listmenu[$i]['ten'.$lang]?></a></li>
					<?php } } ?>
				</ul>
			</div>
		</div>
		<div class="box_left"> 
			<div class="box_left_content">
				<div class="slider-news1">
				    <?php
				        if(count($newsnb)>0) {
				            foreach ($newsnb as $key => $value) {
				    ?>
				    <a class="newshome-normal-1 text-decoration-none w-clear" href="<?=$value[$sluglang]?>" title="<?=$value['ten'.$lang]?>">
				        <p class="pic-newshome-normal scale-img effect-2"><img onerror="this.src='<?=THUMBS?>/300x300x2/assets/images/noimage.png';" src="<?=THUMBS?>/300x300x1/<?=UPLOAD_NEWS_L.$value['photo']?>" alt="<?=$value['ten'.$lang]?>"></p>
				        <div class="info-newshome-normal">
				            <h3 class="name-newshome text-split"><?=$value['ten'.$lang]?></h3>
				             
				        </div>
				    </a>    
				    <?php } } ?>
				</div> 
			</div>
		</div>
	</div>
</div> -->
<?php if($source=='index') {?>
	<div class="box_why">
		<div class="wrap-content">
			 
			<div class="slider_tc">
			  <?php foreach ((array)$tieuchi as $key => $value) {?>
			    <div class="item_tc">
			      <div class="wrap clearfix">
			        <div class="img"> <img onerror="this.src='thumbs/60x60x1/assets/images/noimage.png';" src="<?=THUMBS?>/60x60x2/<?= UPLOAD_NEWS_L.$value['photo'] ?>" alt="<?=$value["ten$lang"]?>"> </div>
			        <div class="inf_">
			        	<h3> <?=$value["ten$lang"]?> </h3>
			        	<div class="desc"> <?=$value["mota$lang"]?></div>
			        </div>
			      </div>
			    </div>
			  <?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
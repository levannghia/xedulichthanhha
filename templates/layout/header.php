<div class="header">
	<!-- <div class="header_top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="info-header"><i class="fa fa-map-marker-alt"></i> Địa chỉ: <?= $optsetting['diachi'] ?></p>			
			 	
			<p class="info-header"><i class="fas fa-envelope"></i> Email:  <?= $optsetting['email'] ?></p>
			<ul class="social social-header">
				<?php for ($i = 0; $i < count($social1); $i++) { ?>
				<li><a href="<?= $social1[$i]['link'] ?>" target="_blank"><img src="thumbs/32x32x1/<?= UPLOAD_PHOTO_L . $social1[$i]['photo'] ?>" alt="<?= $social1[$i]['ten' . $lang] ?>"></a></li>
				<?php } ?>
			</ul>					
		</div>
	</div> -->
	<div class="header-bottom1">
		<div class="wrap-content d-flex align-items-center justify-content-between">
				<a class="logo-header" href="<?= $config_base ?>"><img onerror="this.src='<?= THUMBS ?>/120x100x2/assets/images/noimage.png';" src="<?= THUMBS ?>/120x100x2/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" /></a>
				<a class="noidung-header">
					<h2>Xe dịch vụ du lịch thanh hà</h2>
					<p>Chuyên cung cấp dịch vụ đưa đón sân bay, du lịch tham quan các tỉnh</p>
				</a>
				<a class="banner-header" href=""><img onerror="this.src='thumbs/303x135x2/assets/images/noimage.png';" src="<?= THUMBS ?>/303x135x2/upload/photo/banner1-3972.png"/></a>
			
			<!-- <div class="hotline-header">
				<div><span>HOTLINE:</span></div>
				<p><?= $optsetting['hotline'] ?></p>


			</div> -->
		</div>
	</div>
</div>
<?php include TEMPLATE . LAYOUT . "menu.php"; ?>
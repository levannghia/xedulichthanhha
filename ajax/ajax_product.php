<?php
include "ajax_config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "ajax/ajax_product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";

/* Math url */
if ($idList > 0) {
	$tempLink .= "&idList=" . $idList;
	$where .= " and id_list = " . $idList;
}
if ($idCat > 0) {
	$tempLink .= "&idCat=" . $idCat;
	$where .= " and id_cat = " . $idCat;
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo, type,gia,giamoi,giakm from #_product where type='san-pham' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->getCache($sqlCache, 'result', 7200);

/* Count all data */
$countItems = count($cache->getCache($sql, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
	<div class="grid-page w-clear">
		<?php foreach ((array)$items as $key => $value) { ?>
			<div class="product">
				<a class="box-product text-decoration-none" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">
					<p class="pic-product scale-img"><img onerror="this.src='<?= THUMBS ?>/270x230x2/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/270x230x1/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>"></p>
					<h3 class="name-product text-split"><?= $value['ten' . $lang] ?></h3>
					<p class="xemthem">
						<a class="box-product text-decoration-none" href="<?= $value[$sluglang] ?>" title="<?= $value['ten' . $lang] ?>">

						</a>
						<a class="btn-3" href="<?= $value[$sluglang] ?>">Đặt xe</a>
					</p>
				</a>

			</div>

		<?php } ?>
	</div>
	<div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>
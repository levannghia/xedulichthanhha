<?php 
	include "ajax_config.php";
	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_project.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";
	/* Math url */
	if($idList>0)
	{
		$tempLink .= "&idList=".$idList;
		$where .= " and id_list = ".$idList;
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;
	/* Get data */
	$sql = "select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo, type  from #_news where type='du-an' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->getCache($sqlCache,'result',7200);
	/* Count all data */
	$countItems = count($cache->getCache($sql,'result',7200));
	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if($countItems) { ?>
	<div class="grid-page-project w-clear">
		<?php foreach ((array)$items as $key => $value) { ?>
			<div class="product">
			    <a class="box-product text-decoration-none" href="<?=$value[$sluglang]?>" title="<?=$value['ten'.$lang]?>">
			        <div class="pic-product scale-img effect-2">
			        	<img onerror="this.src='<?=THUMBS?>/385x270x2/assets/images/noimage.png';" src="<?=THUMBS?>/385x270x1/<?=UPLOAD_NEWS_L.$value['photo']?>" alt="<?=$value['ten'.$lang]?>"/>
			        </div>
			        <h3 class="name-product text-split"><?=$value['ten'.$lang]?></h3> 
			    </a>
			</div>
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?=$pagingItems?></div>
<?php } ?>
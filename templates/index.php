<!DOCTYPE html>
<html lang="<?=$config['website']['lang-doc']?>">
<head>
    <?php include TEMPLATE.LAYOUT."head.php"; ?>
    <?php include TEMPLATE.LAYOUT."css.php"; ?>
</head>
<body>
    <?php
        include TEMPLATE.LAYOUT."seo.php";
        
        include TEMPLATE.LAYOUT."header.php";
        include TEMPLATE.LAYOUT."mmenu.php"; 
        if($source=='index') include TEMPLATE.LAYOUT."slide.php";
        if($source!='index') include TEMPLATE.LAYOUT."breadcrumb.php";
         
    ?>
    <div class="wrap-main <?=($source=='index')?'wrap-home':''?> w-clear">
        <?php if($source=='index' || $com=='lien-he') {?>
            <?php include TEMPLATE.$template."_tpl.php"; ?>
        <?php }else{?>
            <div id="main_col">
                <?php include TEMPLATE.LAYOUT."left.php"; ?>
                <div id="main_right">
                    <?php include TEMPLATE.$template."_tpl.php"; ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php
        
        include TEMPLATE.LAYOUT."bottom.php";
        include TEMPLATE.LAYOUT."footer.php";
        include TEMPLATE.LAYOUT."modal.php";
        include TEMPLATE.LAYOUT."js.php"; 
    ?>
</body>
</html>
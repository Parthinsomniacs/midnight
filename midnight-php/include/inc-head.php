<?php
$version = "1.0.0";
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel=preload href="<?php echo $fontsurl; ?>yMJRMIlzdpvBhQQL_Qq7dy0.woff2" as="font" type="font/woff2" crossorigin />

<?php require_once $stylecss; ?>
<?php require_once $inccss; ?>

<!--Common CSS-->
<?php if ($swiperjs == "yes") { ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>swiper-bundle.min.css">
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>all-custom.css?<?php echo $version; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>all-responsive.css?<?php echo $version; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $cssurl; ?>lenis.css">
<!--End Common CSS-->
<?php require_once $seo; ?>
<?php
echo $block_head_all_page;
if ($page == "home") {
  echo $block_head_index_page;
}
?>
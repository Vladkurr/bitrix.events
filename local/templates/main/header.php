<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\main\Page\Asset;	
?>


<!DOCTYPE HTML>
<html>

<head>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<? 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/slider.css');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery-1.9.0.min.js");
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.nivo.slider.js");
	?>
	<?$APPLICATION->ShowHead();?>

	<script type="text/javascript">
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
</head>

<body>

<div id="panel">
	<? $APPLICATION->ShowPanel()?>
</div>
	
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="/">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.png" alt="" />
					</a>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu", 
					"top_menu", 
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N",
						"COMPONENT_TEMPLATE" => "top_menu"
					),
					false
				);?>
				<div class="clear"></div>
			</div>
		</div>
			<?php if ($APPLICATION->GetCurDir() == "/"): ?>
				<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"main_top_slider",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "N",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("",""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "10",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("",""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ID",
			"SORT_BY2" => "",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "",
			"STRICT_SECTION_CHECK" => "N"
		)
	);?>	
			<?php endif; ?>
			<div class="main">
				<div class="wrap">
					<div class="content_top">					
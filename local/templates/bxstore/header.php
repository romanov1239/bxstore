<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<?

use Bitrix\Main\Page\Asset;

// Пример подключения JS
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.fancybox.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
// Пример подключения CSS
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/vars.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.fancybox.css');
$APPLICATION->ShowHead();
?>
<?
$APPLICATION->ShowPanel();
?>
<div class="container">

    <div class="header">
        <div class="header_content">

            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main_menu",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>
        </div>
        <h1><?$APPLICATION->IncludeComponent(
                "bitrix:search.title",
                "",
                Array(
                    "CATEGORY_0" => array("main","iblock_knit_shop"),
                    "CATEGORY_0_TITLE" => "",
                    "CATEGORY_0_iblock_knit_shop" => array("all"),
                    "CATEGORY_0_main" => array(""),
                    "CHECK_DATES" => "N",
                    "CONTAINER_ID" => "title-search",
                    "INPUT_ID" => "title-search-input",
                    "NUM_CATEGORIES" => "1",
                    "ORDER" => "date",
                    "PAGE" => "#SITE_DIR#search/index.php",
                    "SHOW_INPUT" => "Y",
                    "SHOW_OTHERS" => "N",
                    "TOP_COUNT" => "5",
                    "USE_LANGUAGE_GUESS" => "Y"
                )
            );?></h1>
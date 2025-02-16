<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?><?$APPLICATION->IncludeComponent(
	"bitrix:wiki.menu",
	"",
	Array(
		"ELEMENT_NAME" => $_REQUEST["title"],
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => "",
		"MENU_TYPE" => "page",
		"OPER_VAR" => "oper",
		"PAGE_VAR" => "title",
		"PATH_TO_CATEGORIES" => "",
		"PATH_TO_DISCUSSION" => "",
		"PATH_TO_HISTORY" => "",
		"PATH_TO_HISTORY_DIFF" => "",
		"PATH_TO_POST" => "",
		"PATH_TO_POST_EDIT" => "",
		"PATH_TO_SEARCH" => "",
		"PATH_TO_USER" => "",
		"USE_REVIEW" => "Y"
	)
);?><?= require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
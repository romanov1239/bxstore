<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>Text here....<?$APPLICATION->IncludeComponent("bitrix:main.auth.form", "flat", Array(
	"AUTH_FORGOT_PASSWORD_URL" => "getpassword.php",	// Страница для восстановления пароля
		"AUTH_REGISTER_URL" => "registration.php",	// Страница для регистрации
		"AUTH_SUCCESS_URL" => "/personal/",	// Страница после успешной авторизации
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
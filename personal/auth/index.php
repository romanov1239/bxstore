<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>Text here....<?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form",
	"auth",
	Array(
		"AUTH_FORGOT_PASSWORD_URL" => "/personal/auth/get_password.php",
		"AUTH_REGISTER_URL" => "/personal/auth/registration.php",
		"AUTH_SUCCESS_URL" => "/personal/"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Application,
    Bitrix\Main\Page\Asset,
    Bitrix\Main\Localization\Loc;
	
Loc::loadMessages(__FILE__);

// Подключим свое расширение
CJSCore::RegisterExt("burov", Array(
    "js"	=>	SITE_TEMPLATE_PATH."/js/global.js",
    "lang"=>   SITE_TEMPLATE_PATH."/lang/".LANGUAGE_ID."/javascript.php",
    "rel" =>   array('jquery2', 'ajax'),
    "skip_core" => false,
));
CJSCore::Init(array('burov'));
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowMeta("keywords")?>
<?$APPLICATION->ShowMeta("description")?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="theme-color" content="">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="msapplication-tap-highlight" content="no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="MobileOptimized" content="320">
<meta name="HandheldFriendly" content="True">
<meta content="IE=edge" http-equiv="X-UA-Compatible">

<link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?=SITE_TEMPLATE_PATH?>/images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/favicon-16x16.png">
<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/images/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/images/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?
// Подключаем расширения
Extension::load("ui.bootstrap4");
Extension::load("ui.mustache");
Extension::load("ui.vue");
Extension::load("ui.vue.router");
Extension::load("ui.vue.vuex");

// Подключаем препроцессор SCSS
// Прекрасное решение от Олега Максименко
// Установить тут: http://marketplace.1c-bitrix.ru/solutions/olegpro.csscompiler/
$APPLICATION->IncludeComponent(
    "olegpro:olegpro.csscompiler",
    "",
    array(
        "PATH" => SITE_TEMPLATE_PATH . "/scss/",
        "FILES" => ["reboot.scss", "app.scss"],
        "PATH_CSS" => SITE_TEMPLATE_PATH . "/css/",
        "CLASS_HANDLER" => "\\Olegpro\\Csscompiler\\SCSSCompiler",
        "USE_SETADDITIONALCSS" => "Y",
        "REMOVE_OLD_CSS_FILES" => "Y",
        "TARGET_FILE_MASK" => "styles_%s.css"
    ),
    false,
    array(
        "HIDE_ICONS" => "Y"
    )
);

// Подключаем CSS
//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

// Подключаем JS
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate.min.js");

// Подключаем что-то ещё
//Asset::getInstance()->addString("");

// Cсобираем head
$APPLICATION->ShowCSS(true, true);
$APPLICATION->ShowHeadStrings();
$APPLICATION->ShowHeadScripts();
?>
<script type="text/javascript" data-skip-moving="true">
	// если нужно JS обязательно в HEAD
</script>
</head>
<body>
<?// Админская панель
//if($USER->isAdmin()) $APPLICATION->ShowPanel();
?>
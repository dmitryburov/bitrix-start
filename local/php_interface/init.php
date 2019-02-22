<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// дебаги
define("VUEJS_DEBUG", true);
define("LOGFILE", $_SERVER["DOCUMENT_ROOT"]."/" . date('d_m_Y_H_i') . "_log.log");

// Глобальные языковые константы
\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);

// Глобальные переменные
global $burovVariable;

// Константы
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/constants.php"))       // глобавльные
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/constants.php");
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/site_constants.php"))   // внутренние
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/site_constants.php");

// События
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/handlers.php"))        // глобавльные
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/handlers.php");
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/site_handlers.php"))    // внутренние
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/site_handlers.php");

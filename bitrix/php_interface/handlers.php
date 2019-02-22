<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$eventManager = \Bitrix\Main\EventManager::getInstance();

// Событие на закгрузку страницы
$eventManager->addEventHandler('main', 'OnPageStart', array('\\Burov\\Handlers\\Pageload', 'onPageStart'));



// Регистрция своих обработчиков или просто классов
\Bitrix\Main\Loader::registerAutoLoadClasses(null, array(
    '\\Burov\\Handlers\\Globals' => '/bitrix/php_interface/classes/global.php',
    '\\Burov\\Handlers\\Pageload' => '/bitrix/php_interface/classes/page.php',
	// регистрация других классов...
));
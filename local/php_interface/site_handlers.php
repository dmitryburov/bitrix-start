<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$eventManager = \Bitrix\Main\EventManager::getInstance();

// перед запуском страницы
$eventManager->addEventHandler('main', 'OnPageStart', array('\\Burov\\Handlers\\Page', 'checkPageStart'));



// Регистрируем свои классы
\Bitrix\Main\Loader::registerAutoLoadClasses(null, array(
    '\\Burov\\Handlers\\Page' => '/local/php_interface/classes/page.php',
));

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Data\Cache;
use \Bitrix\Main\Web\HttpClient;

$arData = '';
$cacheId = 'burov_b_footer_support';
$cacheTtl = '14400';
$cache = Cache::createInstance();

if ($cache->initCache($cacheTtl, $cacheId))
{
    if($cacheData = $cache->getVars())
        $arData = $cacheData['key'];
}
elseif($cache->startDataCache())
{
    $options = array(
        "redirect" => true,
        "redirectMax" => 5,
        "waitResponse" => true,
        "socketTimeout" => 10, // Таймаут соединения, сек
        "streamTimeout" => 30,
        "version" => HttpClient::HTTP_1_1,
        "disableSslVerification" => false,
    );
    $httpClient = new HttpClient($options);
    $httpClient->query('GET', 'https://dburov.com/api/public/bitrix/support.php?type=footer_link');

    if($httpClient->getStatus() == 200)
        $arData = json_decode($httpClient->getResult(), true);

    $cache->endDataCache(array("key" => $arData));
}

if(is_array($arData))
{
?>
<span style="text-align:left;float:right;">
  Разработка сайта - <a href="<?=$arData['COMPANY_URL']?>" style="color:dodgerblue" target="_blank"><?=$arData['COMPANY_NAME']?></a><br />
  Тех. поддержка: <?=$arData['COMPANY_PHONE_SUPPORT']?> или <a href="<?=$arData['COMPANY_LINK_SUPPORT']?>" style="color:dodgerblue" target="_blank">написать онлайн</a>
</span>
<?
}
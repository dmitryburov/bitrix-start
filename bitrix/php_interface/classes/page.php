<?php
namespace Burov\Handlers;

/**
 * Class Pageload
 * @package Burov\Handlers
 */
class Pageload
{

    public static function onPageStart()
    {
        // проверим dev-версию
        if(!self::checkDevRedirect() && ENABLE_DEV)
        {
            \CHTTP::SetStatus('401 Unauthorized');
            die();
        }
    }


    /**
     * Блокировка на время разработки
     * @return bool
     */
    private static function checkDevRedirect()
    {
        $result = false;
        $request = \Bitrix\Main\Context::getCurrent()->getRequest();

        if($request->get('secret') == SECRET_KEY_DEV)
        {
            setcookie('secret', SECRET_KEY_DEV, time()+2592000);
            return true;
        }
        elseif(isset($_COOKIE['secret']) && $_COOKIE['secret'] == SECRET_KEY_DEV) return true;
        else return false;
    }
}
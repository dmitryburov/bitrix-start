<?php

namespace Burov\Handlers;

/**
 * Class Global
 * @package Burov\Handlers
 */
class Globals {

    /**
     * Склонение текста к определенному числу
     * @param $number
     * @param $endingArray
     * @return mixed
     */
    public function arFormatText($number, $endingArray)
    {
        $number = $number % 100;

        if ($number>=11 && $number<=19){
            $ending=$endingArray[2];
        }else{
            $i = $number % 10;
            switch ($i)	{
                case (1): $ending = $endingArray[0]; break;
                case (2):	case (3):	case (4): $ending = $endingArray[1]; break;
                default: $ending=$endingArray[2];
            }
        }
        return $ending;
    }

	/**
     * Отправка системного Hot-письма
     * @param $method
     * @param $params
     */
    public function sendSecureNotify($method, $params)
    {
        global $USER;

        \Bitrix\Main\Mail\Event::send([
            "EVENT_NAME" => "BUROV_SECURITY",
            "LID" => 's1',
            "C_FIELDS" => array(
                "METHOD" => $method,
                "PARAMS" => $params,
                "SESSION" => bitrix_sessid(),
                "USER_ID" => ($USER->IsAuthorized()) ? $USER->GetID() : 'не определено',
                "IP_ADDRESS" => \Bitrix\Main\Context::getCurrent()->getRequest()->getRemoteAddress(),
            ),
        ]);
    }

}

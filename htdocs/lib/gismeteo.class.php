<?php
/**
 * Created by JetBrains PhpStorm.
 * User: krom
 * Date: 14.06.12
 * Time: 18:50
 * To change this template use File | Settings | File Templates.
 */
class gismeteo
{

    /**
     * Функция возвращает ID города по его названию
     * @param $sName string Название города
     * @return int ИД города
     */
    function getCityIdByName($sName) {
        $page = file_get_contents("http://www.gismeteo.ru/ajax/suggest/?callback=jQuery15104299549029674381_1339680183670&lang=ru&startsWith=$sName&sort=typ&_=1339681505875");
        preg_match('/\(([^)]+)/i', $page, $m);
        $info = json_decode($m[1], true);
        return $info ['items'][0]['id'];
    }

    /**
     * Функция возвращает погоду для города
     * @param $iCityId int ID города
     * @return array
     * [temperature] - Температура
     * [pressure] - давление
     */
    function getWeatherByCityId($iCityId) {
        $page = file_get_contents("http://www.gismeteo.ru/city/daily/$iCityId/");
        if (preg_match('/Погода за окном.*?<dd class=\'value m_temp c\'>([+0-9]+).*?<dd class=\'value m_press torr\'>(\d+)/isu', $page, $m)) {
            $weather_array ['temperature'] = $m[1];
            $weather_array ['pressure'] = $m[2];
        }
    }
}







<?php
/**
 * Created by JetBrains PhpStorm.
 * User: krom
 * Date: 14.06.12
 * Time: 19:39
 * To change this template use File | Settings | File Templates.
 */
require_once 'include.php';
$gismeteo = new gismeteo();

$city_id = $_REQUEST['id'];
$info = $gismeteo->getWeatherByCityId($city_id);
echo "Температура: {$info['temperature']}<br>";
echo "Давление: {$info['pressure']}<br>";
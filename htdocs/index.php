<?php
/**
 * Created by JetBrains PhpStorm.
 * User: krom
 * Date: 14.06.12
 * Time: 18:28
 * To change this template use File | Settings | File Templates.
 */
require_once 'include.php';
$db = db::getConnection();
$result = $db->query('select * from city');

while ($city_array = mysql_fetch_array($result)){
    echo "<a href='weather.php?id='.$city_array[1].'>$city_array[2]</a><br>";
}

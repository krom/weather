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
$db->query('select * from city');
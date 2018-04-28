<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2018/4/19
 * Time: 18:18
 */




$preg = '/^\d+(,?\d)*$/';

$numStr = '1,1,1';

// $numStr = '1,2,3,4,556765756,9';

preg_match_all($preg, $numStr, $data);

print_r($data);
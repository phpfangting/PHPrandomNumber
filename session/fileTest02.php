<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/31
 * Time: 11:07
 */
require_once './SessionFile.php';
SessionFile::start();
echo $_SESSION['name'];

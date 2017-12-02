<?php
/**
 * Created by PhpStorm.
 * User: liufangting
 * Date: 2017/8/31
 * Time: 11:33
 */
require_once './SessionFile.php';
SessionFile::start();
$_SESSION['name']='死胖子';

$_SESSION['age']=19;
session_commit();
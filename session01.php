<?php 
ini_set('session.save_path','e:\tmp');
ini_set('session.cookie_lifetime',1);
ini_set('session.gc_maxlifetime',1);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);
session_start();
echo isset($_SESSION['name'])?$_SESSION['name']:'';
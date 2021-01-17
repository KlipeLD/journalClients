<?php
include_once('db.php');
$now = time();

/*DB::Query("SET CHARSET utf8");
DB::Query("SET NAMES utf8");
DB::Query("set character_set_client='utf8'");
DB::Query("set character_set_results='utf8'");
DB::Query("set collation_connection='utf8_general_ci'"); */
date_default_timezone_set('Europe/Minsk');
error_reporting(0);


$uri=GetEnv("REQUEST_URI");
$uri=explode("ins",$uri);
##################### Класс борьбы с SQL атаками ################
include_once('sql.php');

$stop_injection = new InitVars();
$stop_injection->checkVars();
##################### Класс борьбы с SQL атаками ################

require_once('class.inputfilter.php');


$ifq = new InputFilter();
//xss фильтрация
$_POST = $ifq->process($_POST);
$_GET = $ifq->process($_GET);
$_ENV = $ifq->process($_ENV);
$_REQUEST = $ifq->process($_REQUEST);
$_SESSION = $ifq->process($_SESSION);

//sql иньекция
$_POST = $ifq->safeSQL($_POST, $link);
$_GET = $ifq->safeSQL($_GET, $link);
$_ENV = $ifq->safeSQL($_ENV, $link);
$_REQUEST = $ifq->safeSQL($_REQUEST, $link);
$_SESSION = $ifq->safeSQL($_SESSION, $link);
?>
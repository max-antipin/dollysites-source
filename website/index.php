<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
if('POST' === $_SERVER['REQUEST_METHOD'])
 {
	var_dump($_POST);
	die;
 }
$domains = [
	'revolted.ru',
	'www.revolted.ru',
	'images.revolted.ru',
	'static.revolted.ru',
	'dolly-source.msapis.com',
];
function LoadTpl(array $domains, string $name, ...$args)
{
	require(__DIR__.DIRECTORY_SEPARATOR.'include'.DIRECTORY_SEPARATOR.$name.'.php');
}
$tpls = [
	'server-error' => ['name' => 'xxxx', 'code' => 500],
	'panel' => ['name' => 'main', 'code' => 403],
	'nonexisting.css' => ['name' => 'main', 'code' => 404],
	'old-test' => ['name' => 'redirect', 'code' => 301, 'args' => ['https://revolted.ru/test/'], ],
	'redirect' => ['name' => 'redirect', 'code' => 303, 'args' => ['https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']]],
	// 'redirect-test' => ['name' => 'redirect', 'code' => 307, 'args' => [''], ],//Сделать бесконечный редирект на разные URL с разными доменами. Выводить Referer.
];
$path = explode('?', $_SERVER['REQUEST_URI'], 2);
// if(2 === count($path))
 // {
	
 // }
// else;
$path = trim($path[0], '/');
$args = [];
if(isset($tpls[$path]))
 {
	$name = $tpls[$path]['name'];
	if(isset($tpls[$path]['code'])) http_response_code($tpls[$path]['code']);
	if(isset($tpls[$path]['args'])) $args = $tpls[$path]['args'];
 }
else $name = 'main';
// var_dump($path);
LoadTpl($domains, $name, ...$args);
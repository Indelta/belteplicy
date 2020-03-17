<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 03.11.2017
 * Time: 16:56
 */

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$mes = "";
$crm_mes = "";
if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $mes = "<p>Имя: $name</p>";
    $crm_mes .= "Имя: $name\r\n";
}

if(!empty($_POST['phone'])){
    $phone = $_POST['phone'];
    $phone2 = preg_replace("/[^0-9]/", '', $phone);
    $mes.="<p>Телефон: $phone2</p>";
}

if(!empty($_POST['type'])){
    $type = $_POST['type'];
    $mes.="<p>Отправлено из формы: $type</p>";
}
if(!empty($_POST['region'])) {
    $region = $_POST['region'];
    $mes .="<p>Регион: $region</p>";
    $crm_mes .= "Регион: $region\r\n";
}
if(!empty($_POST['color'])) {
    $color = $_POST['color'];
    $mes .= "<p>Цвет: $color</p>";
    $crm_mes .= "Цвет: $color\r\n";
}
if($_POST['type'] == 'Выбор цвета') {
    if(!empty($_POST['colorPopup'])) {
        $color = implode(", ", $_POST['colorPopup']);
        $mes .= "<p>Цвет: $color</p>";
        $crm_mes .= "Цвет: $color\r\n";
    }
}
$retail = [
    'api_hash' => 'WPBfPpdXdlmdandbS2yt4PNoPzc5lR23',
    'api_url' => 'https://teplica-da2.retailcrm.ru/',
    'site_id' => 'teplica-da-ru'
];
require_once 'api/lib/RetailCrm/Http/Client.php';
require_once 'api/lib/RetailCrm/Response/ApiResponse.php';
require_once 'api/lib/RetailCrm/Exception/CurlException.php';
require_once 'api/lib/RetailCrm/Exception/InvalidJsonException.php';
require_once 'api/lib/RetailCrm/ApiClient.php';
$api = new \RetailCrm\ApiClient($retail['api_url'], $retail['api_hash'], $retail['site_id']);
$send_data =
    array(
        'countryIso' => 'RU',
        'firstName' => (isset($_POST['name'])?$_POST['name']:'Client'),
        'phone' => (isset($_POST['phone'])?$_POST['phone']:'Client'),
        'customerComment' => (isset($_POST['type'])?'Форма: '.$_POST['type']:'').PHP_EOL.
            (isset($_POST['color']) ? 'Цвет: '.$_POST['color'] : '').PHP_EOL.
            (isset($_POST['model']) ? 'Модель: '.$_POST['model'] : '').PHP_EOL.
            (isset($region)?'Регион доставки: '.$region:''),
        'orderType' => 'eshop-individual',
        'orderMethod' => 'lend',
        'status' => 'new',
        'source'=>array('source'=>'belteplicy.ru/besedki','campaign'=>'site')
    );
$api->ordersCreate($send_data);

//deltaplanirovanie@gmail.com,
$to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, manager.deltaplan@gmail.com"; //
$sub = '=?utf-8?B?' . base64_encode('Заявка c Belteplicy.ru/besedki') . '?=';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: belteplicy.ru/besedki\r\n";

if (mail("$to", $sub, "$mes", "$headers")) {
    include('leads.php');
    echo "1";
}


?>
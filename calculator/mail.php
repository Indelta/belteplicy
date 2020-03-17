<?php

error_reporting(E_ALL);
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$backurl = "http://belteplicy.ru/calculator/";

$mes = "";
$crm_mes = "";

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $mes.= "<p>Имя: $name</p>";
    $crm_mes .= "Имя: $name\n\r";
}

if(!empty($_POST['phone'])){
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $mes.= "<p>Телефон: $phone</p>";
}

if(!empty($_POST['type'])){
    $type = $_POST['type'];
    $mes.= "<p>Отправлено из формы: $type</p>";
}

if($_POST['type']=='Калькулятор'){

    $products  = stripslashes($_POST['products']);
    if(!empty($_POST['products'])) {
        foreach($_POST['products'] as $check) {
            $products .= $check .', ';
        }
    }
    $mes.= "<p>Что планируете выращивать в теплице: $products</p>";
    $crm_mes .= "Что планируете выращивать в теплице: $products\n\r";

    if(!empty($_POST['length'])) {
        $length = $_POST['length'];
        $mes.= "<p>Какой длины необходима теплица: $length</p>";
        $crm_mes .= "Какой длины необходима теплица: $length\n\r";
    }

    if(!empty($_POST['region'])) {
        $region = $_POST['region'];
        $mes.= "<p>В какой регион покупаете теплицу: $region</p>";
        $crm_mes .= "В какой регион покупаете теплицу: $region\n\r";
    }

    if(!empty($_POST['price'])) {
        $price = $_POST['price'];
        $mes.= "<p>В какой бюджет планируете вложиться: $price</p>";
    }

    $dopolnitelno  = stripslashes($_POST['dopolnitelno']);
    if(!empty($_POST['dopolnitelno'])) {
        foreach($_POST['dopolnitelno'] as $check) {
            $dopolnitelno .= $check .', ';
        }
    }
    $mes.= "<p>Дополнительные параметры со скидкой 50%: $dopolnitelno</p>";
    $crm_mes .= "Дополнительные параметры со скидкой 50%: $dopolnitelno\n\r";

    $svyaz  = stripslashes($_POST['svyaz']);
    if(!empty($_POST['svyaz'])) {
        foreach($_POST['svyaz'] as $check) {
            $svyaz .= $check .', ';
        }
    }
    $mes.= "<p>Как удобно получить варианты теплиц и их стоимость: $svyaz</p>";
    $crm_mes .= "Как удобно получить варианты теплиц и их стоимость: $svyaz\n\r";
}   

$retail = [
    'api_hash' => 'WPBfPpdXdlmdandbS2yt4PNoPzc5lR23',
    'api_url' => 'https://teplica-da2.retailcrm.ru/',
    'site_id' => 'teplica-da-ru'
];

//belteplica@gmail.com
    $to = "dev@deltaplan.by, deltaplan.dev@gmail.com,  deltaplanirovanie@gmail.com, manager.deltaplan@gmail.com, belteplica@gmail.com";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Belteplicy.ru/calculator') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: belteplicy.ru/calculator\r\n";


    if ($phone == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else{
        if (mail("$to", "$sub", "$mes", "$headers")) {
            include 'leads.php';
            echo ".";
        }
    }

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
            (isset($products)?'Для выращивания: '.$products:'').PHP_EOL.
            (isset($_POST['length'])?'Длина теплицы: '.$_POST['length']:'').PHP_EOL.
            (isset($_POST['region'])?'Регион: '.$_POST['region']:'').PHP_EOL.
            (isset($_POST['price'])?'Бюджет: '.$_POST['price']:'').PHP_EOL.
            (isset($dopolnitelno)?'Дополнительно: '.$dopolnitelno:''),
        'orderType' => 'eshop-individual',
        'orderMethod' => 'lend',
        'status' => 'new',
        'source'=>array('source'=>'belteplicy.ru/calculator','campaign'=>'site')
    );
$api->ordersCreate($send_data);
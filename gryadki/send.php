<?php

    header("Content-type: text/html; charset=utf-8");

    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
    $phone = preg_replace("/[^0-9]/", '', $phone);
    $length = isset($_POST['length']) ? $_POST['length'] : "";
    $width = isset($_POST['width']) ? $_POST['width'] : "";
    $higth = isset($_POST['hight']) ? $_POST['hight'] : "";
    $type = isset($_POST['type']) ? $_POST['type'] : "";

    $retail = [
        'api_hash' => 'WPBfPpdXdlmdandbS2yt4PNoPzc5lR23',
        'api_url' => 'https://teplica-da2.retailcrm.ru/',
        'site_id' => 'teplica-da-ru'
    ];
    
    //deltaplanirovanie@gmail.com, belteplica@gmail.com
    $to = "deltaplanirovanie@gmail.com, deltastream.dev@gmail.com, manager.deltaplan@gmail.com, belteplica@gmail.com";
    $mes = "Телефон: $phone
    <br>Форма: $type
    <br>Длина грядки: $length
    <br>Ширина грядки: $width
    <br>Высота бортов: $higth";
    
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Belteplicy.ru/gryadki') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: belteplicy.ru/gryadki\r\n";
    
    if (mail("$to", "$sub", "$mes", "$headers")) include 'leads.php';
       
    
    require_once 'api/lib/RetailCrm/Http/Client.php';
    require_once 'api/lib/RetailCrm/Response/ApiResponse.php';
    require_once 'api/lib/RetailCrm/Exception/CurlException.php';
    require_once 'api/lib/RetailCrm/Exception/InvalidJsonException.php';
    require_once 'api/lib/RetailCrm/ApiClient.php';
    $api = new \RetailCrm\ApiClient($retail['api_url'], $retail['api_hash'], $retail['site_id']);
    $send_data =
        array(
            'countryIso' => 'RU',
            'firstName' => (isset($_POST['name']) ? $_POST['name'] : 'Client'),
            'phone' => (isset($_POST['phone']) ? $_POST['phone'] : 'Client'),
            'customerComment' => (isset($_POST['type']) ? 'Форма: ' . $_POST['type'] : '').PHP_EOL.
                (isset($_POST['length']) ? 'Длина грядки: '. $_POST['length'] : '').PHP_EOL.
                (isset($_POST['width']) ? 'Ширина грядки: ' . $_POST['width'] : '').PHP_EOL.
                (isset($_POST['higth']) ? 'Высота бортов: '.$_POST['higth'] : ''),
            'orderType' => 'eshop-individual',
            'orderMethod' => 'lend',
            'status' => 'new',
            'source'=>array('source'=>'belteplicy.ru/gryadki','campaign'=>'site')
        );
    $api->ordersCreate($send_data);

?>
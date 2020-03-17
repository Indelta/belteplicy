<?php

    header("Content-type: text/html; charset=utf-8");

    $posName = isset($_POST['name']) ? $_POST['name'] : "";
    $posPhone = isset($_POST['phone']) ? $_POST['phone'] : "";
    $posPhone = preg_replace("/[^0-9]/", '', $posPhone);
    $width = $_POST['width'];
    $type = $_POST['type'];
    $what  = stripslashes($_POST['what']);
    if(!empty($_POST['what'])) {
        foreach($_POST['what'] as $check) {
            $what .= $check .', ';
        }
    }
    $month = $_POST['month'];
    $region = $_POST['region'];
    $retail = [
        'api_hash' => 'WPBfPpdXdlmdandbS2yt4PNoPzc5lR23',
        'api_url' => 'https://teplica-da2.retailcrm.ru/',
        'site_id' => 'teplica-da-ru'
    ];

    // if ($type == "Открыть каталог") {
    //     sms($posPhone);
    // }

    //deltaplanirovanie@gmail.com, belteplica@gmail.com
    $to = "deltaplanirovanie@gmail.com, dev@deltaplan.by, deltaplan.dev@gmail.com, manager.deltaplan@gmail.com, belteplica@gmail.com";
    $mes = "Телефон: $posPhone
    <br>Имя: $posName
    <br>Форма: $type
    <br>Длина теплицы: $width
    <br>Месяц установки: $month
    <br>Регион доставки: $region";
    $crm_mes = "Имя: $posName\nДлина теплицы: $width\nМесяц установки: $month\nРегион доставки: $region\n";
    $sub = '=?utf-8?B?' . base64_encode('Заявка с Belteplicy.ru') . '?=';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: belteplicy.ru\r\n";

    if ($posPhone == '') {
        //редирект назад с сообщением о ошибке валидации например так
        echo "<script>document.location='index.php?error=1';</script>";
    } else{
        if (mail($to, $sub, $mes, $headers)) {
            include 'leads.php';
            echo "1";
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
                (isset($_POST['width'])?'Длина теплицы: '.$_POST['width']:'').PHP_EOL.
                (isset($what)?'Что планируют выращивать: '.$what:'').PHP_EOL.
                (isset($month)?'Месяц установки теплицы: '.$month:'').PHP_EOL.
                (isset($region)?'Регион доставки: '.$region:''),
            'orderType' => 'eshop-individual',
            'orderMethod' => 'lend',
            'status' => 'new',
            'source'=>array('source'=>'belteplicy.ru','campaign'=>'site')
        );
    $api->ordersCreate($send_data);


    function sms($phone)
    {
        $url = "http://cp.websms.by";
        $timeout = 5;
        $func = 'msg_send_bulk';

        $package = array(
            array(
                'recipient' => $phone,
                'message'   => "Ваш промокод на покупку теплицы: ОСЕНЬ2019",
                'sender'    => 'DeltaPlanBY'
            ),
        );

        $rawData = json_encode($package);
        $ch = curl_init();

    //задаем параметры CURL
        curl_setopt_array($ch, array(
            CURLOPT_URL            => $url,
            CURLOPT_FAILONERROR    => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT        => $timeout,
            CURLOPT_CONNECTTIMEOUT => 0,
            CURLOPT_POST           => 1,
            CURLOPT_POSTFIELDS     => array(
                'r'        => 'api/' . $func,
                'user'     => 'deltaplanirovanie@gmail.com',
                'apikey'   => '0UmzxrSo9x',
                'messages' => $rawData)
        ));

        $result = curl_exec($ch);

        if ($result) {
            $__BOM = pack('CCC', 239, 187, 191);
            while (0 === strpos($result, $__BOM)) $result = substr($result, 3);
            $result = json_decode($result);
        } else {
            echo 'Ошибка доступа к сервису !';
        }

        curl_close($ch);
    }

?>
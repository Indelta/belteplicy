<?php
    date_default_timezone_set('Europe/Moscow');
    // формируем запись в клиентскую таблицу google
    $url = "https://docs.google.com/forms/d/e/1FAIpQLSdLYUzKl-5GWpkpduFlmlSRA24EGX4mEjcBjmE16jxdg1seTw/formResponse";
    $post_data = array (
        'entry.1092656651' => date("d.m.Y"),
        'entry.872820023' => date("G:i"),
        "entry.1927459271" => preg_replace("/[^0-9]/", '', $_POST['phone']),
        'entry.471117195' => $_POST['type'],
        'entry.644740260' => $_POST['length'],
        'entry.1218080361' => $_POST['width'],
        'entry.1143465019' => $_POST['higth'],
        'entry.1751220155' => $_POST['utm_term'],
        'entry.1339261384' => $_POST['utm_source'],
        'entry.515431640' => $_POST['utm_medium'],
        'entry.143043782' => $_POST['utm_campaign'],
        'entry.1313469359' => $_POST['utm_content'],
    );
    
    // с помощью CURL заносим данные в клиентскую таблицу google
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // указываем, что у нас POST запрос
    curl_setopt($ch, CURLOPT_POST, 1);
    // добавляем переменные
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    //заполняем таблицу google
    $output = curl_exec($ch);
    curl_close($ch);

    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
    $length = isset($_POST['length']) ? $_POST['length'] : "";
    $width = isset($_POST['width']) ? $_POST['width'] : "";
    $higth = isset($_POST['higth']) ? $_POST['higth'] : "";

    $crm_mes = "Телефон: $phone\n Длина грядки: $length\n Ширина грядки: $width\n Высота бортов: $higth";
    
    $url_crm = 'http://crm.deltaplan.by/getlead/';
        $params = array(
            'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
            'id_user' => '92', // id клиента из CRM у аккаунта
            'utm_medium' => $_POST["utm_medium"],
            'utm_source' => $_POST["utm_source"],
            'utm_compaign' => $_POST["utm_campaign"],
            'utm_term' => $_POST["utm_term"],
            'utm_content' => $_POST["utm_content"],
            'message' => $crm_mes,
            'form_name' => $_POST["type"], // не должна содержать сочетание символов "phone"
            'phone' => preg_replace("/[^0-9]/", '', $_POST['phone']), //+375299465533
        );
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL, $url_crm);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        // указываем, что у нас POST запрос
        curl_setopt($ch2, CURLOPT_POST, 1);
        // добавляем переменные
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $params);
        //заполняем таблицу google
        $output = curl_exec($ch2);
        curl_close($ch2);
?>
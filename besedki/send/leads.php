<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 25.07.2017
 * Time: 11:02
 */
date_default_timezone_set('Europe/Moscow');
// формируем запись в клиентскую таблицу google
$url = "https://docs.google.com/forms/d/e/1FAIpQLSeTIRSkYTEXsxety0osDyP9yCmxAM80eKfzTj_qTRVIVhuYjA/formResponse";
$post_data = array (
    'entry.469698184' => date("d.m.Y"),
    'entry.1428839590' => date("G:i"),
    "entry.1162428337" => preg_replace("/[^0-9]/", '', $_POST['phone']),
    "entry.263331928" => $_POST['name'],
    "entry.1630924038" => $_POST['color'],
    "entry.783617981" => $_POST['region'],
    'entry.2038264910' => $_POST['type'],
    'entry.1724984049' => $_POST['utm_term'],
    'entry.1663057097' => $_POST['utm_source'],
    'entry.2000183816' => $_POST['utm_medium'],
    'entry.1802532290' => $_POST['utm_campaign'],
    'entry.892280688' => $_POST['utm_content']
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


$url_crm = 'http://crm.deltaplan.by/getlead/';
    $params = array(
        'password' => '123fSAF#!)(Fas)', // пароль для отработки пост запросов
        'id_user' => '79', // id клиента из CRM у аккаунта
        'utm_medium' => $_POST["utm_medium"],
        'utm_source' => $_POST["utm_source"],
        'utm_compaign' => $_POST["utm_campaign"],
        'utm_term' => $_POST["utm_term"],
        'utm_content' => $_POST["utm_content"],
        'message' => $crm_mes,
        'form_name' => $_POST["type"], // не должна содержать сочетание символов "phone"
        'phone' => preg_replace("/[^0-9]/", '', $_POST['phone']), //+375299465533
    );
    
    curl_setopt($ch, CURLOPT_URL, $url_crm);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // указываем, что у нас POST запрос
    curl_setopt($ch, CURLOPT_POST, 1);
    // добавляем переменные
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    //заполняем таблицу google
    $output = curl_exec($ch);
    curl_close($ch);

?>
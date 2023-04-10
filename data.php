<?php

// В теле запроса содержится JSON, php://input читает сырой запрос,
// который мы отправили через функцию sendRequest,
// а json_decode расшифровывает в виде массива
$data = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);

$chat_id = $data['message']['chat']['id']; // ID чата
$chat_type = $data['message']['chat']['type']; // Тип чата
$user_id = $data['message']['from']['id']; // ID юзера
$username = $data['message']['from']['username']; // Юзернейм
$message = $data['message']['text']; // Текст сообщения
$message_id = $data['message']['message_id']; // ID сообщения
$first_name = $data['message']['from']['first_name'];
$last_name = $data['message']['from']['last_name'];

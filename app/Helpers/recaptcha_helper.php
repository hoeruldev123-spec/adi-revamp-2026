<?php
// app/Helpers/recaptcha_helper.php

if (!function_exists('verify_recaptcha')) {
    function verify_recaptcha($token)
    {
        $secretKey = getenv('RECAPTCHA_SECRET_KEY');

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $secretKey,
            'response' => $token
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $result = json_decode($response, true);

        // Log untuk debugging
        log_message('debug', 'reCAPTCHA response: ' . json_encode($result));

        return $result;
    }
}

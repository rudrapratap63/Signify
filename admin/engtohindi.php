<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Function to handle cURL requests
function curl($url, $params = array(), $is_cookie_set = false)
{
    // Set a custom temporary directory within the project
    $tmpDir = __DIR__ . '/tmp';
    if (!file_exists($tmpDir)) {
        mkdir($tmpDir, 0777, true);
    }

    // Create a cookie file in the tmp directory
    $ckfile = tempnam($tmpDir, "CURLCOOKIE");

    if (!$is_cookie_set) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
    }

    $str = '';
    $str_arr = array();
    foreach ($params as $key => $value) {
        $str_arr[] = urlencode($key) . "=" . urlencode($value);
    }
    if (!empty($str_arr)) {
        $str = '?' . implode('&', $str_arr);
    }

    $Url = $url . $str;

    $ch = curl_init($Url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec($ch);
    return $output;
}

// Function to translate Hindi to English only
function translateHindiToEnglish($text)
{
    // Check if the input contains Hindi characters
    if (!preg_match('/[\x{0900}-\x{097F}]/u', $text)) {
        return ['error' => 'Input must be in Hindi'];
    }

    $text = urlencode($text);
    
    // URL for Hindi to English translation only
    $url = 'http://translate.google.com/translate_a/t?client=t&text=' . $text . 
           '&hl=en&sl=hi&tl=en&ie=UTF-8&oe=UTF-8&multires=1&otf=1&pc=1&trs=1&ssel=3&tsel=6&sc=1';

    // Make the cURL request
    $response = curl($url);

    // Parse the response
    $response = explode('"', $response);
    return isset($response[1]) ? ['translated' => $response[1]] : ['error' => 'Translation failed'];
}

// Set the content type to JSON
header('Content-Type: application/json; charset=utf-8');

// Handle the GET request
if (isset($_GET['text'])) {
    $input = $_GET['text'];
    $result = translateHindiToEnglish($input);
    echo json_encode($result);
} else {
    echo json_encode(['error' => 'No input provided']);
}
?>
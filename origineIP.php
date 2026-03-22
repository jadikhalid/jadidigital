<?php

$country_code = $_SERVER["HTTP_CF_IPCOUNTRY"] ?? $_SERVER["GEOIP_COUNTRY_CODE"] ?? "";

if (empty($country_code)) {
    // Note : file_get_contents peut être lent, à n'utiliser que si nécessaire
    $json = @file_get_contents("http://ip-api.com/json/" . $_SERVER['REMOTE_ADDR']);
    if ($json) {
        $data = json_decode($json);
        $country_code = $data->countryCode ?? "";
    }
}
$is_morocco = ($country_code === 'MA');

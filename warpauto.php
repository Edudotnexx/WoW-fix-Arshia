<?php

    $getList = file_get_contents('https://raw.githubusercontent.com/arshiacomplus/WoW-fix/refs/heads/main/warpauto.json?v1.'.time());
    $strings = explode("\n", $getList);

    $warp = "//profile-title: base64:44CY4oC0yrfhtYPKs+G1luKAt+OAmfCThILwk4aD\n";
    $warp .= "//profile-update-interval: 4\n";
    $warp .= "//subscription-userinfo: upload = 805306368000; download = 2576980377600; total = 6012954214400; expire = 1762677732\n";
    $warp .= "//profile-web-page-url: https://github.com/arshiacomplus\n\n";
    $warp .= "warp://auto#mansor427🇮🇷 &&detour=warp://auto#@arshiacomplus🇩🇪";
    $warp .= "\n";
    $warp .= "warp://@auto/?ifp=1-3&ifpm=m4#🇮🇷𓄂𓆃 &&detour=warp://@auto/?ifp=1-2&ifpm=m5#🇩🇪@arshiacomplus";
    $warp .= "\n";

   $i = 1;
$pattern = '/^warp:\/\/.*$/';
$first_ip = '';
$second_ip = '';

foreach ($strings as $val) {
    if ($i > 2) {
        break;
    }

    if (preg_match($pattern, $val) && !str_contains($val, '&&detour=')) {
        if ($i == 1) {
            $first_ip = $val;
        } elseif ($i == 2) {
            $second_ip = $val;
        }

        $i++;
    }
}

$warp .= "\n" . $first_ip . '#𓄂𓆃 🇮🇷 IP&&detour=' . $second_ip . '#@arshiacomplus 🇩🇪 IP';

    file_put_contents("subwarp/warp", $warp);

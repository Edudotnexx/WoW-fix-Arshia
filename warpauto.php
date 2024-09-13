<?php

    $getList = file_get_contents('https://raw.githubusercontent.com/Edudotnexx/WoW-fix-Arshia/main/warpauto.json?v1.'.time());
    $strings = explode("\n", $getList);

    $warp = "//profile-title: base64:8J2QhPCdkKbwnZCa8J2QnfCdkIbwnZCr8J2QmvCdkKnwnZCh8J2QovCdkJwgLSB7V0FSUH0=\n";
    $warp .= "//profile-update-interval: 1\n";
    $warp .= "//subscription-userinfo: upload=0; download=12503400000; total=10737418240000000; expire=0\n";
    $warp .= "//profile-web-page-url: https://github.com/Edoudotnexx\n\n";
    $warp .= "warp://auto#@EmadGraphic🇮🇷 &&detour=warp://auto#@EmadGraphic🇩🇪";
    $warp .= "\n";
    $warp .= "warp://@auto/?ifp=5-10#🇮🇷𓄂𓆃 &&detour=warp://@auto/?ifp=5-10#🇩🇪@@EmadGraphic";
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

$warp .= "\n" . $first_ip . '#𓄂𓆃 🇮🇷 IP&&detour=' . $second_ip . '#@EmadGraphic 🇩🇪 IP';

    file_put_contents("subwarp/warp", $warp);

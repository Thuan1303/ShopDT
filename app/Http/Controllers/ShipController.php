<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipController extends Controller
{
    //
    public function getFee($province, $district, $qty, $value)
    {
        $data = array(
            "pick_province" => "TP Hồ Chí Minh",
            "pick_district" => "Quận Tân Phú",
            "pick_ward" => "Phường Tân Sơn Nhì",
            "pick_street" => "Đường Nguyễn Văn Săng",
            "province" => $province,
            "district" => $district,
            "weight" => 50 * $qty,
            "value" => $value,
            "transport" => "road",
            "deliver_option" => "none",
        );
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://services.giaohangtietkiem.vn/services/shipment/fee?" . http_build_query($data),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => array(
                "Token: 3AB6CF0Ee39F0b12C1f6669FDf1895de4c7dF2Bf",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}

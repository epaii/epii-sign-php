<?php

/**
 * Created by PhpStorm.
 * User: mrren
 * Date: 2019/6/28
 * Time: 1:26 PM
 */

namespace epii\sign;

class sign
{
    public static function encode(&$data, $secret_key, $return_array = false, $sign_key = "sign")
    {

        if (is_array($data)) {
            ksort($data);
            $string = "";
            foreach ($data as $key => $value) {
                $string .= $key . "=" . $value . "&";
            }
            if ($sign_key)
                $data[$sign_key] = md5($string . $secret_key);
            if ($return_array) {
                return $data;
            }
            return $data["sign"];
        }
        return null;
    }


    public static function check($data, $secret_key, $sign_key = "sign")
    {

        if (is_array($data)) {
            if (!isset($data[$sign_key])) {
                return false;
            }
            $sign = $data[$sign_key];
            unset($data[$sign_key]);

            self::encode($data, $secret_key);
            if ($data[$sign_key] == $sign) {
                return true;
            }
        }
        return false;
    }
}

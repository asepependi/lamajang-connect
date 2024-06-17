<?php

namespace App\Http\Traits;

trait MaskMoney
{
    public static function convert_rupiah($rp)
    {
        $result = substr(str_replace(".", "", $rp), 3);
        return $result;
    }

    public static function rupiah($rp)
    {
        return 'Rp. ' . number_format($rp, 0, '', '.');
    }
}

<?php

namespace App\Validation;

class WhatsappValid
{
    public function whatsapp_valid(string $str, string $fileds, array $data, string &$error = null)
    {
        if (preg_match('/^[0]{1}[0-9]+/', $data['phone'])) {
            $bool = preg_match('/^[0-9]{10}+$/', $data['phone']);
            return $bool = 0 ? false : true;
        } else {
            $error = "Nomor Whatsapp Tidak Valid";
            return false;
        }
    }
}

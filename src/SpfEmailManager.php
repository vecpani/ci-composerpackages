<?php

namespace zs\spf;

class SpfEmailManager {
    public static function sendEmail($to, $subject, $message) {
         echo "Email sended to " . $to . " subject " . $subject ;
    }
}
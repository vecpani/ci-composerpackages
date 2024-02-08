<?php

namespace zsdemo\spf;

class SpfEmailManager {
    public static function sendEmail($to, $subject, $message) {
         echo "Email sended to " . $to . " subject " . $subject ;
    }
}
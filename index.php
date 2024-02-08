<?php
require __DIR__ . '/vendor/autoload.php';
use zs\spf\SpfEmailManager;
?>
 
<p>
    Status pošiljanja e-pošte:
    <?= zsdemo\spf\SpfEmailManager::sendEmail('a@a.com','B','C') ?>
</p>

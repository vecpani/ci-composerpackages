<?php
require __DIR__ . '/vendor/autoload.php';
use zs\spf\SpfEmailManager;
?>
 
<p>
    Status pošiljanja e-pošte:
    <?= zs\spf\SpfEmailManager::sendEmail('A','B','C') ?>
</p>

<?php

require_once 'Notificator.php';

$notificator = new Notificator(slack: true);

$notificator->send('User register successfully.');
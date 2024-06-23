<?php

require_once 'BaseNotificator.php';

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 6/22/2024
 * @version 1.0.0
 */
class FacebookDecorator extends BaseNotificator {

    public function notify(string $message): void {
        parent::notify($message);
        echo 'Message from Facebook: ' . $message . ' Sending...' . PHP_EOL;
    }
}
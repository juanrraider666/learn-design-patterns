<?php

require_once 'NotificationComponentDecorator.php';

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 6/22/2024
 * @version 1.0.0
 */
class ConcreteNotifier implements NotificationComponentDecorator {

    public function notify(string $message): void {
       echo 'Send Message: ' . $message . PHP_EOL;
    }

}
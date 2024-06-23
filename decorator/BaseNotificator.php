<?php

require_once 'ConcreteNotifier.php';

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 6/22/2024
 * @version 1.0.0
 */
class BaseNotificator implements NotificationComponentDecorator {

    public function __construct(private NotificationComponentDecorator $notificationDecorator) {
    }

    public function notify(string $message): void {
        $this->notificationDecorator->notify($message);
    }
}
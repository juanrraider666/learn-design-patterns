<?php

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 5/31/2024
 * @version 1.0.0
 */
interface NotificationDecorator {

    public function notify(string $message): void;
}
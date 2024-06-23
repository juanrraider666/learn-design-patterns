<?php

require_once 'BaseNotificator.php';

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 6/22/2024
 * @version 1.0.0
 */
class SlackDecorator extends BaseNotificator {

    public function notify(string $message): void {
        parent::notify($message); // TODO: Change the autogenerated stub
        echo 'Message from Slack: ' . $message . ' Sending...' . PHP_EOL;
    }
}
<?php

require_once 'ConcreteNotifier.php';
require_once 'FacebookDecorator.php';
require_once 'SlackDecorator.php';


/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 6/22/2024
 * @version 1.0.0
 */
class Notificator {

    public function __construct(
        private readonly bool $facebook = false,
        private readonly bool $slack = false,
    ) {
    }

    public function send(string $message): void {
        $notificator = new ConcreteNotifier();
        $decorate = $this->sendFactory($notificator);
        $decorate->notify($message);
    }

    private function sendFactory(NotificationComponentDecorator $decorator): FacebookDecorator|NotificationComponentDecorator|SlackDecorator {

        if ($this->facebook) {
            $decorator = new FacebookDecorator($decorator);
        }

        if($this->slack) {
            $decorator = new SlackDecorator($decorator);
        }

        return $decorator;
    }

}
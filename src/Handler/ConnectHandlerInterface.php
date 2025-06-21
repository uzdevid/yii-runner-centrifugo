<?php

namespace UzDevid\Yii\Runner\Centrifugo\Handler;

use RoadRunner\Centrifugo\Request\Connect;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;

interface ConnectHandlerInterface {
    /**
     * @param Connect $request
     * @return void
     * @throws MessageExceptionInterface
     */
    public function handle(Connect $request): void;
}

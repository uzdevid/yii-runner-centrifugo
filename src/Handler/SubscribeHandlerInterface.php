<?php

namespace UzDevid\Yii\Runner\Centrifugo\Handler;

use RoadRunner\Centrifugo\Request\Subscribe;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;

interface SubscribeHandlerInterface {
    /**
     * @param Subscribe $request
     * @return void
     * @throws MessageExceptionInterface
     */
    public function handle(Subscribe $request): void;
}

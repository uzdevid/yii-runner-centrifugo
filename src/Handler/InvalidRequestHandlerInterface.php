<?php

namespace UzDevid\Yii\Runner\Centrifugo\Handler;

use RoadRunner\Centrifugo\Request\Invalid;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;

interface InvalidRequestHandlerInterface {
    /**
     * @param Invalid $request
     * @return void
     * @throws MessageExceptionInterface
     */
    public function handle(Invalid $request): void;
}

<?php

namespace UzDevid\Yii\Runner\Centrifugo\Handler;

use RoadRunner\Centrifugo\Request\Publish;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;

interface PublishHandlerInterface {
    /**
     * @param Publish $request
     * @return void
     * @throws MessageExceptionInterface
     */
    public function handle(Publish $request): void;
}

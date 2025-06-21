<?php

namespace UzDevid\Yii\Runner\Centrifugo\Handler;

use RoadRunner\Centrifugo\Request\Refresh;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;

interface RefreshHandlerInterface {
    /**
     * @param Refresh $request
     * @return void
     * @throws MessageExceptionInterface
     */
    public function handle(Refresh $request): void;
}

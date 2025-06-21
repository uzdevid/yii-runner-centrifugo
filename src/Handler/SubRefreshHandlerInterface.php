<?php

namespace UzDevid\Yii\Runner\Centrifugo\Handler;

use RoadRunner\Centrifugo\Request\SubRefresh;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;

interface SubRefreshHandlerInterface {
    /**
     * @param SubRefresh $request
     * @return void
     * @throws MessageExceptionInterface
     */
    public function handle(SubRefresh $request): void;
}

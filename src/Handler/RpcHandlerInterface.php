<?php

namespace UzDevid\Yii\Runner\Centrifugo\Handler;

use RoadRunner\Centrifugo\Request\RPC;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;

interface RpcHandlerInterface {
    /**
     * @param RPC $request
     * @return void
     * @throws MessageExceptionInterface
     */
    public function handle(RPC $request): void;
}

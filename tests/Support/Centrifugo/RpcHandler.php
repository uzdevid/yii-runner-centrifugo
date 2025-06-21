<?php declare(strict_types=1);

namespace UzDevid\Yii\Runner\Centrifugo\Tests\Support\Centrifugo;

use RoadRunner\Centrifugo\Request\RPC;
use UzDevid\Yii\Runner\Centrifugo\Handler\RpcHandlerInterface;

class RpcHandler implements RpcHandlerInterface {
    /**
     * @param RPC $request
     * @return void
     */
    public function handle(RPC $request): void {

    }
}

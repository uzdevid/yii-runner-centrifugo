<?php declare(strict_types=1);

namespace UzDevid\Yii\Runner\Centrifugo\Tests\Support\Centrifugo;

use JsonException;
use RoadRunner\Centrifugo\Payload\ConnectResponse;
use RoadRunner\Centrifugo\Request\Connect;
use UzDevid\Yii\Runner\Centrifugo\Handler\ConnectHandlerInterface;

class ConnectHandler implements ConnectHandlerInterface {
    /**
     * @throws JsonException
     */
    public function handle(Connect $request): void {
        $request->respond(new ConnectResponse('diko', null, ['ok' => true]));
    }
}

<?php declare(strict_types=1);

namespace UzDevid\Yii\Runner\Centrifugo\Tests\Support\Centrifugo;

use JsonException;
use RoadRunner\Centrifugo\Payload\PublishResponse;
use RoadRunner\Centrifugo\Request\Publish;
use UzDevid\Yii\Runner\Centrifugo\Handler\PublishHandlerInterface;

class PublishHandler implements PublishHandlerInterface {
    /**
     * @throws JsonException
     */
    public function handle(Publish $request): void {
        $request->respond(new PublishResponse($request->getAttributes()));
    }
}

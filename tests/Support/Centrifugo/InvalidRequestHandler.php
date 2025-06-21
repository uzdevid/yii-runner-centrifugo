<?php
declare(strict_types=1);

namespace UzDevid\Yii\Runner\Centrifugo\Tests\Support\Centrifugo;

use RoadRunner\Centrifugo\Request\Invalid;
use UzDevid\Yii\Runner\Centrifugo\Handler\InvalidRequestHandlerInterface;

class InvalidRequestHandler implements InvalidRequestHandlerInterface {
    public function handle(Invalid $request): void {
        // TODO: Implement handle() method.
    }
}

<?php declare(strict_types=1);

namespace UzDevid\Yii\Runner\Centrifugo\Tests\Support\Centrifugo;

use RoadRunner\Centrifugo\Request\Refresh;
use UzDevid\Yii\Runner\Centrifugo\Handler\RefreshHandlerInterface;

class RefreshHandler implements RefreshHandlerInterface {
    public function handle(Refresh $request): void {

    }
}

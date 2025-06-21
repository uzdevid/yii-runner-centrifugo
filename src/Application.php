<?php declare(strict_types=1);

namespace UzDevid\Yii\Runner\Centrifugo;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;
use RoadRunner\Centrifugo\Request\Connect;
use RoadRunner\Centrifugo\Request\Invalid;
use RoadRunner\Centrifugo\Request\Publish;
use RoadRunner\Centrifugo\Request\Refresh;
use RoadRunner\Centrifugo\Request\RequestInterface;
use RoadRunner\Centrifugo\Request\RPC;
use RoadRunner\Centrifugo\Request\SubRefresh;
use RoadRunner\Centrifugo\Request\Subscribe;
use UzDevid\Yii\Runner\Centrifugo\Exception\HandlerNotFoundException;
use UzDevid\Yii\Runner\Centrifugo\Exception\MessageExceptionInterface;
use UzDevid\Yii\Runner\Centrifugo\Handler\ConnectHandlerInterface;
use UzDevid\Yii\Runner\Centrifugo\Handler\InvalidRequestHandlerInterface;
use UzDevid\Yii\Runner\Centrifugo\Handler\PublishHandlerInterface;
use UzDevid\Yii\Runner\Centrifugo\Handler\RefreshHandlerInterface;
use UzDevid\Yii\Runner\Centrifugo\Handler\RpcHandlerInterface;
use UzDevid\Yii\Runner\Centrifugo\Handler\SubRefreshHandlerInterface;
use UzDevid\Yii\Runner\Centrifugo\Handler\SubscribeHandlerInterface;

final class Application {
    /**
     * @param ContainerInterface $container
     */
    public function __construct(
        private readonly ContainerInterface $container
    ) {
    }

    /**
     * @param RequestInterface $request
     * @throws ContainerExceptionInterface
     * @throws HandlerNotFoundException
     * @throws MessageExceptionInterface
     */
    public function handleRequest(RequestInterface $request): void {
        try {
            match (true) {
                $request instanceof Publish => $this->container->get(PublishHandlerInterface::class)->handle($request),
                $request instanceof Subscribe => $this->container->get(SubscribeHandlerInterface::class)->handle($request),
                $request instanceof Refresh => $this->container->get(RefreshHandlerInterface::class)->handle($request),
                $request instanceof Connect => $this->container->get(ConnectHandlerInterface::class)->handle($request),
                $request instanceof Invalid => $this->container->get(InvalidRequestHandlerInterface::class)->handle($request),
                $request instanceof SubRefresh => $this->container->get(SubRefreshHandlerInterface::class)->handle($request),
                $request instanceof RPC => $this->container->get(RpcHandlerInterface::class)->handle($request),
            };
        } catch (NotFoundExceptionInterface $e) {
            throw new HandlerNotFoundException('Handler not found for handling this request', $e->getCode(), $e);
        }
    }
}
